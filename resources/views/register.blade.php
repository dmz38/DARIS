<html>
@include("parts.head")
<body>
@include("parts.nav")
<div class="container-fluid">
    <div class="col-xs-12 col-lg-push-1 col-lg-10">
        <h2>Register</h2>
        <div id="surveyWrap">
            <div id="part1" class="surveySection">
                @include("parts.register.part1")
            </div>
            <div id="part2" class="surveySection">
                @include("parts.register.part2")
            </div>
            <div class="clearfix"></div>
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
            <div id="submit">
                @include("parts.register.submit")
            </div>
        </div>
    </div>
</div>
</body>
<script>
    // hide all parts that shouldn't be seen
    $("#surveyWrap").children().not("#part1").hide();

    // next logic
    $("#part1Next").on("click", function () {
        $show = $("#part2");
        if (!$("#suggestCheck").is(":checked") && $("#learnCheck").is(":checked")) {
            $show = $("#registerMailingList");
        }
        $("#part1").hide();
        $show.fadeIn();
    });

    $("#part2Next").on("click", function () {
        $("#part2").hide();
        if ($("#rElse").is(":checked")) {
            $("#nominate").fadeIn();
        } else {
            if ($("#rSelf")) {
                $(".guardianText").hide();
                $(".selfText").show();
            } else {
                $(".guardianText").show();
                $(".selfText").hide();
            }
            $("#part3").show();
        }
    });

    $("#part3Next").on("click", function () {
        $("#part3").hide();
        $("#part4").fadeIn();
    });

    $("#part4Next").on("click", function () {
        $("#part4").hide();
        $("#part5").fadeIn();
    });

    $("#part5Next").on("click", function () {
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

    // all back logic

    $(".prev").on("click", function () {
        console.log("CLICKED:" + $(this).prop("id"));
        $thisSection = $(this).closest(".surveySection");
        console.log($thisSection.prop("id"));
        $prevSection = $thisSection.prevAll(".surveySection:first");
        console.log($prevSection.prop("id"));
        $thisSection.hide();
        $prevSection.show();
    });

    $("#mailPrev").on("click", function () {
        $(this).closest(".surveySection").hide();
        $("#part1").show();
    });


    // specific button actions
    $("#prevYes").on("click", function () {
        $("#shareInfo").fadeIn();
    });

    $("#prevNo").on("click", function () {
        $("#shareInfo").fadeOut();
    });
</script>
</html>