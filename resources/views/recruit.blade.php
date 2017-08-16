<html>
@include("parts.head")
<body>
@include("parts.navLoggedIn")
<div class="container-fluid">
    <div class="col-xs-12 col-lg-push-1 col-lg-10">
        <h1>Recruit</h1>
        <p> Choose the study that you'd like to check on the status of recruitment </p>
        <div class="row">
                <div class="row row-eq-height ">

                    <div class="col-xs-3">
                        <div class="well well-lg">
                            <h2>DMZ Autism Study </h2>
                            <div class="name"> 100 Potential Participants</div>
                            <div style="margin: 15px 0px 0px 30px">
                                <div class="message">
                                    <div>65 - Yes</div>
                                    <div>25 - No</div>
                                    <div>20 - Pending</div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="more"> More…</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-1">&nbsp;</div>
                    <div class="col-xs-3">
                        <div class="well well-lg">
                            <h2>DMZ Autism Study </h2>
                            <div class="name"> 100 Potential Participants</div>
                            <div style="margin: 15px 0px 0px 30px">
                                <div class="message">
                                    <div>65 - Yes</div>
                                    <div>25 - No</div>
                                    <div>20 - Pending</div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="more"> More…</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-1">&nbsp;</div>
                    <div class="col-xs-3">
                        <div class="well well-lg">
                            <h2>DMZ Autism Study </h2>
                            <div class="name"> 100 Potential Participants</div>
                            <div style="margin: 15px 0px 0px 30px">
                                <div class="message">
                                    <div> Messages pending...</div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="more"> More…</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-xs-5">
                <div class="form-group">
                    <label for="usr"> Start a new study… </label>
                    <input class="form-control form-inline" id="usr" type="text">
                </div>
                <button type="button" onclick="window.location='/recruit/search'"
                        class="btn btn-default btn-sm form-inline pull-right"> START
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>