<?php
include_once('connect.php');
$usr1 ="select * from commande";
$usrk = "select * from commande";
$conn1 = mysqli_query($connect,$usrk);
$sql1 = mysqli_query($connect,$usr1);
$som = mysqli_num_rows($sql1);
?>
<html>
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
    <link href="categories.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
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
                  <div class="item" style="height:10%;" class="hover-underline-animation"><a href="#"  class="hover-underline-animation" style="font-weight: bolder; font-size: 35px;width: 300px; padding-bottom: 0px; padding-top: 0px;"><strong>SOLDE -40%</strong></a></div>
                  <div class="item" style="height:10%;"><a href="#"  class="hover-underline-animation"style="font-weight: bolder; width: 200px; padding-bottom: 0px; padding-top: 0px;">NOUVEAUTES</a></div>
                  <div class="item" style="height:10%;"class="hover-underline-animation" style="width: 200px;"><a href="lunettes.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">ACCESSOIRES</a></div>
                  <div class="item" style="height:10%;margin-top:0%;" class="hover-underline-animation" style="width: 200px;"><a href="shoes.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">CHAUSSURES</a></div>
                  <div class="item" style="height:10%;" class="hover-underline-animation" style="width: 200px;"><a href="pantalon.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">PANTALONS</a></div>
                  <div class="item" style="height:10%;" class="hover-underline-animation" style="width: 200px;"><a href="jeans.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">JEANS</a></div>
                  <div class="item" style="height:10%;" class="hover-underline-animation" style="width: 200px;"><a href="robes.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">ROBES</a></div>
                  <div class="item" style="height:10%;" class="hover-underline-animation" style="width: 200px;"><a href="manteau.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">MANTEAUX</a></div>
                  <div class="item" style="height:10%;" class="hover-underline-animation" style="width: 200px;"><a href="chemise.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">CHEMISE</a></div>
                  <div class="item" style="height:10%;" class="hover-underline-animation" style="width: 200px;"><a href="T_shirt.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">PULL</a></div>
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







    <!--Annonce slider-->
    <div id="contenu">
    </div>






<!--Pop UP list of products-->
<div class="pop_up_products">
      <?php
        while ($usr3 = mysqli_fetch_assoc($conn1))
        { ?>
           
           <div class="product" style="width:100%;">
        <div class="product1" style="width:100%;">
        <div>
        <div id="oo1">Email : <?php echo $usr3['email'] ?></div>
        <div id="oo1">Adresse : <?php echo $usr3['adresse'] ?></div>
        <div id="oo2" style="margin-left:300px;margin-top:-60px;">quantité : <?php echo $usr3['quantité'] ?></div>
        <div id="oo3" style="margin-left:300px;">Color : <?php echo $usr3['color'] ?></div>
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
<div data-aos="flip-left" data-aos-duration="1500" style="display: flex;">

  <!--Menu Slider-->
  <div id="MenuSlider1">
    <div class="cat">
      <a href="pantalon.php" style="text-decoration: none; margin-right: 15px;"><button type="button" class="btn-primary" id="submitCategories"><b>Pantalon</b></button> </a>
      <a href="jeans.php" style="text-decoration: none;"><button type="button" class="btn-primary" id="submitCategories"><b>Jeans</b></button>  </a> 
    </div>
    <div class="cat">
      <a href="T_shirt.php" style="text-decoration: none; margin-right: 65px;"><button type="button" class="btn-primary" id="submitCategories"><b>Pull</b></button></a>
      <a href="shoes.php" style="text-decoration: none;"><button type="button" class="btn-primary" id="submitCategories"><b>Chaussures</b></button></a>
    </div>
    <div class="cat">
      <a href="robes.php" style="text-decoration: none;  margin-right: 45px;"><button type="button" class="btn-primary" id="submitCategories"><b>Robes</b></button></a>
      <a href="manteau.php" style="text-decoration: none;"><button type="button" class="btn-primary" id="submitCategories"><b>Manteaux</b></button> </a>
    </div>
    <div class="cat">
      <a href="blazers.php" style="text-decoration: none;  margin-right: 32px;"><button type="button" class="btn-primary" id="submitCategories"><b>Blazers</b></button></a>
      <a href="chemise.php" style="text-decoration: none;"><button type="button" class="btn-primary" id="submitCategories"><b>Chemises</b></button> </a>
    </div>
    <div class="cat">
      <a href="sac.php" style="text-decoration: none; margin-right: -8px;"><button type="button" class="btn-primary" id="submitCategories"><b>Accessoires</b></button></a>
      <a href="talon.php" style="text-decoration: none;"><button type="button" class="btn-primary" id="submitCategories"><b>Talents</b></button></a>
    </div>
  </div>

    <div id="clothes" style="text-align: center; margin-top: 30px;">
      <div class="content">
        <div class="item">
          <a class="item-content " href="sac.php">
            <div class="e">
              <img title="Sacs et Sacs à dos" src="accessoires/sac/1020330482.jpg" style="height: 150px; width: 100px;">
            </div>
            <div class="name selected">Sacs et Sacs à dos</div>
          </a>
        </div>
      
        <div class="item">
          <a class="item-content " href="bijoux.php">
            <div class="e ">
              <img title="Bijoux" src="accessoires/bijoutx/1020330485.jpg" style="height: 150px; width: 100px;">
            </div>
            <div class="name ">Bijoux</div>
          </a>
        </div>
      
        <div class="item">
          <a class="item-content " href="bonnets.php">
            <div class="e ">
              <img title="Bonnets et Chapeaux" src="accessoires/bonnets/1020409356.jpg" style="height: 150px; width: 100px;">
            </div>
            <div class="name ">Bonnets et Chapeaux</div>
          </a>
        </div>
      
      
        <div class="item">
          <a class="item-content " href="ceintures.php">
            <div class="e ">
              <img title="Ceinteur" src="accessoires/ceintures/1020330484.jpg" style="height: 150px; width: 100px;">
            </div>
            <div class="name ">Ceinteur</div>
          </a>
        </div>
      
        <div class="item">
          <a class="item-content " href="lunettes.php">
            <div class="e ">
              <img title="lunettes" src="accessoires/lunettes/1020409357.jpg" style="height: 150px; width: 100px;">
            </div>
            <div class="name ">lunettes</div>
          </a>
        </div>
      </div>
      <div>
      <div class="c">
      <div>
        <img src="accessoires/ceintures/0267402001_2_3_2.jpg" class="image">
        <h4>49.90 TND</h4>
        <h6>CEINTURE ENTRELACÉE AVEC BOUCLE</h6>
      </div>
      <button class="b">Select</button>
    </div>
    <div class="c">
      <div>
        <img src="accessoires/ceintures/3353302440_2_2_2.jpg" class="image">
        <h4>39.90 TND</h4>
        <h6>CEINTURE BASIQUE 90’S</h6>
      </div>
      <button class="b">Select</button>
    </div>
    <div class="c">
      <div>
        <img src="accessoires/ceintures/0270202001_2_2_2.jpg" class="image">
        <h4>39.90 TND</h4>
        <h6>CEINTURE À BOUCLE OCTOGONALE</h6>
      </div>
      <button class="b">Select</button>
    </div>
    </div>
    
    <div style="margin-top: 10px;">
      <div class="c">
      <div>
        <img src="accessoires/ceintures/0264402001_2_2_2.jpg" class="image">
        <h4>39.90 TND</h4>
        <h6>CEINTURE À BOUCLE</h6>
        <h6>RONDE ASYMÉTRIQUE</h6>
      </div>
      <button class="b">Select</button>
    </div>
    <div class="c">
      <div>
        <img src="accessoires/ceintures/3355302440_2_1_2.jpg" class="image">
        <h4>39.90 TND</h4>
        <h6>CEINTURE FINE AVEC</h6>
        <h6>BOUCLE OVALE MATE</h6>
      </div>
      <button class="b">Select</button>
    </div>
    <div class="c">
      <div>
        <img src="accessoires/ceintures/3351302001_2_2_2.jpg" class="image">
        <h4>39.90 TND</h4>
        <h6  style="margin-bottom: 35px;">CEINTURE BOYFRIEND</h6>
      </div>
      <button class="b">Select</button>
    </div>
    </div>
    
    <div style="margin-top: 10px;">
      <div class="c">
      <div>
        <img src="accessoires/ceintures/3393002001_1_1_2.jpg" class="image">
        <h4>39.90 TND</h4>
        <h6>CEINTURE DOUBLE BOUCLE CROISÉE</h6>
      </div>
      <button class="b">Select</button>
    </div>
    </div>
    </div>
</div>

    <footer id="footer" style="background-color: rgb(248, 248, 248);height: 605px;margin-top: 50px;">
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
       <h2 style="margin-top: 5px; margin-bottom: 5px;">PAIMENT </h2>
         <p><img src="visa.png">  visa</d>
         <p><img src="pai.png">  paiment a Livraison</p>
         <p><img src="cc.png">  Mastercard</p>
     </div>
     <div>
       <div class="contact">
         <img src="facebook.jpg" style="height: 30px; width: 30px;  margin-left: 70px;">
       </div>
       <div class="contact">
         <img src="instagram.jpg" style="height: 30px; width: 30px;">
       </div>
       <div class="contact">
         <img src="twitter.jpg" style="height: 30px; width: 30px;">
       </div>
       <div class="contact">
         <img src="youtube.jpg" style="height: 30px; width: 50px;">
       </div>
       <div class="contact">
         <img src="pinterest.jpg" style="height: 30px; width: 30px;">
       </div>
     </div>
             
             <div class="footer-text-content">
                                           <div class="logo-socials" style="padding-top: 30px; padding-bottom: 30px;"><img  src="ccc.png" title="Etrend" alt="Etrend" width="143" height="70">
                                              <p >Découvrez notre collection de vêtements tendance conçus pour mettre en valeur votre style unique. Que vous recherchiez des tenues décontractées pour le quotidien ou des tenues élégantes pour les occasions spéciales, notre sélection de vêtements de qualité supérieure vous garantit de trouver le look parfait. Avec des coupes flatteuses, des tissus confortables et des designs élégants, nos vêtements sont conçus pour vous faire sentir belle et confiante à tout moment. Parcourez notre gamme dès maintenant et trouvez votre prochaine tenue préférée !.</p>
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
</body>
</html>