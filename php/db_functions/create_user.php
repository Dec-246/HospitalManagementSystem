<?php

include_once("db_connect.php");
include_once("hash_password.php");

function create_user($username, $password)
{
    $created = false;
    $conn = makeConnection();
    $password = hash_password($password);
    $stmt = $conn->prepare("INSERT INTO users (username, password_hash) VALUES (?, ?)");
    $stmt->bind_param('ss',$username, $password);

    $stmt->execute();
    
    //the logic
    if ($stmt) {
        $created = true;
    }
    $stmt->close();
    $conn->close();

    return $created;
    
}

//create_user("Hhello", "hello");


if(isset($_POST['submit']))
{
    if(isset($_POST['username']) and isset($_POST['password']))
    {
        //do more validation here
        $res = create_user($_POST['username'], $_POST['password']);
        if($res)
        {
            echo "User created successfully";
        }
    }
}

?>

<form method="post">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    
    <button type="submit" name="submit">Submit</button>
</form>