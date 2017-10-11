<div class="row">
    <div class="col-md-3">
        <label for="cell">Phone #</label>
        <input type="text" class="form-control" id="cell" required>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-4">
        <label for="phoneType">Type</label>
        <select class="form-control" id="phoneType">
            <option>Select One</option>
            <option>Cell Phone</option>
            <option>Land Line</option>
            <option>Other</option>
        </select>
    </div>
    <div class="visible-xs">
        <br>
    </div>
    <div class="col-md-4">
        <label for="carrier">Provider</label>
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
    <div class="col-md-1"></div>
</div>
<br>

<div class="row">
    <div class="col-md-6">
        <h5>
            Can we text you more information?
            <span class="pull-right">
                <label class="radio-inline" for="yestext">
                    <input type="radio" name="moreText" id="yestext" value="yes">Yes
                </label>
				<label class="radio-inline" for="notext">
				    <input type="radio" name="moreText" id="notext" value="no">No
                </label>
            </span>
        </h5>
    </div>
    <div class="col-md-6">
        <h5>
            Can we leave you a voicemail?
            <span class="pull-right">
			    <label class="radio-inline" for="yesvoice">
				    <input type="radio" name="voicemail" id="yesvoice" value="yes">Yes
                </label>
				<label class="radio-inline" for="novoice">
				    <input type="radio" name="voicemail" id="novoice" value="no">No
                </label>
            </span>
        </h5>
    </div>
    <div class="col-md-6">
        <h5>
            Is this your preferred method of contact?
            <span class="pull-right">
                <label class="radio-inline" for="yescontact">
                    <input type="radio" name="preferPhone" id="yescontact" value="yes">Yes
                </label>
                <label class="radio-inline" for="nocontact">
                    <input type="radio" name="preferPhone" id="nocontact" value="no">No
                </label>
            </span>
        </h5>
    </div>
    <div class="col-md-6"></div>
</div>