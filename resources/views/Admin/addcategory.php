<?php
require_once ("../resources/config.php");

$name = $_POST['name'];
$dis = $_POST['dis'];



$sql = "INSERT INTO category (title,description)
        VALUES ('".$name."','".$dis."')";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
