<?php
    session_start();
    if($_SESSION["username"]=null){
        session_destroy();
        echo"<font color='red'><b>Parametres incorrets</b></font>";
        header("Location:login.php");   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CVONLINE</title>

    <link href="../assets/css/style.css" rel="stylesheet"> 
</head>
<body><center>
    <form method="post" action="../controller/loginController.php" >
        <div class="card">
            <div class="header-login"> 
                <img src="../assets/img/login.png" class="login-icon" />               
                <div class="title-login">                                  
                    <h1 class="head-title-login">Veillez vous connecter !</h1>                  
                </div>
                <!--<img src="../assets/img/menu_pointiller.png" class="menu_pointiller-icon-experience" />-->
            </div>  
            <div class="form-group">
                <label>Nom d'utilisateur </label>
                <input type="text" class="form-control form-control-user" name="Username"
                        id="Username" aria-describedby="emailHelp"
                        placeholder="Enter Username...">
                </div>
            <div class="form-group">
                <label>Mot de passe</label>
                    <input type="password" class="form-control form-control-user" name="Password"
                        id="Password" placeholder="Password">
            </div>        
            <center><button class="btn-submit" id="submit" name="submit" type="submit">Login</button></center> 
            </div>
        </div>
    </form>        
</body></center>
</html>