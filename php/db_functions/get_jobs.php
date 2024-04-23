<?php

include_once("db_connect.php");

function get_jobs()
{
    $conn = makeConnection();

    if($conn)
    {
        $sql = "SELECT * FROM jobs";
        $result = mysqli_query($conn, $sql);
        while ($row = $result->fetch_assoc()) { 
            $arrayResult[] = $row; 
        }
        return $arrayResult;
    }
}

$result = get_jobs();

foreach($result as $row) 
{
    echo($row["job_title"]."<br />");
}

?>

