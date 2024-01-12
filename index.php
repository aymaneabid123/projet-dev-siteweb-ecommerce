<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="ss.css">
    <link rel="stylesheet" href="style.css">
    <title> NADER </title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="reboot13.css"/>
<link rel="icon" href="WhatsApp_Image_2023-11-23_at_22.01.21-removebg-preview.png" type="image/icon type">
</head>

    <body>
            <div class="banner">
                <video autoplay loop muted plays-inline>
                    <source src="pexels-tima-miroshnichenko-6766332 (2160p).mp4" type="video/mp4">
                </video>
                <div class="navbar" id="navbar">
                    <img class="logo" src="WhatsApp_Image_2023-11-23_at_22.01.21-removebg-preview.png">
                    <ul>
                        <li class="inline aftersticky" ><a href="">Home</a></li>
                        <li  class="inline cat aftersticky" ><button href=""  style="background-color: transparent;" class="buttona">Categores</button><br>
                        <div class="type" ><ul>
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
            <div class="content">
                <h1>Explorez. Choisissez. Brillez</h1>
                <div>
                    <button type="button" class="cat">Explore</button>
                </div>
            </div>
        </div>
        <section class="trending-product"id="trending">
            <div class="center-text">
                <h2>NEW products for you <span><?php echo  $_SESSION['nom_utilisateur'] ?></span></h2>
            </div>
            <div class="products">
                <div class="row">
                    <img src="WhatsApp_Image_2023-09-24_at_18.41.26-removebg-preview (1).png" alt="">
                    <div class="heart-icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="viewproduct"><a href="#">view product</a></div>
                    <div class="price" >
                        <h4>PEDRO-DEL-HIERRO <br>COSTUME GRIS MATH</h4>
                        <p>550MAD</p>
                        
                    </div>
                </div>
                <div class="row1" >
                    <img src="color1 chemise blue.png" alt="" >
                    <div class="heart-icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="viewproduct1"><a href="#">view product</a></div>
                    <div class="price" ST>
                        <h4>PEDRO-DEL-HIERRO <br>CHEMISE BLUE CIEL</h4>
                        <p>550MAD</p>
                      
                    </div>
                </div>
         
                <div class="row2">
                   <img src="costume_gris_carrou__1_-removebg-preview.png" alt="">
                    <div class="heart-icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="viewproduct2"><a href="#">view product</a></div>
                    <div class="price">
                        <h4>PEDRO-DEL-HIERRO <br>COSTUME GRIS</h4>
                        <p>550MAD</p>
                       
                    </div>
                </div>    
            </div>
            </section>
         <div class="promotion"><p class="perfect">Your perfect style</p>
        <p class="style">MAKE YOUR STYLE</p>
    <div class="viste"><p>viste here</p></div></div>
    <div class="bigbanner">
   <div class="bigbanner1" ><div class="banner1">
        <div class="content1">
            <h1>MANTEAU MEN</h1>
            <div>
                <button type="button" class="cat1"><a href="manteau.html" style="color:black;text-decoration:none;">VIEW</a></button>
            </div>
        </div>
    </div></div>
    <div class="bigbanner2" ><div class="banner2">
        <div class="content2">
            <h1>MANTEAU MEN</h1>
            <div>
                <button type="button" class="cat1"><a  href="costume.html" style="color:black;text-decoration:none;">VIEW</a></button>
            </div>
        </div>
    </div></div>
</div>
<div class="promotion1" ><p class="perfect1">À propos de Nader - Vêtements Classiques pour Hommes</p>

    <p class="style1">Bienvenue chez Nader, votre destination ultime pour des vêtements classiques pour hommes à Casablanca, Maroc.

Notre Histoire
Depuis notre fondation, nous nous consacrons à offrir une élégance intemporelle et un style raffiné à la communauté masculine de Casablanca. Fondée en [année de fondation], Nader est née de la passion pour la confection artisanale et l'esthétique sophistiquée des vêtements pour hommes.

Notre Engagement
Chez Nader, notre engagement envers la qualité, le savoir-faire et le service clientèle est au cœur de tout ce que nous faisons. Nous croyons fermement en la création de vêtements qui reflètent l'élégance traditionnelle tout en restant adaptés aux tendances modernes.

Notre Collection
Notre collection soigneusement sélectionnée comprend une gamme exclusive de costumes, chemises, vestes et accessoires conçus pour l'homme moderne, conscient de son style. Chaque pièce est méticuleusement choisie pour sa qualité exceptionnelle et son style intemporel.

Nos Valeurs
Qualité Supérieure: Nous nous engageons à offrir des vêtements conçus avec des tissus de qualité supérieure et une attention méticuleuse aux détails.
Service Clientèle: Notre équipe est dévouée à offrir une expérience client exceptionnelle, répondant à tous vos besoins avec professionnalisme et courtoisie.
Style Classique: Nous croyons en la puissance d'un style intemporel qui transcende les tendances éphémères.
Visitez Notre Boutique
Venez nous rendre visite dans notre boutique à ain chouk à Casablanca pour découvrir notre collection complète ou explorez notre boutique en ligne pour trouver le parfait ajout à votre garde-robe.

Contactez-nous
Pour toute question, demande de renseignements ou assistance, notre équipe est à votre disposition. N'hésitez pas à nous contacter par téléphone au [0620286693] ou par e-mail à [aymaneabid960@gmail.com].

Chez Nader, nous célébrons l'art de l'habillement masculin et nous sommes fiers de vous aider à exprimer votre style unique avec nos vêtements classiques pour hommes.</p>
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
                <a href=""><img src="facebook.png" alt="" class="fIcon"></a>
                <a href=""><img src="instagram.png" alt="" class="fIcon"></a>
                <img src="twitter.png" alt="" class="fIcon">
                <a href=""><img src="whatsapp.png" alt="" class="fIcon"></a>
            </div>
        </div>
        <div class="footerRightMenu" id="footerRightMenu">
            
        </div>
    </div>
</footer>
        
        <script src="./app.js"></script>
    </body>
</html>