<div class="row">
    <div class="col-md-3">
        <label for="usr">Date of Birth</label>
        <input type="date" class="form-control" name="dob" required>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-3">
        <label for="pwd">Gender</label>
        <select class="form-control gender" name="gender" required>
            <option selected disabled>Select a Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-3 otherGender">
        <label for="gen">Other Gender</label>
        <input type="text" class="form-control" name="otherGender" placeholder="Other Gender">
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-3">
        <label for="usr">Race</label>
        <select class="form-control" name="race" required>
            <option selected disabled>Select a Race</option>
            <option value="race1">American Indian/Alaska Native</option>
            <option value="race2">Asian</option>
            <option value="race3">Native Hawaiian or Other Pacific Islander</option>
            <option value="race4">Black or African American</option>
            <option value="race5">White</option>
            <option value="race6">More that One Race</option>
            <option value="race7">Unknown or I Don't Want to Disclose</option>
        </select>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-3">
        <label for="eth">Ethnicity</label>
        <select class="form-control" name="ethnicity" required>
            <option selected disabled>Select a Ethnicity</option>
            <option value="ethnic1">HIspanic or Latino</option>
            <option value="ethnic2">Not HIspanic or Latino</option>
            <option value="ethnic3">Unknown or I Don't Want to Disclose</option>
        </select>
    </div>
</div>