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
        <div>
            <input type="file" accept="media_type" style="margin-left: 20px;">

            <br>

            <h5>E-mail Body</h5>
            <textarea name="email" class="email"></textarea>

            <br>
            <br>

            <h5>Text Message</h5>
            <textarea name="message" id="message" class="message" maxlength="124"></textarea>

            <br>
            <br>

            <div style="margin-left:20px;" id="characters"></div>

            <br>
            <br>

            <div class="row">
                <div class="pull-left">
                    <button onclick="window.location='/recruit/search'" class="btn btn-default button pull-left">BACK</button>
                </div>

                <div class="pull-right">
                    <button onclick="window.location='/recruit/summary'" class="btn btn-default button pull-right">NEXT</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var text_max = 124;
        $('#characters').html(text_max + ' characters remaining');

        $('#message').keyup(function() {
            var text_length = $('#message').val().length;
            var text_remaining = text_max - text_length;

            $('#characters').html(text_remaining + ' characters remaining');
        });
    });
</script>
</body>
</html>