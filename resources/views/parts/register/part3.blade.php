<div class="hidden-xs col-sm-1">&nbsp;</div>
<div class="col-sm-10">
    <form id="singleUser">
    <div class="text-center">
        Step 3
        <p><b><span class="selfText">Are you...</span><span class="guardianText">Is your child...</span></b>
        </p>
        <div>
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
                <br>
                <br>
            </div>
            <div class="col-md-3">&nbsp;</div>
            <div class="col-md-4 diagnosis">
                <label>Other Diagnosis
                <select name="diagnosis" class="form-control otherDiagnosis">
                    <option value="" selected disabled>Select a Diagnosis</option>
                    <option>None</option>
                    <option>Disease 1</option>
                    <option>Disease 2</option>
                    <option>Disease 3</option>
                    <option value=“diag_oth”>Other</option>
                </select>
                </label>
            </div>
            <div id="afterDiagnosis"></div>
            <div class="col-md-2">
                <label>&nbsp;
                <button class="form-control btn btn-default"  name="addMoreDiag">Add another diagnosis</button></label>
            </div>
            <!--
            <div id="options" class="row">
                <div class="col-xs-6 text-right">Other Diagnosis: (Need diagnosis names)</div>
                <div class="col-xs-4">
                    <select name="singleDiagnosis" class="form-control">
                        <option>None</option>
                        <option value="d1">Disease 1</option>
                        <option value="d2">Disease 2</option>
                        <option value="d3">Disease 3</option>
                        <option value=“diag_oth”>Other</option>
                    </select>
                    <input type="text" name="otherDiagInput" id="otherDiagInput">
                </div>
                <br>
            </div>
            <br>
            <div id="afterDiagnosis"></div>
            <br>
            <button class="addMoreDiag">Add another diagnosis</button>
            -->
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