<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DARIS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,600" rel="stylesheet" type="text/css">

        <script src="https://use.fontawesome.com/3bacab567b.js"></script>

        <script src="/js/app.js"></script>
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            #header{
                color: white;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .vertical-align {
                display: flex;
                flex-direction: row;
            }

            @media(max-width: 767px) {
                .vertical-align > .visible-xs {
                     display: flex!important;
                     align-items: center;     /* Align the flex-items vertically */
                     justify-content: center; /* Optional, to align inner flex-items
                                  horizontally within the column  */
                }
            }

            .vertical-align > [class^="col-"],
            .vertical-align > [class*="col-"] {
                display: flex;
                align-items: center;     /* Align the flex-items vertically */
                justify-content: center; /* Optional, to align inner flex-items
                              horizontally within the column  */
            }
        </style>
    </head>
    <body>
        @include("parts.navLoggedIn")
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
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <div class="hidden-xs col-sm-3">&nbsp;</div>
                </div>
            </div>
        </div>
    </body>
</html>
