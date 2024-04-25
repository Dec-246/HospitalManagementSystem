<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in touch!</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

</head>

<body>
    <div class="">
        <div class="navbarContainer">
            <?php
            include("php/includes/navbar.php");
            ?>
        </div>

        <div class="header">
            <?php
            include("php/includes/header.php");
            ?>
        </div>

        <main role="main" class="pb-5">

            <h1>Get in touch with us!</h1>

            <div class="contactUs">
                <p>Down below we have left a list of contacts for you to get in touch with us if you have
                    any questions or concerns. Please contact emergency services if you have any immediate problems.

                    Please do not hesitate to call us. we have several numbers for different services.
                </p>

                <p>Please be aware that these contacts are contact numbers for citizens within the UK only.
                    If you are outside of the UK and attempting to contact these numbers, you may have to pay a standard fee.
                </p>
            </div>

            <div class="EMERGENCY">
                <h2>If you are in an urgent emergency, please CALL <a href="tel: --999"> 999</a> IMMEDIATELY! </h2>

                <p> If you are in a dangerous situation where life is at risk, please DO NOT HESITATE to call our emergency
            </div>

            <div class="contactNumbers">

                <div class="emergencyNumber">
                    <ul>
                        <li>Emergency services: <a href="tel: --999"> 999</a></li><br>

                        <li>Non emergency services: <a href="tel: --111"> 111</a></li></ul>
                </div>

                <ul><li>Main help desk: <a href="tel: --+44 293 400 284"> +44 293 400 284</a></li></ul>

                <div class="helpineSyles">
                    <ul><li>Samaritans: <a href="tel: --+44 288 234 562"> +44 288 234 562</a></li><br>

                    <li>Childline: <a href="tel: --+44 288 439 528"> +44 290 022 562</a></li></ul>
                </div>

                <ul>
                <li>Interpreter services: <a href="tel: --+44 234 927 286"> +44 234 927 286</a></li><br>

                <li>On call medical team: <a href="tel: --+44 273 253 248"> +44 273 253 248</a></li><br>

                <li>Health education team: <a href="tel: --+44 193 102 104"> +44 193 102 104</a></li><br>

                <li>Pharmacy team: <a href="tel: --+44 284 223 239 "> +44 284 223 239</a></li>
                </ul>
            </div>

        </main>
    </div>
    <div class="footer">
        <?php
        include("php/includes/footer.php");
        ?>
    </div>
</body>

</html>