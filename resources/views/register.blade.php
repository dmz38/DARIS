<html>
    @include("parts.head")
    <body>
        @include("parts.nav")
        <div class="container">
            <div>
                <h2>Register</h2>
                <div id="part1">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="text-center">
                                        <h6>STEP 1</h6>
                                        <p> Check all that apply: </p>
                                        <br>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-sm-12 col-md-8">
                                        <form class="text-center">
                                            <p><input type="checkbox" id= "checkbox1"> I would like to suggest someone to participate in future studies</p>
                                            <p><input type="checkbox" id="checkbox2"> I would like to learn more about the AJ Drexel Autism Institute</p>
                                        </form>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <div class="text-center">
                                    <br>
                                    <button class="btn btn-primary target" type="submit">NEXT</button>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                </div>
                <div id="part2">
                    <div class="col-xs-1 col-md-1">&nbsp;</div>
                    <div class="col-md-10 col-xs-10 text-center">
                        <div class="row">
                            <div class="col-md-5 "></div>
                            <div class="col-md-2 "><p>2/5</p></div>
                            <div class="col-md-5 "></div>
                            <br><br>
                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p> Who do you want to nominate or register? </p></div>
                            <div class="col-md-4"></div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-5 "></div>
                            <div class="col-md-2 "><label><input type="radio" name="Nomination"> Myself </label> <i class="fa fa-info-circle"></i></div>
                            <div class="col-md-5 "></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 "></div>
                            <div class="col-md-2 "><label><input type="radio" name="Nomination"> My Child </label> <i class="fa fa-info-circle"></i></div>
                            <div class="col-md-5 "></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 "></div>
                            <div class="col-md-2 "><label><input type="radio" name="Nomination"> Someone else </label> <i class="fa fa-info-circle"></i></div>
                            <div class="col-md-5 "></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 "></div>
                            <div class="col-md-2 "><button class="btn btn-primary target" type="submit">BACK</button></div>
                            <div class="col-md-2 "><button class="btn btn-primary target" type="submit">NEXT</button></div><br><br><br>
                        </div>
                    </div>
                    <div class="col-xs-1 col-md-1"></div>
                </div>

                <div id="part3-me">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class ="text-center" style="margin-top: 20px;">
                            <div>
                                <p><b>3/5</b></p>
                                <p> <b>Are you ... </b></p>
                            </div>
                            <form>

                                <div id="radiogroups" class="row">
                                    <div class="col-md-6">
                                        DIAGNOSED WITH ASD:
                                    </div>
                                    <div class="radiogroupabove col-md-1">
                                        <input type="radio" name="Diagnosed" id="yes1" /> <label for="yes1">Yes</label>
                                    </div>
                                    <div class="radiogroupabove col-md-1">
                                        <input type="radio" name="Diagnosed" id="yes2" /> <label for="yes2">No</label>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <br>
                                <div id="radiogroups2 row">
                                    <div class="col-md-6">
                                        SUSPECTED TO HAVE ASD:
                                    </div>
                                    <div class="radiogroupabove col-md-1">
                                        <input type="radio" name="Suspected" id="yes1" /> <label for="yes1">Yes</label>
                                    </div>
                                    <div class="radiogroupabove col-md-1">
                                        <input type="radio" name="Suspected" id="yes2" /> <label for="yes2">No</label>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <br>
                                <br>
                                <div id="options" class="row">
                                    <div class="col-md-6">PLEASE LIST OTHER DIAGNOSIS</div>

                                    <div class="col-md-3">
                                        <select class="form-control">
                                            <option>   </option>
                                            <option>Disease 1</option>
                                            <option>Disease 2</option>
                                            <option>Disease 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                        </form>

                        <div>
                            <div class="col-md-4"></div>
                            <div class="col-md-2"><button class="btn btn-primary target" type="submit">BACK</button></div>
                            <div class="col-md-2"><button class="btn btn-primary target" type="submit">NEXT</button></div><br><br><br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>