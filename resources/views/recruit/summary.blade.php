<html>
@include("parts.head")
<body>
@include("parts.navLoggedIn")
<div class="container-fluid">
    <div class="col-xs-12 col-lg-push-1 col-lg-10">
        <div>
            <h4><a href="/recruit"><i class="fa fa-angle-left"></i> BACK</a></h4>
            <h1>Recruit</h1>
            <p> Create messages to send to potential participants. </p>
        </div>
        <div class="text-center">
            <h3>Recruitment Summary</h3>
            <p> 50 emails and 40 text messages will be sent to users. </p>
            <p> 2 Attachments | <a href="">Delete all</a> </p>

            <div class="row">
                <div class = "col-xs-push-3 col-xs-3" >
                    <div class = "well well-lg">  <span class="pull-right">x</span><br><br><br></div>
                </div>

                <div class = "col-xs-push-3 col-xs-3">
                    <div class = "well well-lg"> <span class="pull-right">x</span><br><br><br></div>
                </div>
            </div>
            <div style="margin: 0 10vw 0 10vw">
                <div class="pull-left">
                    <button onclick="window.location='/recruit/message'" class="btn btn-default button pull-left">BACK</button>
                </div>

                <div class="pull-right">
                    <button onclick="window.location='/recruit'" class="btn btn-default button pull-right"> FINISH </button>
                </div>
            </div>
        </div>
</div>
</body>
</html>