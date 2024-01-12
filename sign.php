<!DOCTYPE html>
<html>
<head>
<title>NADER</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="sign.css">
<link rel="stylesheet" href="style7.css">
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
<div class="tableau" style=" margin-top:50px ;border: 1px solid white;height:500px;;width:500px;background:black;">
<div class="form" style="margin-top:50px;margin-left:40px">
<h3 style="color:white;">Create your account</h3>
<form action="sign.php" method="POST">
    <div class="tableaubackground">
	<table border="0" bgcolor=transparent>
	
		<tr><th style="color:white;">nom:</th><td><input type="text" name="nom"></td></tr>
		<tr><th style="color:white;">prenoom:</th><td><input type="text" name="prenom"></td></tr>
		<tr><th style="color:white;">nom d'utilisateur:</th><td><input type="text" name="nomutilisateur"></td></tr>
		<tr><th style="color:white;">age:</th><td><input type="text" name="age"></td></tr>
        <tr><th style="color:white;">mot de passe :</th><td><input type="password" name="motdepasse"></td></tr>
	</table>
<br> 
<input type="submit" value="Ajouter" style=" width:80px;background:#6c582c;color:white;" > &nbsp;&nbsp;<input type="reset" value="Effacer" style=" width:80px;background:#6c582c;color:white;">
<p style="color:white;">YOU have an account? <a href="login.php" style="text-decoration: none;color: #6c582c;">Log in</a</p>
</form>
</div>
</div>
</div>
<?php
	if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['nomutilisateur']) and isset($_POST['age']) and isset($_POST['motdepasse']))
	{
		if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['nomutilisateur']) and !empty($_POST['age']) and !empty($_POST['motdepasse']))
		{
		connexion();
		$sql1="select * from information where nom='".$_POST['nomutilisateur']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into information(nom, prenom, nom_utilisateur, age, mot_de_passe) values('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['nomutilisateur']."','".$_POST['age']."','".$_POST['motdepasse']."')";
				$bdd->exec($sql2);
				$sql3="insert into informationpay(nom_utilisateur) values('".$_POST['nomutilisateur']."')";
				$bdd->exec($sql3);
				$sql4="insert into produits(nom_utilisateur) values('".$_POST['nomutilisateur']."')";
				$bdd->exec($sql4);
				//deconnexion();
			echo "<center>".$_POST['nom']." est ajouté avec succés</center>";
			}
			else
			echo "<div class='existe'>Le mot de passe est existe déja !!!</div>";
		}
		else
		echo "<div class='existe'>Attention !! Remplir tous les champs avec des valeur non nulles</div>"; 
	} 

	?>
    </div>
	</div>
</body>
</html>