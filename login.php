<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="style7.css">

<title style="display: block;"> NADER </title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="reboot13.css"/>
<link rel="icon" href="WhatsApp_Image_2023-11-23_at_22.01.21-removebg-preview.png" type="image/icon type">

</head>
<body>
<div class="banner">
                <video autoplay loop muted plays-inline>
                    <source src="pexels-tima-miroshnichenko-6766332 (2160p).mp4" type="video/mp4">
                </video>
                <?php 
include('fonctions.php');
?>
<div class="container">
<div class="photo">
    <img src="WhatsApp_Image_2023-11-23_at_22.01.21-removebg-preview.png" alt="" style="height: 120px;width: 240px;">
</div>
    <div class="presetation" style="  border: 1px solid white;height:300px;;width:400px;background:black;">
   <div class="form" style="margin-top:50px;margin-left:50px">
        <h2 style="color: white;">WELCOME BACK</h2>
	<form action="login.php" method="post">
    <input  class="Rectangle_1" id="Rectangle_1" type="text" name="nom" placeholder="Phone number, username, or email" required="">
	<input  class="Rectangle_2" id="Rectangle_2" type="password" name="password" placeholder="Password" required="">
    <input id="Rectangle_3" class="Rectangle_3" style="color: white; background-color: #6c582c;" type="submit" value="Log In" onsubmit="ciblie">
    <p style="color:white;">Don't have an account? <a href="sign.php" style="text-decoration: none;color: #6c582c;">Sign up</a</p>
</form>
</div>
</div>
</div>
<?php
connexion();
$reponse =$bdd->query('SELECT * FROM information');
$authentfication=false;

while ($donnees=$reponse->fetch())
{  
    $log=$donnees['nom_utilisateur'];
    $pass=$donnees['mot_de_passe'];
    if($_POST['nom']==$log AND $_POST['password']==$pass) { 
        $authentfication=true;
        session_start();
        $_SESSION['nom_utilisateur']=$log;
        header("Location: index.php");
        }
    else {
        echo "mot de passe incorrect";
    }
}
?>
            </div>
    <?php 
include('fonctions.php');
?>
<div class="container">
<div class="photo">
    <img src="WhatsApp_Image_2023-11-23_at_22.01.21-removebg-preview.png" alt="" style="height: 120px;width: 240px;">
</div>
    <div class="presetation">
   
        <h2>WELCOME BACK</h2>
	<form action="login.php" method="post">
    <input  class="Rectangle_1" id="Rectangle_1" type="text" name="nom" placeholder="Phone number, username, or email" required="">
	<input  class="Rectangle_2" id="Rectangle_2" type="password" name="password" placeholder="Password" required="">
    <input id="Rectangle_3" class="Rectangle_3" style="color: white; background-color: #6c582c;" type="submit" value="Log In" onsubmit="ciblie">
    <p>Don't have an account? <a href="sign.php" style="text-decoration: none;color: #6c582c;">Sign up</a</p>
</form>
</div>
</div>
<?php
connexion();
$reponse =$bdd->query('SELECT * FROM information');
$authentfication=false;

while ($donnees=$reponse->fetch())
{  
    $log=$donnees['nom_utilisateur'];
    $pass=$donnees['mot_de_passe'];
    if($_POST['nom']==$log AND $_POST['password']==$pass) { 
        $authentfication=true;
        session_start();
        $_SESSION['nom_utilisateur']=$log;
        header("Location: index.php");
        }
    else {
        echo "mot de passe incorrect";
    }
}
?>
</body>
</html>