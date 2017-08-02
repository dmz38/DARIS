<html>
    @include("parts.head")
    <body>
        @include("parts.nav")
        <div class="container">
            <div>
                <h2>Register</h2>
                <div id="part1">
                    @include("parts.register.part1")
                </div>
                <div id="part2">
                    @include("parts.register.part2")
                </div>
                <div id="part3-self">
                    @include("parts.register.part3-self")
                </div>
                <div id="part3-guardian">
                    @include("parts.register.part3-guardian")
                </div>
                <div id="part3-other">
                    @include("parts.register.part3-other")
                </div>
                <div id="part4-self">
                    @include("parts.register.part4-self")
                </div>
                <div id="part4-guardian">
                    @include("parts.register.part4-guardian")
                </div>
                <div id="submit">
                    @include("parts.register.submit")
                </div>
            </div>
        </div>
    </body>
</html>