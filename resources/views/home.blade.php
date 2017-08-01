<!doctype html>
<html lang="{{ config('app.locale') }}">
    @include('parts.head')
    <body>
        @include("parts.navLoggedIn")
        <div class="container">
           <div class="pageHeader">
                <h1>Home</h1>
                <h3>Click below to get started...</h3>
            </div>

            <div class="menuOption">
                <a href="/register"><h2><i class="fa fa-user-circle-o" aria-hidden="true"></i> Register <i class="fa fa-arrow-right" aria-hidden="true"></i></h2></a>
                <h5>Register potential research participants.</h5>
            </div>

            <div class="menuOption">
                <a href="/recruit"><h2><i class="fa fa-users" aria-hidden="true"></i> Recruit <i class="fa fa-arrow-right" aria-hidden="true"></i></h2></a>
                <h5>Reach out to potential research participants for a new study.</h5>
            </div>

            <div class="menuOption">
                <a href=""><h2><i class="fa fa-search" aria-hidden="true"></i> Study <i class="fa fa-arrow-right" aria-hidden="true"></i></h2></a>
                <h5>Look into your current research.</h5>
            </div>
        </div>
    </body>
</html>
