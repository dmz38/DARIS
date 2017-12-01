<div class="row">
    <div class="col-md-3">
        <label>Date of Birth</label>
        <input type="date" class="form-control" name="dob" required>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-3">
        <label>Gender</label>
        <select class="form-control gender" name="gender" required>
            <option value="" selected disabled>Select a Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-3 otherGender">
        <label>Other Gender</label>
        <input type="text" class="form-control" name="otherGender" placeholder="Other Gender">
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-3">
        <label>Race</label>
        <select class="form-control" name="race" required>
            <option value="" selected disabled>Select a Race</option>
            <option value="americanIndian">American Indian/Alaska Native</option>
            <option value="asian">Asian</option>
            <option value="hawaiian">Native Hawaiian or Other Pacific Islander</option>
            <option value="afr">Black or African American</option>
            <option value="white">White</option>
            <option value="mix">More that One Race</option>
            <option value="dnd">Unknown or I Don't Want to Disclose</option>
        </select>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-3">
        <label >Ethnicity</label>
        <select class="form-control" name="ethnicity" required>
            <option value="" selected disabled>Select a Ethnicity</option>
            <option value="1">HIspanic or Latino</option>
            <option value="0">Not HIspanic or Latino</option>
            <option value="2">Unknown or I Don't Want to Disclose</option>
        </select>
    </div>
</div>