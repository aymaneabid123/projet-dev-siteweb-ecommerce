<?php
try{
$bdd=new PDO('mysql:host=localhost;dbname=back;charset=utf8', 'root', '');
}
catch (Exception $e){
    die('Erreur:'.$e->getMessage());
}
$reponse =$bdd->query('SELECT * FROM information');
$authentfication=false;

while ($donnees=$reponse->fetch())
{  
    $log=$donnees['nom_utilisateur'];
    $pass=$donnees['mot_de_passe'];
    if($_POST['nom']==$log AND $_POST['password']==$pass)
    {       
        $authentfication=true;
        session_start();
        $_SESSION['nom_utilisateur']=$log;
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="refresh" content="0 url=index.php">
            <title>Document</title>
        </head>
        <body>
            
        </body>
        </html>
        <?php
    }
}
if($authentfication==false){
    echo '<center>mot de passe incorrect</center>';
}
?>


