<?php

session_start();

if(isset($_SESSION['userid']))
{
    $userid = $_SESSION['userid'];
    $sql = "SELECT * FROM user WHERE id = $userid LIMIT 1";
    $result = $con->query($sql);
    if($result && $result->fetch_assoc()->num_rows > 0)
    {
        header('location: index.php');
    } else{
        header('location: login.php');
    }
} else
{
    header('location: login.php');
}