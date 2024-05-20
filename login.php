<?php
    session_start();

    $Email = @$_POST["Email"];
    $password = @$_POST["password"];
    $role=@$_POST["role"];

    if ($Email && $password ) {
        $cn = new PDO("mysql:host=localhost;dbname=bartons", "root", "");
        if ($role=="Employee"){
            $query = $cn->prepare("SELECT * FROM employees WHERE Email = :Email AND password = MD5(:password)");
            $query->bindParam(":Email", $Email);
            $query->bindParam(":password", $password);
            $query->execute();
            $user = $query->fetchObject();
            header("Location: /WEBSITEPROJET/employee.php");
        }   
        elseif($role=="Client"){
            
            $query = $cn->prepare("SELECT * FROM clients WHERE Email = :Email AND password = MD5(:password)");
            $query->bindParam(":Email", $Email);
            $query->bindParam(":password", $password);
            $query->execute();
            $user = $query->fetchObject(); 
            header("Location: /WEBSITEPROJET/client.php");
        }
        else{
            header("Location: /WEBSITEPROJET/login.php");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-image: linear-gradient(to left,#683a27,black);
        display:flex;
        flex-direction:column;
        justify-content:center;
    }
    form{
        margin: auto;
    }
    img{
        margin:auto;
    }
</style>
<body>
    <img src=".\assets\image 1.png" alt="">
    <form action="" method="post">
        <input name="Email" type="text" placeholder="Email">
        <input name="password" type="password" placeholder="Password">
        <select name="role" >
            <option value="Client">Client</option>
            <option value="Employee">Employee</option>
        </select>
        <button>submit</button>
        <a href="#">creat acount</a>
    </form>
</body>
</html>