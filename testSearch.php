
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View staff</title>
        <link rel="stylesheet" href="css/global.css" type="text/css" />

        <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 620px)" />

        <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 621px)" />

        
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

            <div class="container pb-5">
                <h2>Search for Patient</h2><br>
            </div>

            <div>
                <div class="patientSearchForm">
                <form method="get" action="testSearch.php">
                    <div>
                        <label for="q">Search:</label>
                        <input type="text" name="q"/>
                    </div>
                    <div>
                        <input type="submit" value="Search for a patient"/>
                    </div>
                </form>
            </div>

            <?php
            echo $_GET["q"];
            ?>

            <?php
            if ($validSearch) {
                echo "<p>Search found: {$result->num_rows} result(s)";
                while ($obj = $result->fetch_object()) {
                    echo "<h3>($obj->firstName)</h3>";
                    
                }
            } else {
                echo "<p>Seach for a patient.</p>";
            }
            ?>
            </div>
            
            
            <!-- check for search submission -->
            
            <div class="testSearchForm">
                <?php
            // ini_set("display_errors",1);
            include ("config.php");
            
                $sql = "SELECT * FROM patient";
                $result = mysqli_query($conn, $sql);
            
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){ //mysqli_fetch_assoc // fetches next available row within our object 
                       
                        echo "Patient ID: " . $row["ID"] . "<br>";
                        echo "Patient First name: " . $row["firstName"] . "<br>";
                        echo "Patient Last name: " . $row["lastName"] . "<br>";
                        echo "Patient Email: " . $row["email"] . "<br>";
                        echo "Patient date of birth: " . $row["dateOfBirth"] . "<br>";
                        echo "Patient phone number: " . $row["phoneNumber"] . "<br>" . "<br>" . "<br>";
            
                    }; 
                }
                else{
                    echo "No user found";
                }    
                mysqli_close ($conn);
            ?>
            </div> <br><br><br>
            




            
            
    
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
        window.onscroll = function() {scrollFunction()};
        
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