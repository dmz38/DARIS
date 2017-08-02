<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10">
    <h5 class="text-center">Part 4</h5>
    <h5 class="text-center">PERSONAL DATA</h5>

    <div class="row">
        <h6> PARENT'S INFORMATION </h6>
        <b>
            <hr>
        </b>
        @include("parts.register.form.name")
        <br>

        <br>

        @include("parts.register.form.address")
        <br>

        <div class="row">
            <div class="col-md-6">
                <h5>
                    Can we mail you more information?
                    <span class="pull-right">
                        <label class="radio-inline" for="yesMAIL">
                            <input type="radio" name="mail" id="yesMAIL" value="yes">Yes
                        </label>
                        <label class="radio-inline" for="noMAIL">
                            <input type="radio" name="mail" id="noMAIL" value="no">No
                        </label>
                    </span>
                </h5>
            </div>
            <div class="col-md-6"></div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-3">
                <label for="usr">Cell Phone</label>
                <input type="text" class="form-control" id="cell" required>
            </div>
            <div class="visible-xs">
                <br>
            </div>
            <div class="col-md-5">
                <label for="pwd">Carrier</label>
                <select class="form-control" id="carrier">
                    <option>Select One</option>
                    <option>AT&T</option>
                    <option>Boost Mobile</option>
                    <option>Consumer Cellular</option>
                    <option>MetroPCS</option>
                    <option>Project Fi</option>
                    <option>Sprint</option>
                    <option>T-Mobile</option>
                    <option>US Cellular</option>
                    <option>Verizon Wireless</option>
                    <option>Virgin Mobile</option>
                </select>
            </div>
            <div class="col-md-4"></div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-6">
                <h5>
                    Can we text you more information?
                    <span class="pull-right">
                                        <label class="radio-inline" for="yesMAIL">
                                            <input type="radio" name="mail" id="yestext" value="yes">Yes
                                        </label>
                                        <label class="radio-inline" for="noMAIL">
                                            <input type="radio" name="mail" id="notext" value="no">No
                                        </label>
                                    </span>
                </h5>
            </div>
            <div class="col-md-6">
                <h5>
                    Can we leave you a voicemail?
                    <span class="pull-right">
                                        <label class="radio-inline" for="yesMAIL">
                                            <input type="radio" name="mail" id="yesvoice" value="yes">Yes
                                        </label>
                                        <label class="radio-inline" for="noMAIL">
                                            <input type="radio" name="mail" id="novoice" value="no">No
                                        </label>
                                    </span>
                </h5>
            </div>
            <div class="col-md-6">
                <h5>
                    Is this your preferred method of contact?
                    <span class="pull-right">
                                        <label class="radio-inline" for="yesMAIL">
                                            <input type="radio" name="mail" id="yescontact" value="yes">Yes
                                        </label>
                                        <label class="radio-inline" for="noMAIL">
                                            <input type="radio" name="mail" id="nocontact" value="no">No
                                        </label>
                                    </span>
                </h5>
            </div>
            <div class="col-md-6"></div>
        </div>
        <br>

        <div class="row">
            @include("parts.register.form.email")
            <div class="col-md-6">
                <h5>
                    Can we email you more information?
                    <span class="pull-right">
                                        <label class="radio-inline" for="yesMAIL">
                                            <input type="radio" name="mail" id="mail1" value="yes">Yes
                                        </label>
                                        <label class="radio-inline" for="noMAIL">
                                            <input type="radio" name="mail" id="mail2" value="no">No
                                        </label>
                                    </span>
                </h5>
            </div>
            <div class="col-md-6">
                <h5>
                    Is this your preferred method of contact?
                    <span class="pull-right">
                                        <label class="radio-inline" for="yesMAIL">
                                            <input type="radio" name="mail" id="prefer1" value="yes">Yes
                                        </label>
                                        <label class="radio-inline" for="noMAIL">
                                            <input type="radio" name="mail" id="prefer2" value="no">No
                                        </label>
                                    </span>
                </h5>
            </div>
        </div>
        <br>
        <h6> CHILD'S INFORMATION </h6>
        <b>
            <hr>
        </b>
        <div class="row">
            <div class="col-md-6">
                <label for="usr">First Name:</label>
                <input type="text" class="form-control" id="firstname" required>
            </div>
            <div class="visible-xs">
                <br>
            </div>
            <div class="col-md-6">
                <label for="usr">Last Name:</label>
                <input type="text" class="form-control" id="lastname" required>
            </div>
            <div class="col-md-6"></div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4">
                <label for="usr">Date of Birth</label>
                <input type="date" class="form-control" id="dob" required>
            </div>
            <div class="visible-xs">
                <br>
            </div>
            <div class="col-md-4">
                <label for="pwd">Gender</label>
                <select class="form-control" id="gender" required>
                    <option selected disabled></option>
                    <option value="gender1">Male</option>
                    <option value="gender2">Female</option>
                    <option value="gender3">Other</option>
                </select>
            </div>
            <div class="visible-xs">
                <br>
            </div>
            <div class="col-md-4">
                <label for="usr">Ethnicity</label>
                <select class="form-control" id="Ethnicity" required>
                    <option selected disabled></option>
                    <option value="ethnic1"></option>
                    <option value="ethnic2"></option>
                    <option value="ethnic3"></option>
                </select>
            </div>

        </div>
        <br><br>
        <div>
            <button class="btn btn-primary target pull-left" type="submit">BACK</button>
            <button class="btn btn-primary target pull-right" type="submit">NEXT</button>
        </div>
    </div>

</div>
<div class="col-sm-1">&nbsp;</div>