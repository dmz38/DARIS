<div>
    <div class="row">
        <div class="col-md-6">
            <label class="form-group">Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Address line 1"><br>
            <input type="text" class="form-control" name="address2" placeholder="Address line 2"><br>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" name="city" placeholder="City">
        </div>
        <div class="visible-xs visible-sm">
            <br>
        </div>
        <div class="col-md-2">
            <select class="form-control" name="state" required>
                <option value="" selected disabled>State</option>
                <option value="AL">AL</option>
                <option value="AK">AK</option>
                <option value="AZ">AZ</option>
                <option value="AR">AR</option>
                <option value="CA">CA</option>
                <option value="CO">CO</option>
                <option value="CT">CT</option>
                <option value="DE">DE</option>
                <option value="FL">FL</option>
                <option value="GA">GA</option>
                <option value="HI">HI</option>
                <option value="ID">ID</option>
                <option value="IL">IL</option>
                <option value="IN">IN</option>
                <option value="IA">IA</option>
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="ME">ME</option>
                <option value="MD">MD</option>
                <option value="MA">MA</option>
                <option value="MI">MI</option>
                <option value="MN">MN</option>
                <option value="MS">MS</option>
                <option value="MO">MO</option>
                <option value="MT">MT</option>
                <option value="NE">NE</option>
                <option value="NV">NV</option>
                <option value="NH">NH</option>
                <option value="NJ">NJ</option>
                <option value="NM">NM</option>
                <option value="NY">NY</option>
                <option value="NC">NC</option>
                <option value="ND">ND</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="OR">OR</option>
                <option value="PA">PA</option>
                <option value="RI">RI</option>
                <option value="SC">SC</option>
                <option value="SD">SD</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="VT">VT</option>
                <option value="VA">VA</option>
                <option value="WA">WA</option>
                <option value="WV">WV</option>
                <option value="WI">WI</option>
                <option value="WY">WY</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="visible-xs visible-sm">
            <br>
        </div>
        <div class="col-md-4">
            <input type="text" pattern="[0-9]{5}" name="zip" class="form-control" placeholder="Zipcode">
        </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-md-6">
        Can we mail you more information?
        <span class="pull-right">
            <label class="radio-inline">
                <input type="radio" name="mailPermission" value="1">Yes
            </label>
            <label class="radio-inline">
                <input type="radio" name="mailPermission" value="0">No
            </label>
        </span>
    </div>
    <div class="col-md-6">
        Is this your preferred method of contact?
        <span class="pull-right">
            <label class="radio-inline">
                <input type="radio" name="mailPref" value="1">Yes
            </label>
            <label class="radio-inline">
                <input type="radio" name="mailPref" value="0">No
            </label>
        </span>
    </div>
    <div class="col-md-6"></div>
</div>