<div class="hidden-xs col-sm-1">&nbsp;</div>
<div class="col-sm-10">
    <form id="singleUser">
    <div class="text-center">
        Step 3
        <p><b><span class="selfText">Are you...</span><span class="guardianText">Is your child...</span></b>
        </p>
        <div>
            <div name="ASDYN">
                <div id="diagnosed" class="row">
                    <div class="col-xs-6 text-right">
                        Diagnosed with ASD:
                    </div>
                    <div class="col-xs-6 text-left">
                        <div class="col-xs-2" id="radioDiagnosed">
                            <label><input type="radio" name="Diagnosed" id="diagnosedYes" value="1"/>Yes</label>
                        </div>
                        <div class="col-xs-2">
                            <label><input type="radio" name="Diagnosed" id="diagnosedNo" value="0"/> No</label>
                        </div>
                    </div>
                </div>
                <br>
                <div id="suspected" class="row">
                    <div class="col-xs-6 text-right">
                        Suspected with ASD:
                    </div>
                    <div class="col-xs-6 text-left">
                        <div class="col-xs-2">
                            <label><input type="radio" name="Suspected" id="suspectedYes" value="1"/> Yes</label>
                        </div>
                        <div class="col-xs-2">
                            <label><input type="radio" name="Suspected" id="suspectedNo" value="0"/> No</label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <label>Other Diagnosis</label>
            <div class="row" name="diagnosis">
                <div class="col-md-4 hiddenn-xs">&nbsp;</div>
                <div class="col-md-4 diagnosis">
                    <select class="form-control otherDiagnosis">
                        <option value="" selected disabled>Select a Diagnosis</option>
                        <option>None</option>
                        <option>Disease 1</option>
                        <option>Disease 2</option>
                        <option>Disease 3</option>
                        <option value=“diag_oth”>Other</option>
                    </select>
                </div>
                <div class="col-md-4 hiddenn-xs">&nbsp;</div>
            </div>
            <br>
            <div class="hidden-xs afterDiag"></div>
            {{--<div id="afterDiagnosis"></div>--}}
            <div class="row">
                <div class="col-md-4 hiddenn-xs">&nbsp;</div>
                <div class="col-md-4 center">
                    <button type="button" class="btn btn-default" name="addDiag">Add another diagnosis</button>
                </div>
                <div class="col-md-4 hiddenn-xs">&nbsp;</div>
            </div>
        </div>
        <div class="clearfix"></div>
        <br>
        <div>
            <button id="part3Prev" class="btn btn-primary target pull-left prev" type="button">BACK</button>
            <button id="part3Next" class="btn btn-primary target pull-right" type="button">NEXT</button>
        </div>
    </div>
    </form>
</div>
<div class="hidden-xs col-sm-1">&nbsp;</div>