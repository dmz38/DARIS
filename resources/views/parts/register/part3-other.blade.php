<div class="col-md-1"></div>
<div class="col-md-10">
    <h2>Register</h2>
    <h5 class="text-center"> 2/2 </h5>
    <h5 class="text-center">PERSONAL DATA</h5>

    <div class="row">

        <div class="col-md-3">
            <label for="usr">First Name:</label>
            <input type="text" class="form-control" id="firstname" required>
        </div>
        <div class="col-md-3">
            <label for="usr">Last Name:</label>
            <input type="text" class="form-control" id="lastname" required>
        </div>
        <div class="col-md-6"></div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-3">
            <label for="usr">Date of Birth</label>
            <input type="date" class="form-control" id="dob" required>
        </div>
        <div class="col-md-3">
            <label for="pwd">Gender</label>
            <select class="form-control" id="gender" required>
                <option selected disabled></option>
                <option value="gender1">Male</option>
                <option value="gender2">Female</option>
                <option value="gender3">Others</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="usr">Ethnicity</label>
            <select class="form-control" id="Ethnicity" required>
                <option selected disabled></option>
                <option value="ethnic1"></option>
                <option value="ethnic2"></option>
                <option value="ethnic3"></option>
            </select>
        </div>
    </div>
    <br>

    <div style="margin-left: 0px;" class="row">
        <div class="row">
            <div class="col-md-3">
                <label for="usr">Address:</label>
                <input type="text" class="form-control" id="address1" placeholder="Address line 1"><br>
                <input type="text" class="form-control" id="address2" placeholder="Address line 2"><br>
            </div>
            <div class="col-md-9"></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="City">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="State">
            </div>
            <div class="col-md-3">
                <input type="text" pattern ="[0-9]{5}" class="form-control" placeholder="Zip-code">
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-3">
            <label for="usr">Email Address</label>
            <input type="text" class="form-control" id="email" required>
        </div>
        <div class="col-md-9"></div>
    </div><br>
    <div>
        <h6><b>Which of the following applies to you?</b></h6>
        <div class="checkbox">
            <label><input type="checkbox" value="">Alumni</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="">Parent of a child with ASD</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="">Researcher</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="">Donor</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="">Community Partner</label>
        </div>
        <div class="checkbox row">
            <div class="col-md-1"><label><input type="checkbox" value="">Other</div>
            <div class="col-md-2"><input class="form-control input-sm" id="inputsm" type="text"></div>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-1"><button class="btn btn-primary target" type="submit">BACK</button></div>
        <div class="col-md-3"></div>
        <div class="col-md-1"><button class="btn btn-primary target" type="submit">NEXT</button></div><br><br><br>
    </div>


    <div class="col-md-1"></div>