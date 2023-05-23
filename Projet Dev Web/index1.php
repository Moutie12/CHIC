<?php
include_once('connect.php');
$usr = "select * from commande";
$conn1 = mysqli_query($connect,$usr);

$usr1 ="select * from commande";
$sql1 = mysqli_query($connect,$usr1);
$som = mysqli_num_rows($sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Commerce</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style (1).css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
<body>
    <!--NavBar-->
    <div class="navbar" style="z-index: 999;">
            <!--Menu Slider-->
            <div>

              <div class="menu-btn" style="margin-top: -15px;">
                <i class="fas fa-bars" onclick="hide_recherche1()"></i>
              </div>
              <div class="side-bar" style="display: flex;">
                <div class="close-btn">
                  <i class="fas fa-times" title="fermer" onclick="afficher_rechercher1()"></i>
                </div>
                <div class="menu" style="margin-left: 30px;">
                  <p style="font-family: 'Satisfy', cursive; font-size: 90px; text-transform: uppercase; margin-top: -40px; margin-left: 25px; color: #e4cdbb;cursor:pointer;" onclick="vers_chix()">Chic</p>
                  <div class="item" class="hover-underline-animation"><a href="#"  class="hover-underline-animation" style="font-weight: bolder; font-size: 35px;width: 300px; padding-bottom: 0px; padding-top: 0px;"><strong>SOLDE -40%</strong></a></div>
                  <div class="item" ><a href="#"  class="hover-underline-animation"style="font-weight: bolder; width: 200px; padding-bottom: 0px; padding-top: 0px;">NOUVEAUTES</a></div>
                  <div class="item">
                    <div class="sub-btn">
                      <a class="hover-underline-animation" style="width: 200px; padding-bottom: 0px; padding-top: 0px;">ACCESSOIRES<i class="fas fa-angle-right dropdown" ></i></a>
                    </div>
                    <div  class="sub-menu">
                      <div style="display: grid;">
                        <div class="hover-underline-animation1" style="width: 300px;"><a href="sac.php" class="sub-item" style="width: 270px; padding-bottom: 0px; padding-top: 0px;">SACS ET SACS A DOS</a></div>
                        <div class="hover-underline-animation1" style="width: 150px;"><a href="ceintures.php" class="sub-item" style="padding-bottom: 0px; padding-top: 0px;" >CEINTURES</a></div>
                        <div class="hover-underline-animation1" style="width: 150px;"><a href="bijoux.php" class="sub-item" style="padding-bottom: 0px; padding-top: 0px;">BIJOUX</a></div>
                        <div class="hover-underline-animation1" style="width: 150px;"><a href="lunettes.php" class="sub-item" style="padding-bottom: 0px; padding-top: 0px;">LUNETTES</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="item" class="hover-underline-animation" style="width: 200px;"><a href="shoes.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">CHAUSSURES</a></div>
                  <div class="item" class="hover-underline-animation" style="width: 200px;"><a href="pantalon.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">PANTALONS</a></div>
                  <div class="item" class="hover-underline-animation" style="width: 200px;"><a href="jeans.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">JEANS</a></div>
                  <div class="item" class="hover-underline-animation" style="width: 200px;"><a href="robes.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">ROBES</a></div>
                  <div class="item" class="hover-underline-animation" style="width: 200px;"><a href="manteau.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">MANTEAUX</a></div>
                  <div class="item" class="hover-underline-animation" style="width: 200px;"><a href="chemise.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">CHEMISE</a></div>
                  <div class="item" class="hover-underline-animation" style="width: 200px;"><a href="T_shirt.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">PULL</a></div>
                
                </div>
                <div>
                  <img src="55.jpg" style="width: 940px; height: 753px;">
                </div>
              </div>
            </div>

            <p style="font-family: 'Satisfy', cursive; font-size: 90px; text-transform: uppercase; margin-top: -10px; margin-left: -200px; color: #ffffff; margin-bottom: -10px;cursor:pointer;" onclick="vers_chix()">Chic</p>

      <div class="elements">
        <form class="search" style="margin-top: 54px;" id="ele112">
          <input class="search" type="text" placeholder="  Recherche..." style="border-radius: 30px; width: 350px;">
          <button type="submit" style="border-radius: 30px; width: 120px;">Rechercher</button>
        </form>
      </div>

      <div class="elements">
        <div class="buttons">
          <img src="log1.png" id="profil" onclick="affichage_buttons()" style="width: 30px; height: 30px;">
          <img src="fav1.png" id="coeur" style="width: 35px; height: 35px;">
          <img src="shop1.png" id="panier" style="width: 40px; height: 35px;" onclick="show_list()">
        </div>
      </div>
    </div>

    <!--Pop UP list of products-->
    <div class="pop_up_products" style="margin-right:150px;">
      <?php
        while ($usr = mysqli_fetch_assoc($conn1))
        { ?>
           
           <div class="product" style="width:100%; margin-top:50px;margin-right:150px;">
        <div class="product1" style="width:100%;margin-right:150px;">
        <div>
        <div id="oo1">Email : <?php echo $usr['email'] ?></div>
        <div id="oo1">Adresse : <?php echo $usr['adresse'] ?></div>
        <div id="oo2" style="margin-left:300px;margin-top:-60px;">quantité : <?php echo $usr['quantité'] ?></div>
        <div id="oo3" style="margin-left:300px;">Color : <?php echo $usr['color'] ?></div>
      </div>
    </div>
        <button id="submit_acheter" style="margin-top:20px;">Submit</button>
      </div>

      <?php  }
      ?>
      <div class="payer_t">
      <button id="b_p">Payer Tous</button>
    </div>
    </div>

  

    <!--Annonce slider-->
    <div id="contenu">
    </div>


    <!--Menu Slider Begin-->
    <div style="height:480px;width:95%;margin-left:30px;margin-top:30px;border-radius:35px;margin-Bottom:30px;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="height:500px; border-radius:15px;">
    <div class="carousel-item active" style="height:480px;">
      <img class="d-block w-100" src="deux-belles-jeunes-filles-hipster-souriantes-robes-ete-mode.jpg" alt="First slide" style="width: 100%; height: 100%;">
      <div class="texte" id="texte2" style="transform: translate(10px,-300px); font-size: 4em; margin-top: 200px; margin-left: 100px">New Collection <br> <mark>in store </mark> </div>
    </div>
    <div class="carousel-item" style="height:480px;">
      <img class="d-block w-100" src="0903202303_8_1_4.jpg" alt="Second slide" style="width: 100%; height: 100%;">
    </div>
    <div class="carousel-item" style="height:480px;">
      <img class="d-block w-100" src="deux-jeunes-belles-femmes-hipster-souriantes-pull-manteau-blancs-mode.jpg" alt="Third slide" style="width: 100%; height: 100%;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>


    <div class="fashh">
      <div class="box" style="width:32%;">
        <img src="jolie-jeune-fille-coiffure-sombre-ondulee-maquillage-brillant-robe-soie-veste-noire-tenant-lunettes-soleil-dans-mains-regardant-loin-contre-mur-beige-du-batiment.jpg" id="fash2" style="width: 450px; height: 500px; margin-right: 50px; margin-top: 10px;">
      </div>
      <div class="box" style="width:32%;margin-left:30px;">
        <img src="image-pleine-longueur-mode-femme-noire-elegante-manteau-beige-luxe-elegant-pull-velours.jpg" id="fash4" style="margin-right: 10px; margin-top: 10px;">
      </div>
      <div class="box" style="width:32%;margin-left:23px;">
        <img src="superbe-femme-elegante-blonde-aux-levres-rouges-dans-lunettes-soleil-colorees-trench-coat-beige-touche-doucement-visage-pose-exterieur.jpg" id="fash5" style="margin-left: 0px; margin-top: 10px;">
      </div>
    </div>



<footer id="footer" style="background-color: rgb(248, 248, 248);height: 605px;margin-top: 30px;">
 <div class="aa">
       <div class="aide" id="alig" style="margin-right: 150px; margin-left: 150px;">
                <h2 class="a">NOUS</h2>
         <strong>Address</strong>
         <p>TUNIS,AVENUE HABIB BOURGIBA</p>
          <strong>Telephone</strong>
          <p>(+216) 53 429 307</p>
          <strong>MAIL </strong>
         <p><a id="mail"href="mailto:riahiamni797@gmail.com">riahiamni797@gmail.com</a></p>
       </div>
</div>
<div class="aa">
  <div class="aide" style="margin-right: 150px;" >
     <h2>Besoin d'aide?</h2>
                 <p>FAQ et Contact</p>
                  <p>Localisez votre commande</p>
                       <p>Préférences de cookies</p>
  </div>
 
</div>

<div class="aa">
  <h2 style="margin-top: 5px; margin-bottom: 5px;">PAIEMENT </h2>
    <p><img src="visa.png">  visa</d>
    <p><img src="pai.png">  paiment a Livraison</p>
    <p><img src="cc.png">  Mastercard</p>
</div>
<div style="margin-left: 460px; margin-bottom: 20px;">
  <div class="contact">
    <img src="facebook.jpg" title="Facebook" style="height: 50px; width: 50px;  margin-left: 70px; margin-right: 10px;">
  </div>
  <div class="contact">
    <img src="instagram.jpg" title="Instagram" style="height: 50px; width: 50px; margin-right: 10px;">
  </div>
  <div class="contact">
    <img src="twitter.jpg" title="Twitter" style="height: 50px; width: 50px; margin-right: 10px;">
  </div>
  <div class="contact">
    <img src="youtube.jpg" title="Youtube" style="height: 50px; width: 90px; margin-right: 10px;">
  </div>
  <div class="contact">
    <img src="pinterest.jpg" title="Pinterest" style="height: 50px; width: 50px; margin-right: 10px;">
  </div>
</div>
        
        <div class="footer-text-content">
                                      <div class="logo-socials" style="padding-top: 30px; padding-bottom: 30px;"><img  src="ccc.png" title="Etrend" alt="Etrend" width="143" height="70">
                                         <p >Découvrez notre collection de vêtements tendance conçus pour mettre en valeur votre style unique. Que vous recherchiez des tenues décontractées pour le quotidien ou des tenues élégantes pour les occasions spéciales, notre sélection de vêtements de qualité supérieure vous garantit de trouver le look parfait.</p>
                                      </div>
        </div>
        

</footer>

              

    
   
    
    
    
    
    

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="rel.js"></script>
<script src="rel1.js"></script>
<script src="rel2.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</body>
</html>