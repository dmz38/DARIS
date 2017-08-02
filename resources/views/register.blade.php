<html>
    @include("parts.head")
    <body>
        @include("parts.nav")
        <div class="container">
            <h2>Register</h2>
            <div id="surveyWrap">
                <div id="part1">
                    @include("parts.register.part1")
                </div>
                <div id="part2">
                    @include("parts.register.part2")
                </div>
                <div class="clearfix"></div>
                <div id="registerParticipant">
                    <div id="part3">
                        @include("parts.register.part3")
                    </div>
                    <div class="clearfix"></div>
                    <div id="part4">
                        @include("parts.register.part4-guardian")
                    </div>
                    <div class="clearfix"></div>
                    <div id="part5">
                        @include("parts.register.part5")
                    </div>
                    <div class="clearfix"></div>
                </div>
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
    </body>
    <script>
        $("#surveyWrap").children().not("#part1").hide();
        $("#part1Submit").on("click", function() {
            $show = $("#part2");
            if(!$("#suggestCheck").is(":checked") && $("#learnCheck").is(":checked")) {
                $show = $("#registerMailingList");
            }
            $("#part1").hide();
            $show.fadeIn();
        });
        $("#part2Next").on("click", function() {
            $("#part2").hide();
            if($("#rElse").is(":checked")) {
                $("#nominate").fadeIn();
            } else {
                $("#registerParticipant").show().children().not("#part3").hide();
            }
            $show.fadeIn();
        });
        $("#part3Next").on("click", function() {
            if($("#rGuardian").is(":checked")) {
                $show = $(".guardianText");
            } else {
                $show = $(".selfText");
            }
            $("#part3").hide();
            $("#part4").fadeIn();
            $show.show();
        });
        $("#mailNext").on("click", function() {
           $("#registerMailingList").hide();
           $("#submit").fadeIn();
        });
    </script>
</html>