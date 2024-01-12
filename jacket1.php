<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleproduct.css">
    <link rel="stylesheet" href="stylepro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
                <li class="inline"><a href="shopcart2.php">cart-shopping<i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="product" id="product">
        <img src="color1 jacket brik.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">JACKET 1</h1>
            <h2 class="productPrice">MAD450</h2>
            <p class="productDesc">Lorem ipsum dolor sit amet consectetur impal adipisicing elit. Alias assumenda
                dolorum
                doloremque sapiente aliquid aperiam.</p>
            <div class="colors">
                <div class="color" style="background-color: rgb(133, 65, 5);"></div>
                <div class="color" style="background-color: rgb(0, 0, 0);"></div>
                <div class="color" style="background-color: rgb(64, 64, 205);"></div>
            </div>
            <div class="sizes">
                <div class="size">46</div>
                <div class="size">48</div>
                <div class="size">50</div>
                <div class="size">52</div>
                <div class="size">54</div>
            </div>
            <button class="productButton">BUY NOW!</button>
        </div>
        <div class="payment" >
            <?php 
            include('fonctions.php');
            ?>
           
            <form action="jacket1.php" method="POST">
                                <h1 class="payTitle">Personal Information</h1>
                                <label>Name and Surname</label>
                                <input type="text" name="nom_utilisateur" placeholder=" <?php echo  $_SESSION['nom_utilisateur'] ?>" class="payInput" >
                                <label>choix de couleur</label>  <select name="produit">
                                      <option >jacket 1 marron</option>
			                          <option >jacket 1 noir</option>
			                          <option >jacket 1 blue</option> 
                                    </select>
                                <label>Phone Number</label>
                                <input type="text" placeholder="+2126111111" name="number" class="payInput">
                                <label>Address</label>
                                <input type="text" placeholder="casblanca rue 00-11" name="adresse" class="payInput">
                                <h1 class="payTitle">Card Information</h1>
                                <div class="cardIcons">
                                    <img src="visa.png" width="40" alt="" class="cardIcon">
                                    <img src="master.png" alt="" width="40" class="cardIcon">
                                </div>
                                <input type="password" name="cardnumber" class="payInput" placeholder="Card Number">
                                <div class="cardInfo">
                                    <input type="text" name="cardmm" placeholder="mm" class="payInput sm">
                                    <input type="text" name="cardyyyy" placeholder="yyyy" class="payInput sm">
                                    <input type="text" name="cardcvv" placeholder="cvv" class="payInput sm">
                                </div>
                                <span class="close">X</span>
            <br>
            <input type="submit" class="payInput" value="Ajouter"> &nbsp;&nbsp;<input type="reset" class="payInput" value="Effacer">
            </form>
            </div>
            </div>
            <?php
                if(isset($_POST['nom_utilisateur']) and isset($_POST['produit']) and isset($_POST['number']) and isset($_POST['adresse']) and isset($_POST['cardnumber']) and isset($_POST['cardmm']) and isset($_POST['cardyyyy']) and isset($_POST['cardcvv']))
                {
                    if(!empty($_POST['nom_utilisateur']) and !empty($_POST['produit']) and !empty($_POST['number']) and !empty($_POST['adresse']) and !empty($_POST['cardnumber']) and !empty($_POST['cardmm']) and !empty($_POST['cardyyyy']) and !empty($_POST['cardcvv']))
                    {
                    connexion();
                    $sql1="select * from informationpay where nom_utilisateur='".$_POST['nom_utilisateur']."'";
                    $reponse = $bdd->query($sql1);
                    $donnees = $reponse->fetch();
                        if(empty($donnees['adresse']))
                        {   
                            $sql="update informationpay set number='".$_POST['number']."' , adresse='".$_POST['adresse']."', cardnumber='".$_POST['cardnumber']."' , cardmm='".$_POST['cardmm']."' , cardyyyy='".$_POST['cardyyyy']."' , cardcvv='".$_POST['cardcvv']."' where nom_utilisateur= '".$_POST['nom_utilisateur']."'";
                            $bdd->exec($sql);
                            echo '<center> Modification du information <strong>'.$_POST['nom_utilisateur'].'</strong> effectué avec succés </center>' ; //alerte('Modification du produit'.$_POST['nom'].' effectué avec succés');
                        }
                        else
                        echo "<div class='existe'>Le mot de passe est existe déja !!!</div>";
                        $sql1="select * from produits where  nom_utilisateur='".$_SESSION['nom_utilisateur']."'";
                        $reponse = $bdd->query($sql1);
                        $donnees = $reponse->fetch();
    
                     if (!empty($donnees['produit1'])){
                        $sql="update produits set produit1='".$_POST['produit']."' where nom_utilisateur= '".$_POST['nom_utilisateur']."'";
                        $bdd->exec($sql);
                        echo '<center> Modification du produit <strong>'.$_POST['nom_utilisateur'].'</strong> effectué avec succés </center>' ; //alerte('Modification du produit'.$_POST['nom'].' effectué avec succés');
                    }
                    else 
                    $sql="update produits set produit2='".$_POST['produit']."' where nom_utilisateur= '".$_POST['nom_utilisateur']."'";
                    $bdd->exec($sql);
                    echo '<center> Modification du produit <strong>'.$_POST['nom_utilisateur'].'</strong> effectué avec succés </center>' ; //alerte('Modification du produit'.$_POST['nom'].' effectué avec succés');
                    }
            
                } 
            
                ?>
                </div>
    </div>
    <div class="suggestion">
        <div class="maybe">
            <h4>Maybe you <span>want</span></h4>
        </div>
        <div class="bigfirstproudct">
        <div class="firstproudct">
           <img src="WhatsApp_Image_2023-12-09_at_23.00.47__1_-removebg-preview.png" alt="">
           <h4>Costume coupe slime</h4>
           <h5>PDH</h5>
           <h6><del>1200MAD</del>   600MAD    <span>(-50%)</span></h6>
        </div>
        <div class="firstproudct">
            <img src="WhatsApp_Image_2023-12-09_at_23.00.47__2_-removebg-preview.png" alt="" style="width: 70px;">
            <h4>Costume coupe slime</h4>
            <h5>PDH</h5>
            <h6><del>1200MAD</del>   600MAD    <span>(-50%)</span></h6>
        </div>
        <div class="firstproudct">
         <img src="WhatsApp_Image_2023-12-09_at_23.00.47__3_-removebg-preview.png" alt="" style="width:80px;">
            <h4>Costume coupe slime</h4>
            <h5>PDH</h5>
            <h6><del>1200MAD</del>   600MAD    <span>(-50%)</span></h6>
        </div>
    </div>
    </div>
    </div>
    <footer style="border: 1px solid black;">
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
                    <li class="fListItem">Air Force</li>
                    <li class="fListItem">Air Jordan</li>
                    <li class="fListItem">Blazer</li>
                    <li class="fListItem">Crater</li>
                    <li class="fListItem">Hippie</li>
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
                <script src="./jacket1.js"></script>                  

</body>
</html>