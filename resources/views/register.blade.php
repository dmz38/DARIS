<html>
@include("parts.head")
<body>
@include("parts.nav")
<form id="registerForm">
<div class="container-fluid">
    <div class="col-xs-12 col-lg-push-1 col-lg-10">
        <h2>Register</h2>
        <div id="surveyWrap">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div id="part1" class="surveySection">
                @include("parts.register.part1")
            </div>
            <div id="part2" class="surveySection">
                @include("parts.register.part2")
            </div>
            <div class="clearfix"></div>

            <div id="consentPart" class="surveySection">
                @include("parts.register.consent")
            </div>

            <div id="part3" class="surveySection">
                @include("parts.register.part3")
            </div>
            <div class="clearfix"></div>
            <div id="part4" class="surveySection">
                @include("parts.register.part4")
            </div>
            <div class="clearfix"></div>
            <div id="part5" class="surveySection">
                @include("parts.register.part5")
            </div>
            <div class="clearfix"></div>
            <div id="registerMailingList">
                <div id="mailingList">
                    @include("parts.register.mailingList")
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="nominate">
                @include("parts.register.nominate")
            </div>
            <div id="submit">
                @include("parts.register.submit")
            </div>
        </div>
    </div>
    <template id="childTemplate">
        @include("parts.register.form.childTemplate")
    </template>
</div>
</form>
</body>
<script>
    //$(function () {
    //  $('[data-toggle="tooltip"]').tooltip()
    //});

    var childCount = 1;

    // hide all parts that shouldn't be seen
    $("#surveyWrap").children().not("#part1").hide();
    $("#otherDiagInput, .otherGender").hide();

    // next logic
    $("#part1Next").on("click", function () {
        checked = $("input[type=checkbox]:checked").length;
        if (!checked) {
            alert("You must check at least one checkbox.");}
        else {
            $show = $("#part2");
            if (!$("#suggestCheck").is(":checked") && $("#learnCheck").is(":checked")) {
                $show = $("#registerMailingList");
            }
            $("#part1").hide();
            $show.fadeIn();
        };
    });

    var selfID = 0;

    $("#rSelf").on("click", function () {
        $(".guardianText").hide();
        $(".selfText").show();
        selfID = 1;
    });

    $("#rGuardian").on("click", function () {
        $(".guardianText").show();
        $(".selfText").hide();
        selfID = 0;
    });


    var q01 = $('input[name=Nomination]');

    // <!-- script added by Saugat for button -->
    validate();
    $("input[type='radio']").change(validate);
    function validate() {
        if ($(q01).is(':checked') ) {
            $(".btn#part2Next").removeAttr("disabled", false);
        } else {
            $(".btn#part2Next").attr("disabled", true);
        }
    }
    // <!-- end of added script -->

    $("#part2Next").on("click", function () {
        $("#part2").hide();
        if ($("#rElse").is(":checked")) {
            $("#nominate").fadeIn();
        } else {
            $("#consentPart").show();
            $("#suspected").hide();
            //added hidden other diagnosis text box to start of part 3
            $("#otherDiag").hide();
        }
    });

    $("#consentNext").on("click", function(){
        $("#consentPart").hide();
        if (selfID == 1) {
            $("#part3").fadeIn();
        } else {
            $("#part4").fadeIn();
            $("#otherGenderChild").hide();
            $("#otherGenderYou").hide();
            // $("#childOtherInfo").append($("#pastReview").html() + $("#dataPermission").html() );
            // $("#guardianInfo").append("<br>" + $("#pastReview").html() );
        }
    });

    $("#part3Next").on("click", function () {
        $("#part3").hide();
        $("#part4").fadeIn();
        $("#otherGenderChild").hide();
        $("#otherGenderYou").hide();
    });

    $("#part4Next").on("click", function () {
        $("#part4").hide();
        $("#part5").fadeIn();
    });

    $("#part5Next").on("click", function () {
        $("#mailingList, #nominate").html("");
        //console.log($("#registerForm").serializeArray());
        //var formData = objectifyForm($("#registerForm").serializeArray());

        $.post("/ajax/register", $("#registerForm").serializeArray(), function(data){
            console.log(data);
        }, "json");

        //console.log(formData);

        $("#part5").hide();
        $("#part6").fadeIn();
    });

    $("#part5Next").on("click", function () {
        $("#part5").hide();
        $("#submit").fadeIn();
    });

    $("#mailNext").on("click", function () {
        $("#registerMailingList").hide();
        $("#submit").fadeIn();
    });

    $("#nominateNext").on("click", function () {
        $("#nominate").hide();
        $("#submit").fadeIn();
    });

    // all back logic

    $('#no1, #yes1').click(function () {
        if ($('#no1').is(':checked')) {
            $("#suspected").show();
        }
        else {
            $("#suspected").hide();
        };
    });

    //added the fade in/out of the other diagnosis text box
    $("#options").on("change", function () {
        if ($("#options").val() == "diag_oth") {
            $("#otherDiag").fadeIn();
        }
        if ($("#options").val() != "diag_oth") {
            $("#otherDiag").hide();
        }
    });

    $('.addMoreDiag').on("click", function () {
        $("#afterDiagnosis").append($("#options").html() + "<br>");
    });

    $('.addMoreDiagnosis').on("click", function () {
        $("#afterOtherDiagnosis").append('<div class="col-md-12" style="margin-left:0px;">'+ $("#otherDiagnosisGuardian").html() + "</div><br>");
    });

    $('#genderYou').on("change", function () {
        if ($("#genderYou").val() == "gender3") {
            $("#otherGenderYou").fadeIn();
        }
        if ($("#genderYou").val() != "gender3") {
            $("#otherGenderYou").hide();
        }
    });

    $("#singleDiagnosis").on("change", function(){
        if ($(this).val() == "diag_oth") {
            $("#otherDiagInput").fadeIn();
        } else {
            $("#otherDiagInput").fadeOut();
        }
    });

    $('body').on("change", ".gender",  function () {
        if ((this).val() == "other") {
            $(this).closest(".otherGender").fadeIn();
        } else {
            $(this).closest(".otherGender").hide();
        }
    });

    $("body").on("click", ".addMore", function () {
        childCount++;
        $("#childData").append($("#childTemplate").html());
    });

    $(".prev").on("click", function () {
        //console.log("CLICKED:" + $(this).prop("id"));
        $thisSection = $(this).closest(".surveySection");
        //console.log($thisSection.prop("id"));
        $prevSection = $thisSection.prevAll(".surveySection:first");
        //console.log($prevSection.prop("id"));
        $thisSection.hide();
        $prevSection.show();
    });

    $("#mailPrev").on("click", function () {
        $("#mailingList").hide();
        $("#part1").show();
    });

    $("#nominatePrev").on("click", function () {
        $("#nominate").hide();
        $("#part2").show();
    });


    // specific button actions
    $("#prevYes").on("click", function () {
        $("#shareInfo").fadeIn();
    });

    $("#prevNo").on("click", function () {
        $("#shareInfo").fadeOut();
    });

    function objectifyForm(formArray) {//serialize data function

        var returnArray = {};
        for (var i = 0; i < formArray.length; i++){
            returnArray[formArray[i]['name']] = formArray[i]['value'];
        }
        return returnArray;
    }
</script>
</html>