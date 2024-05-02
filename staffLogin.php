

 <?php
    // begin database connection
    $conn = 'php/config.php';
    $conn = new mysqli($servername, $username, $password, $dbname);

    $message = '';

    //check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['$username'];
        $password = $_POST['$password'];
   
        // fetch encryption $ password from user table
        $stmt = $conn->prepare("INSERT INTO hashed_password, salt FROM users WHERE username = :username");
        $stmt->bind_param(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch(mysqli::FETCH_ASSOC);

        if ($result) {
             $hashed_password = hash('sha26', $password . $result['salt']);

            //verify hashed password
             if ($hashed_password === $result['hashed_result']) {
                 $_SESSION['loggedin'] = true;
                 $_SESSION['username'] = $username;
                 $message = "Login was successful!";
                 header('Location: index.php'); //redirect user to home page
                 exit;
            } else {
                 $message = "Invalid username or password used!";
            }
        } else {
           $message = "Invalid username or password used!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Staff sign-in</title>
        <link rel="stylesheet" href="css/global.css" type="text/css"/>

        <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

        <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

    </head>

    <body>

        <h2>Staff Log-in</h2>

       <?php if ($message): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>-

        <div class="navbarContainer">
            <?php
            include("php/includes/admin/navbar.php");
            ?>
        </div>

        <div class="header">
            <?php
            include("php/includes/header.php");
            ?>
        </div>

        <main>

            <form action="" method="post">
                    <div class="patientLoginForm">
                        <label for="username">Username: </label> <br>
                        <input type="text" id="username"name="username" required><br>
                    </div>
    
                    <div class="patientLoginForm">
                        <label for="password">password: </label> <br>
                        <input type="password" id="password"name="password" required><br><br>
                    </div>
    
                    <div class="patientSignupFormButton">
                        <input type="submit" value="Sign-up" name="submit"><br><br>
                    </div>
    
                    <a href="php/signup/patientSignup.php"class="patientSignup">Sign-up</a>
            </form>
        </main>
        
        <?php
        include("php/includes/footer.php");
        ?>
    </body>
</html>