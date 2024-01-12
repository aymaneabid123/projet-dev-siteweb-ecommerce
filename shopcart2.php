<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function confirmation(){
  const conf =document.getElementById("conf");
   alert("Votre commande est confirmer,Soyez informé(e) que votre commande sera livrée dans un délai maximum de deux jours.");

}

    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopcart.css">
    <link rel="stylesheet" href="stylepro.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="banner" style="background-color: rgb(255, 255, 255);height: 140px;">
        <div class="navbar" id="navbar">
            <img class="logo" src="WhatsApp_Image_2023-11-23_at_22.01.21-removebg-preview.png">
            <ul>
                <li class="inline aftersticky" ><a href="">Home</a></li>
                <li  class="inline cat aftersticky" ><button href=""  style="background-color: transparent;color: black;" class="buttona">Categores</button><br>
                <div class="type" ><ul class="ul">
                    <li class="notinline"><a href="chemise.html">chemise</a></li>
                    <li class="notinline"><a href="costume.html">costume</a></li>
                    <li class="notinline"><a href="veste.html">veste</a></li>
                    <li class="notinline"><a href="manteau.html">manteau</a></li>
                    <li class="notinline"><a href="jacket.html">jacket</a></li>
                 </ul>
                </div></li>
                <li class="inline"><a href="#">Blogs</a></li>
                <li class="inline"><a href="#">Support</a></li>
            </ul>
        </div>
    </div>
        <div class="products1">
        <?php
            include('fonctions.php');
            $conn = connexion(); // Établissement de la connexion
            ?>
           <h3 style="margin-left: 230px;">SHOPING-CART:</h3>
            <div class="product1">
                <div class="product1img" class="menuItem"  > <img src="<?php
                    $sql1 = "SELECT produit1 FROM produits WHERE nom_utilisateur='" . $_SESSION['nom_utilisateur'] . "'";
                    $reponse = $bdd->query($sql1); // Utilisation de la connexion pour exécuter la requête
                    while ($enreg = $reponse->fetch()) {
                        echo $enreg['produit1'] . "1.png";
                    }
                ?>" alt=""  class="productImg"  style=" width: 200px;"></div>
               <div class="text">
                <h4><?php
                    $sql1 = "SELECT produit1 FROM produits WHERE nom_utilisateur='" . $_SESSION['nom_utilisateur'] . "'";
                    $reponse = $bdd->query($sql1); // Utilisation de la connexion pour exécuter la requête
                    while ($enreg = $reponse->fetch()) {
                        echo $enreg['produit1'];
                    }
                ?></h4>
                <h5>PDH</h5>
                <h6><del>340MAD</del>   170MAD    <span>(-50%)</span></h6></div>
                <button id="conf" onclick="confirmation()" style="background: rgb(43, 72, 98);;color:white;transform:translateX(90px)">Confirmer la commande</button>
                
            </div>
            <div class="product1">
                <div class="product1img" > <img src="<?php
                    $sql1 = "SELECT produit2 FROM produits WHERE nom_utilisateur='" . $_SESSION['nom_utilisateur'] . "'";
                    $reponse = $bdd->query($sql1); // Utilisation de la connexion pour exécuter la requête
                    while ($enreg = $reponse->fetch()) {
                        echo $enreg['produit2'] . "1.png";
                    }
                ?>" alt="" style=" width: 200px;" ></div>
                <div class="text">
                    <h4><?php
                        $sql1 = "SELECT produit2 FROM produits WHERE nom_utilisateur='" . $_SESSION['nom_utilisateur'] . "'";
                        $reponse = $bdd->query($sql1); // Utilisation de la connexion pour exécuter la requête
                        while ($enreg = $reponse->fetch()) {
                            echo $enreg['produit2'] ;
                        }
                    ?></h4>
                    <h5>PDH</h5>
                    <h6><del>340MAD</del>   170MAD    <span>(-50%)</span></h6></div>
                    <button id="conf" onclick="confirmation()" style="background: rgb(43, 72, 98);;color:white;transform:translateX(90px)">Confirmer la commande</button>
             
            </div>
            <footer style="border-top:1px solid black ;margin-top: 12px;">
                <div class="footerLeft">
                    <div class="footerMenu">
                        <h1 class="fMenuTitle">About Us</h1>
                        <ul class="fList">
                            <li class="fListItem">Company</li>
                            <li class="fListItem">Contact</li>
                            <li class="fListItem">Careers</li>
                            <li class="fListItem">Affiliates</li>
                            <li class="fListItem">Stores</li>
                        </ul>
                    </div>
                    <div class="footerMenu">
                        <h1 class="fMenuTitle">Useful Links</h1>
                        <ul class="fList">
                            <li class="fListItem">Support</li>
                            <li class="fListItem">Refund</li>
                            <li class="fListItem">FAQ</li>
                            <li class="fListItem">Feedback</li>
                            <li class="fListItem">Stories</li>
                        </ul>
                    </div>
                    <div class="footerMenu">
                        <h1 class="fMenuTitle">Products</h1>
                        <ul class="fList">
                            <li class="fListItem">monteau cachmiere</li>
                            <li class="fListItem">costume pique</li>
                            <li class="fListItem">chemise</li>
                            <li class="fListItem">Cravate</li>
                            <li class="fListItem">jacket classe</li>
                        </ul>
                    </div>
                </div>
                <div class="footerRight">
                    <div class="footerRightMenu" id="footerRightMenu">
                        <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                        <div class="fMail">
                            <input type="text" placeholder="your@email.com" class="fInput">
                            <button class="fButton">Join!</button>
                        </div>
                    </div>
                    <div class="footerRightMenu">
                        <h1 class="fMenuTitle">Follow Us</h1>
                        <div class="fIcons">
                            <img src="facebook.png" alt="" class="fIcon">
                            <img src="twitter.png" alt="" class="fIcon">
                            <img src="instagram.png" alt="" class="fIcon">
                            <img src="whatsapp.png" alt="" class="fIcon">
                        </div>
                    </div>
                    <div class="footerRightMenu" id="footerRightMenu">
                        
                    </div>
                </div>
            </footer>
            
        <script src="./costume.js"></script>
</body>
</html>