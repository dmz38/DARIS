
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
            <div class="col-md-6">
                <h5>My Child is diagnosed with ASD
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
            <br>
            <div class="col-md-4 otherDiagnosis">
                <label>Other Diagnosis</label>
                <select class="form-control otherDiagnosis" name="diagnosis">
                    <option value="" selected disabled>Select a Diagnosis</option>
                    <option>None</option>
                    <option>Disease 1</option>
                    <option>Disease 2</option>
                    <option>Disease 3</option>
                </select>
            </div>
            <div class="hidden-xs afterOtherDiagnosis"></div>
            <div class="col-md-2">
                <button class="form-control btn btn-default diagnosis">Add another diagnosis</button>
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
        <button class="addMore btn btn-default">Add more children</button>
    </div>
</div>
</form>