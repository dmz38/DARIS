<div class="childInfo guardianText">
    <div>
        <h3><b>Child</b></h3>
        <div class="childInfo">
            <b>
                <hr>
            </b>
            <div class="row">
                <div class="col-md-6">
                    <label for="usr">First Name:</label>
                    <input type="text" class="form-control firstname" required>
                </div>
                <div class="visible-xs">
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="usr">Last Name:</label>
                    <input type="text" class="form-control lastname" required>
                </div>
                <div class="col-md-6"></div>
            </div>
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
                                    <label class="radio-inline" for="daignosedASDY">
                                        <input type="radio" name="diagnosedASD" class="daignosedASDY" value="1"> Yes
                                    </label>
                                    <label class="radio-inline" for="daignosedASDN">
                                        <input type="radio" name="diagnosedASD" class="daignosedASDN" value="0"> No
                                    </label>
                                </span>
                </h5>
            </div>
            <div class="col-md-6">
                <h5>I think my child might have ASD
                    <span class="pull-right">
                                    <label class="radio-inline" for="suspectedASDY">
                                        <input type="radio" name="suspectedASD" class="suspectedASDY" value="1"> Yes
                                    </label>
                                    <label class="radio-inline" for="suspectedASDN">
                                        <input type="radio" name="suspectedASD" class="suspectedASDN" value="0"> No
                                    </label>
                                </span>
                </h5>
            </div>
            <div class="col-md-12 otherDiagnosis">
                <label for="diag">Other Diagnosis</label>
                <select class="form-control" class="otherDiagnosis">
                    <option selected disabled>Select a Diagnosis</option>
                    <option>None</option>
                    <option>Disease 1</option>
                    <option>Disease 2</option>
                    <option>Disease 3</option>
                </select>
            </div>
            <br>
            <div class="hidden-xs afterOtherDiagnosis"></div>
            <div class="col-md-6">
                <button class="btn btn-default">Add another diagnosis</button>
            </div>
        </div>

        <div class="guardianText row dataPermission">
            <div class="firstStudy col-md-12">
                <h5>
                    To the best of your knowledge, has your child ever participated in an AJ Drexel Autism Institute study before?
                    <span class="pull-right">
                                    <label><input class="prevStudyYes" type="radio" name="previous"
                                                  value="1"> Yes </label>
                                    <label><input class="prevStudyNo" type="radio" name="previous"
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
                                    <label><input class="prevInfoYes" type="radio" name="info" value="1"> Yes </label>
                                    <label><input class="prevInfoNo" type="radio" name="info" value="0"> No </label>
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