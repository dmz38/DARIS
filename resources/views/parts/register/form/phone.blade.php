<div class="row">
    <div class="col-md-3">
        <label>Phone #</label>
        <input type="text" class="form-control" id="cell" name="phoneNumber" required>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-4">
        <label>Type</label>
        <select class="form-control" name="phoneType" id="phoneType">
            <option>Select One</option>
            <option value="cell">Cell Phone</option>
            <option value="land">Land Line</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-4">
        <label>Provider</label>
        <select class="form-control" name="carrier" id="carrier">
            <option>Select One</option>
            <option value="att">AT&T</option>
            <option value="boost">Boost Mobile</option>
            <option value="consumer">Consumer Cellular</option>
            <option value="metropcs">MetroPCS</option>
            <option value="fi">Project Fi</option>
            <option value="sprint">Sprint</option>
            <option value="tmo">T-Mobile</option>
            <option value="usc">US Cellular</option>
            <option value="vzw">Verizon Wireless</option>
            <option value="virgin">Virgin Mobile</option>
        </select>
    </div>
    <div class="col-md-1"></div>
</div>
<br>

<div class="row">
    <div class="col-md-6">
        <h5>
            Can we text you more information?
            <span class="pull-right">
                <label class="radio-inline">
                    <input type="radio" name="textPermission" id="yestext" value="1">Yes
                </label>
				<label class="radio-inline">
				    <input type="radio" name="textPermission" id="notext" value="0">No
                </label>
            </span>
        </h5>
    </div>
    <div class="col-md-6">
        <h5>
            Can we leave you a voicemail?
            <span class="pull-right">
			    <label class="radio-inline">
				    <input type="radio" name="voicemailPermission" value="1">Yes
                </label>
				<label class="radio-inline">
				    <input type="radio" name="voicemailPermission" value="0">No
                </label>
            </span>
        </h5>
    </div>
    <div class="col-md-6">
        <h5>
            Is this your preferred method of contact?
            <span class="pull-right">
                <label class="radio-inline">
                    <input type="radio" name="phonePref" value="1">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="phonePref" value="0">No
                </label>
            </span>
        </h5>
    </div>
    <div class="col-md-6"></div>
</div>