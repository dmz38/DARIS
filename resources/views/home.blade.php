<!doctype html>
<html lang="{{ config('app.locale') }}">
@include('parts.head')
<body>
@include("parts.navLoggedIn")
<div class="container-fluid">
    <br><br><br>
    <div class="col-xs-12 col-sm-push-1 col-sm-10">
        <div class="text-center">
            <div class="menuOption">
                <a href="/register" target="_blank"><h2><i class="fa fa-user-circle-o" aria-hidden="true"></i> Register
                        <i class="fa fa-arrow-right" aria-hidden="true"></i></h2></a>
                <h5>Register potential research participants.</h5>
            </div>

            <div class="menuOption">
                <a href="/recruit"><h2><i class="fa fa-users" aria-hidden="true"></i> Recruit
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </h2></a>
                <h5>Start a new recruitment blast for a new study</h5>
            </div>

            <div class="menuOption">
                <a href="/data"><h2><i class="fa fa-search" aria-hidden="true"></i> Data Analysis
                        <i class="fa fa-arrow-right" aria-hidden="true"></i></h2></a>
                <h5>Access data from your studies</h5>
            </div>

            <div class="menuOption">
                <a href="/data"><h2><i class="fa fa-save" aria-hidden="true"></i> Data Export
                        <i class="fa fa-arrow-right" aria-hidden="true"></i></h2></a>
                <h5>Access data from your studies</h5>
            </div>
        </div>
    </div>
</div>
</body>
</html>
