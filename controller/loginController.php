<?php
    require("../database/connexion.php");
    session_start();
    $_SESSION["username"]==null;
    if(isset($_POST["Username"]) && isset($_POST["Password"])){
    $login =$_POST["Username"];
    $password =$_POST["Password"];
    $sql="select idUser, username from users where username='$login' and password='$password';";
    echo $sql;
    $res=$bdd->query($sql);
    while($row=$res->fetch()){
        $_SESSION["idUser"]=$row[0];
        $_SESSION["username"]=$row[1];
       // print_r($_SESSION);die();
       
    }
    header("Location:../index.php");
    
    }
    else{
        session_destroy();
        header("Location:../vues/login.php");
    }
?>