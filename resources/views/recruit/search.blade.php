<html>
@include("parts.head")
<body>
@include("parts.navLoggedIn")
<div class="container-fluid">
    <div class="col-xs-12 col-lg-push-1 col-lg-10">
    <div>
        <h4><a href="/recruit"><i class="fa fa-angle-left"></i> BACK</a></h4>
        <h1>Recruit</h1>
        <p> Search for potential participants to send flyer about studies. </p>
    </div>
    <div>
        <div style="margin-top: 50px;">
            <div class="col-xs-4 col-md-3">
                <form class="form-horizontal">
                    <div>
                        <h5 class="first">Age (Years)</h5>
                        <div class="col-md-5 col-xs-12">
                            <div class="form-group">
                                <input type="number" name="yearStart" maxlength="2" class="form-control"
                                       placeholder="Min">
                            </div>
                        </div>
                        <div class="col-md-2">
                            to
                        </div>
                        <div class="col-md-5 col-xs-12">
                            <div class="form-group">
                                <input type="number" name="yearEnd" maxlength="2" class="form-control"
                                       placeholder="Max">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h5>Age (Months)</h5>
                        <div class="col-md-5 col-xs-12">
                            <div class="form-group">
                                <input type="number" name="monthStart" maxlength="2" class="form-control"
                                       placeholder="Min">
                            </div>
                        </div>
                        <div class="col-md-2">
                            to
                        </div>
                        <div class="col-md-5 col-xs-12">
                            <div class="form-group">
                                <input type="number" name="monthEnd" maxlength="2" class="form-control"
                                       placeholder="Max">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="col-md-5 col-xs-12">
                            <div class="form-group">
                                <label for="zipcode"><h5>Zip Code</h5></label>
                                <input type="text" id="zipcode" maxlength="5" class="form-control" value="19104">
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5 col-xs-12">
                            <div class="form-group">
                                <label for="radius"><h5>Radius (Mi)</h5></label>
                                <input type="number" id="radius" maxlength="3" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h5>Gender</h5>
                        <select class="form-control">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div>
                        <h5 style="margin-top: 30px">Ethnicity</h5>
                        <div class="everything-checkbox">
                            <div class="checkbox">
                                <label for="blackEth" class="pull-left">Black or African American</label>
                                <p class="pull-right"><input type="checkbox" id="blackEth" name="black"/></p>
                            </div>
                            <div class="checkbox">
                                <label for="hispanicEth" class="pull-left"><span>Hispanic</span></label>
                                <p class="pull-right"><input type="checkbox" id="hispanicEth" name="hispanic"/></p>
                            </div>
                            <div class="checkbox">
                                <label for="asianEth" class="pull-left"><span>Asian</span></label>
                                <p class="pull-right"><input type="checkbox" id="asianEth" name="asian"/></p>
                            </div>
                            <div class="checkbox">
                                <label for="pacificEth"
                                       class="pull-left"><span>Native Hawaiian or Pacific Islander</span></label>
                                <p class="pull-right"><input type="checkbox" id="pacificEth" name="pacific"/></p>
                            </div>
                            <div class="checkbox">
                                <label for="whiteEth" class="pull-left"><span>White</span></label>
                                <p class="pull-right"><input type="checkbox" id="whiteEth" name="white"/></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div style="margin-left: 10px; font-size: 14px;">
                    <tr>
                        <td>Asian</td>
                        <td><input type="checkbox" name="asian"></td>
                    </tr>
                    </div> -->
                    <div>
                        <h5>
                            Diagnosed with ASD
                            <span class="pull-right">
										<label class="radio-inline" for="yesASD">
											<input type="radio" name="asd" id="yesASD" value="1">Yes
										</label>
										<label class="radio-inline" for="noASD">
											<input type="radio" name="asd" id="noASD" value="0">No
										</label>
									</span>
                        </h5>
                    </div>

                    <div>
                        <h5 style="margin-top: 30px;">Suspected ASD
                            <span class="pull-right">
										<input type="checkbox" id="susASD" name="suspected">
									</span>
                        </h5>
                    </div>

                    <div>
                        <h5>Contact Methods</h5>
                        <div class=" everything-checkbox">
                            <div class="checkbox">
                                <label for="phoneCon" class="pull-left">Phone</label>
                                <p class="pull-right"><input type="checkbox" id="phoneCon" name="phone"/></p>
                            </div>
                            <div class="checkbox">
                                <label for="mailCon" class="pull-left"><span>Mail</span></label>
                                <p class="pull-right"><input type="checkbox" id="mailCon" name="mail"/></p>
                            </div>
                            <div class="checkbox">
                                <label for="textCon" class="pull-left"><span>Text Message</span></label>
                                <p class="pull-right"><input type="checkbox" id="textCon" name="text"/></p>
                            </div>
                            <div class="checkbox">
                                <label for="emailCon" class="pull-left"><span>Email</span></label>
                                <p class="pull-right"><input type="checkbox" id="emailCon" name="email"/></p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="fit btn btn-lg" style="margin-top: 50px;">Search</button>
                </form>
            </div>
            <div id="result" class="col-xs-8 col-md-9 text-center" style="font-size: 14px;">
                <div>
                    <table class="table table-hover ">
                        <tr>
                            <td class="bg-primary">ID</td>
                            <td class="bg-primary">First Name</td>
                            <td class="bg-primary">Last Name</td>
                            <td class="bg-primary">Age</td>
                            <td class="bg-primary">Diagnosed with ASD</td>
                            <td class="bg-primary">Suspected</td>
                            <td class="bg-primary">Race</td>
                            <td class="bg-primary"></td>
                            <td class="default"></td>
                        </tr>
                        <tr class="default">
                            <td>00001</td>
                            <td>Jane</td>
                            <td>Doe</td>
                            <td>12 Months</td>
                            <td>N</td>
                            <td>Y</td>
                            <td>Hispanic or Latino</td>
                            <td><a href="/info">Show all information ></a></td>
                            <td><input type="checkbox" name=""></td>
                        </tr>
                        <tr class="default">
                            <td>00002</td>
                            <td>Mary</td>
                            <td>Doe</td>
                            <td>12 Months</td>
                            <td>N</td>
                            <td>Y</td>
                            <td>White</td>
                            <td><a href="/info">Show all information ></a></td>
                            <td><input type="checkbox" name=""></td>
                        </tr>
                        <tr class="default">
                            <td>00003</td>
                            <td>Lizzy</td>
                            <td>Doe</td>
                            <td>12 Months</td>
                            <td>N</td>
                            <td>Y</td>
                            <td>Hispanic or Latino</td>
                            <td><a href="/info">Show all information ></a></td>
                            <td><input type="checkbox" name=""></td>
                        </tr>
                        <tr class="default">
                            <td>00004</td>
                            <td>Anna</td>
                            <td>Doe</td>
                            <td>12 Months</td>
                            <td>N</td>
                            <td>Y</td>
                            <td>Hispanic or Latino</td>
                            <td><a href="/info">Show all information ></a></td>
                            <td><input type="checkbox" name=""></td>
                        </tr>
                        <tr class="default">
                            <td>00005</td>
                            <td>Catherine</td>
                            <td>Doe</td>
                            <td>12 Months</td>
                            <td>N</td>
                            <td>Y</td>
                            <td>Hispanic or Latino</td>
                            <td><a href="/info">Show all information ></a></td>
                            <td><input type="checkbox" name=""></td>
                        </tr>
                        <tr class="default">
                            <td>00005</td>
                            <td>Anna</td>
                            <td>Doe</td>
                            <td>12 Months</td>
                            <td>N</td>
                            <td>Y</td>
                            <td>Hispanic or Latino</td>
                            <td><a href="/info">Show all information ></a></td>
                            <td><input type="checkbox" name=""></td>
                        </tr>
                        <tr class="default">
                            <td>00006</td>
                            <td>Ellen</td>
                            <td>Doe</td>
                            <td>12 Months</td>
                            <td>N</td>
                            <td>Y</td>
                            <td>Hispanic or Latino</td>
                            <td><a href="/info">Show all information ></a></td>
                            <td><input type="checkbox" name=""></td>
                        </tr>
                        <tr class="default">
                            <td>00007</td>
                            <td>Jenny</td>
                            <td>Doe</td>
                            <td>12 Months</td>
                            <td>N</td>
                            <td>Y</td>
                            <td>Hispanic or Latino</td>
                            <td><a href="/info">Show all information ></a></td>
                            <td><input type="checkbox" name=""></td>
                        </tr>
                        <tr class="default">
                            <td>00008</td>
                            <td>Jennifer</td>
                            <td>Doe</td>
                            <td>12 Months</td>
                            <td>N</td>
                            <td>Y</td>
                            <td>Hispanic or Latino</td>
                            <td><a href="/info">Show all information ></a></td>
                            <td><input type="checkbox" name=""></td>
                        </tr>
                    </table>
                    <div>
                        <button type="submit" onclick="window.location='/recruit/message'" class="btn fit btn-lg pull-right" style="margin-top: 100px;">Next</button>
                    </div>
                </div>
                <br>
            </div>
        </div>

    </div>
    <br><br>
</div>
</div>
</body>
</html>