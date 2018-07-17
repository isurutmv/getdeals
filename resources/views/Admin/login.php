<?php

$username = $_POST['username'];
$password = $_POST['password'];

echo $username;

if($username == "admin" && $password=="admin")
{
    header("Location: dashboard.php");
}

else
{

}