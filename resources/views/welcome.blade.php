<!doctype html>
<html lang="{{ config('app.locale') }}">
    @include("parts.head")
    <body>
        @include("parts.nav")
        <div class="content">
            <h2 class="text-center">Sign In</h2>
            <div class="container">
                <div class="row">
                    <div class="hidden-xs col-sm-3">&nbsp;</div>
                    <div class="col-xs-12 col-sm-6">
                        <form id="signInForm">
                            <div class="form-group">
                                <label for="uName">Username</label>
                                <input type="text" class="form-control" id="uName" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="pswd">Password</label>
                                <input type="password" class="form-control" id="pswd" placeholder="Password">
                            </div>
                            <a href="/home"><input type="button" class="btn btn-default" value="Submit"></a>

                        </form>
                    </div>
                    <div class="hidden-xs col-sm-3">&nbsp;</div>
                </div>
            </div>
        </div>
    </body>
</html>
