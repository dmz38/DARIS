
<form class="childSection">
<div class="guardianText">
    <div>
        <h3><b>Child</b></h3>
        <div class="childInfo">
            <hr>
            @include("parts.register.form.name")
            <br>
        </div>
    </div>

    <div class="searchCriteria">
        <div class="childOtherInfo">
            @include("parts.register.form.demographic")
        </div>
        <br><br>

        <div class="pastReview row">
            <div name="ASDYN">
                <div class="col-md-6">
                    <h5>My child is diagnosed with ASD
                        <span class="pull-right">
                            <label class="radio-inline">
                                <input type="radio" name="diagnosed" class="diagnosedASDY" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="diagnosed" class="diagnosedASDN" value="0"> No
                            </label>
                        </span>
                    </h5>
                </div>
                <div class="col-md-6">
                    <h5>I think my child might have ASD
                        <span class="pull-right">
                            <label class="radio-inline">
                                <input type="radio" name="suspected" class="suspectedASDY" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="suspected" class="suspectedASDN" value="0"> No
                            </label>
                        </span>
                    </h5>
                </div>
            </div>
            <br>
            <h4 class="center" style="margin-left: 15px;">Other Diagnosis</h4>
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
        <br>

        <div class="guardianText row dataPermission">
            <div class="firstStudy col-md-12">
                <h5>
                    To the best of your knowledge, has your child ever participated in an AJ Drexel Autism Institute study before?
                    <span class="pull-right">
                                    <label><input class="prevStudyYes" type="radio" name="newRegister"
                                                  value="1"> Yes </label>
                                    <label><input class="prevStudyNo" type="radio" name="newRegister"
                                                  value="0"> No </label>
                                    <br/>
                                </span>
                </h5>
            </div>
            <div class="shareInfo col-md-12">
                <h5>
                    Do you allow the AJ Drexel Autism Institute to review the data from previous studies of this person
                    as part of the research process?
                    <span class="pull-right">
                                    <label><input class="prevInfoYes" type="radio" name="permToShare" value="1"> Yes </label>
                                    <label><input class="prevInfoNo" type="radio" name="permToShare" value="0"> No </label>
                                    <br/>
                                </span>
                </h5>
            </div>
        </div>
    </div>
    <div class="guardianText">
        <input type="button" class="addMore btn btn-default" value="Add more children">
    </div>
</div>
</form>
