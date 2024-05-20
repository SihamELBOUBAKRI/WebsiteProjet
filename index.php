<?php
session_start();

$Email = @$_POST["Email"];
$role=@$_POST["role"];

if ($Email) {
    if ($role == "Employee") {
        header("Location: /WEBSITEPROJET/employee.php");
    }
    else {
        header("Location: /WEBSITEPROJET/client.php");
    }
}
else {
    header("Location: /WEBSITEPROJET/login.php");
}