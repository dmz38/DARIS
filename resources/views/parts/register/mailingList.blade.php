<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10">
    <h3 class="text-center"> Join the AJ Drexel Mailing List! </h3>
    <h5 class="text-center">[CONSENT PARAGRAPH]</h5>

    <form id="mailingListForm">
        <div class="row">
            @include("parts.register.form.name")
        </div>

        <br>
        <div class="row">
            @include("parts.register.form.address")
        </div>
        <br>

        <div class="row">
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <label>Email Address
                    <input type="text" class="form-control" id="email" name="mailEmail"></label>
                </div>
                <div class="col-md-9"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="row">
                <div class="col-md-4">
                    <h6><b>Which of the following applies to you?</b></h6>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Drexel Alumni</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Guardian/Caregiver of a child with ASD</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Researcher</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Supporter</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Community Partner/Provider</label>
                    </div>
                    <div class="checkbox">
                        <div><label><input type="checkbox" value=""/>Other</label>
                            <span class="pull-right">
                                <input class="form-control" id="inputsm" type="text">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">&nbsp;</div>
            </div>
        </div>
    </form>
    <br>
    <div class="row">
        <button id="mailPrev" class="btn btn-primary target pull-left">BACK</button>
        <button id="mailNext" class="btn btn-primary target pull-right">NEXT</button>
    </div>
</div>
<div class="col-sm-1">&nbsp;</div>


