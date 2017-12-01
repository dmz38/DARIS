<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10">
    <h5 class="text-center">Step 4</h5>
    <h5 class="text-center">Please enter information about yourself<span class="guardianText"> and your children.</span><span class="selfText">.</span></h5>

    <div class="row">
        <h3><b><span class="guardianText">Guardian (</span>Yourself<span class="guardianText">)</span></b></h3>
        <hr>
        <form id="mainInfo">
        <div id="primaryInfo">
            @include("parts.register.form.name")
            <br>
            <br>

            @include("parts.register.form.address")
            <br>

            @include("parts.register.form.phone")
            <br>

            @include("parts.register.form.email")
            <br>

            @include("parts.register.form.demographic")
            <br>
        </div>
        </form>
        <div id="childData">
            @include("parts.register.form.childTemplate");
        </div>
    </div>
    <br><br>
    <div>
        <button id="part4Prev" class="btn btn-primary target pull-left prev" type="button">BACK</button>
        <button id="part4Next" class="btn btn-primary target pull-right" type="button">NEXT</button>
    </div>
</div>
<div class="col-sm-1">&nbsp;</div>