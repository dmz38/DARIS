<div class="hidden-xs col-sm-1">&nbsp;</div>
<div class="col-sm-10">
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
                    <div class="col-xs-3" id="radioDiagnosed">
                        <input type="radio" name="Diagnosed" id="diagnosedYes" value="1"/> <label for="diagnosedYes">Yes</label>
                    </div>
                    <div class="col-xs-2">
                        <input type="radio" name="Diagnosed" id="diagnosedNo" value="0"/> <label for="no1">No</label>
                    </div>
                </div>
            </div>
            <br>
            <div id="suspected" class="row">
                <div class="col-xs-6 text-right">
                    Suspected with ASD:
                </div>
                <div class="col-xs-6 text-left">
                    <div class="col-xs-3">
                        <input type="radio" name="Suspected" id="suspectedYes" value="1"/> <label for="yes2">Yes</label>
                    </div>
                    <div class="col-xs-2">
                        <input type="radio" name="Suspected" id="suspectedNo" value="0"/> <label for="no2">No</label>
                    </div>
                </div>
            </div>
            <br>
            <br>
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
        </div>
        <br>
        <div>
            <button id="part3Prev" class="btn btn-primary target pull-left prev" type="button">BACK</button>
            <button id="part3Next" class="btn btn-primary target pull-right" type="button">NEXT</button>
        </div>
    </div>
</div>
<div class="hidden-xs col-sm-1">&nbsp;</div>