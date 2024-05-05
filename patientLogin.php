<!-- <?php
// include("php/includes/navbar.php");
// ?>
// <?php
//     // begin database connection
//     $conn = 'php/config.php';
//     $conn = new mysqli($servername, $username, $password, $dbname);

//     $message = '';

//     //check if form is submitted
//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         $username = $_POST['$username'];
//         $password = $_POST['$password'];
    
//         // fetch encryption $ password from user table
//         $stmt = $conn->prepare("INSERT INTO hashed_password, salt FROM users WHERE username = :username");
//         $stmt->bind_param(':username', $username);
//         $stmt->execute();
//         $result = $stmt->fetch(mysqli::FETCH_ASSOC);

//         if ($result) {
//             $hashed_password = hash('sha26', $password . $result['salt']);

//             //verify hashed password
//             if ($hashed_password === $result['hashed_result']) {
//                 $_SESSION['loggedin'] = true;
//                 $_SESSION['username'] = $username;
//                 $message = "Login was successful!";
//                 header('Location: index.php'); //redirect user to home page
//                 exit;
//             } else {
//                 $message = "Invalid username or password used!";
//             }
//         } else {
//             $message = "Invalid username or password used!";
//         }
//     }
// ?> -->

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
                <h2></h2><br>
            </div>

            <div class="pLoginTitle">
                <h2>Patient Log-in</h2>
            </div>
            
            
            <?php if ($message): ?>
                <p><?php echo $message; ?></p>
            <?php endif; ?>-
            
            <form action="" method="post" class="patientLogin">
                    <div class="patientLoginForm">
                        <label for="username">Username:</label> <br>
                        <input type="text" id="username"name="username" required><br>
                    </div>
            
                    <div class="patientLoginForm">
                        <label for="password">password:</label> <br>
                        <input type="password" id="password"name="password" required><br><br>
                    </div>
            
                    <div class="patientSignupFormButton">
                        <input type="submit" value="Sign-up" name="submit"><br><br>
                    </div>
            
                    <a href="patientSignup.php" class="patientSignup">Sign-up</a>
            </form>





            
            
    
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


