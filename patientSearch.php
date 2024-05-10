<!-- check for search submission -->
<?php
include("config.php");

//getting first and last name from form
if (isset($_GET['firstName'])) {
    $firstName = $_GET['firstName'];
} else {
    $firstName = null;
}

if (isset($_GET['lastName'])) {
    $lastName = $_GET['lastName'];
} else {
    $lastName = null;
}

if (isset($lastName) && isset($firstName)) {
    $validSearch = 1;
};
// query by patients first name last name
$stmt = $conn->prepare("SELECT * FROM patient WHERE firstName = ? AND lastName = ?");

$stmt->bind_param("ss", $firstName, $lastName);
$stmt->execute();
$result = $stmt->get_result();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search patients</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 620px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 621px)" />


</head>

<body>

    <div class="">

        <div class="navbarContainer">
            <?php
            include("php/includes/staff/navbar.php");
            ?>
        </div>

        <div class="header">
            <?php
            include("php/includes/header.php");
            ?>
        </div>

        <div class="patientSearchTitle">
            <h2>Search for Patient</h2><br>
        </div>

        <div>
            <div class="patientSearchForm">
                <form method="get" action="patientSearch.php">
                    <div>
                        <label for="firstName">First Name:</label>
                        <input type="text" name="firstName" />
                    </div>
                    <div>
                        <label for="lastName">Second Name:</label>
                        <input type="text" name="lastName" />
                    </div>
                    <div>
                        <input type="submit" value="Search for a patient" />
                    </div>
                </form>
            </div><br><Br><Br>

            <div class="patientFormResults">

                <?php
                if ($validSearch) {
                    echo "<p>Search found: {$result->num_rows} result(s)";
                    while ($obj = $result->fetch_object()) {

                        //enter columns from table
                        echo "<h3>Patient ID: ($obj->ID)</h3>";
                        echo "<h3>Name: ($obj->firstName)</h3>";
                        echo "<h3>Second name: ($obj->lastName)</h3>";
                        echo "<h3>Phone number: ($obj->phoneNumber)</h3>";
                        echo "<h3>Email: ($obj->email)</h3>";
                        echo "<h3>Registered doctor: ($obj->registeredDoctor)</h3>";
                        echo "<h3>Post code: ($obj->postCode)</h3>";
                        echo "<h3>Address: ($obj->address_)</h3>";
                    }
                } else {
                    echo "<p>Search for a patient.</p>";
                }
                ?>
            </div><br><br>
        </div>


        <div class="footer">
            <?php
            include("php/includes/footer.php");
            ?>
        </div>

        <!-- scroll to top button -->
        <script>
            // Get button
            let mybutton = document.getElementById("myBtn");

            // When the user scrolls down by 20px from the top of the page, show 'scroll back to top' button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When user clicks on 'scroll back to top' button, scroll to top of the webpage
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

</body>

</html>