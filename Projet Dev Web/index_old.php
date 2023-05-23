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
</head>
<body>
    <!--NavBar-->
    <div class="navbar">
      <div class="elements">
        <img src="77.PNG" style="width: 50px; height: 50px; margin-left: 30px;cursor:pointer;" onclick="afficher_categories()">
      </div>

      <div class="elements">
        <a href="index.html"><img src="logo - Copy.png" style="width: 780px; height: 120px; cursor: pointer;"></a>
      </div>

      <div class="elements">
        <form class="search" style="margin-top: 54px;">
          <input class="search" type="text" placeholder="  Recherche..." style="border-radius: 30px; width: 350px;">
          <button type="submit" style="border-radius: 30px; width: 120px;">Rechercher</button>
        </form>
      </div>

      <div class="elements">
        <div class="buttons">
          <img src="icons/log1.png" id="profil" onclick="affichage_buttons()" style="width: 30px; height: 30px;">
          <img src="icons/fav1.png" id="coeur" style="width: 35px; height: 35px;">
          <img src="icons/shop1.png" id="panier" style="width: 40px; height: 35px;" onclick="show_list()">
          <h4 class="somme_commandes"><?php echo $som ?></h4>
        </div>
        <div id="buttons">
          <button id="button"><a href="login.html">Login</a></button>
          <button id="button"><a href="register.html">Register</a></button>  
      </div>
      </div>
    </div>

    
    <!--Pop UP list of products-->
    <div class="pop_up_products">
      <?php
        while ($usr = mysqli_fetch_assoc($conn1))
        { ?>
           
           <div class="product" style="width:100%;">
        <div class="product1" style="width:100%;">
        <div>
        <div id="oo1">Email : <?php echo $usr['email'] ?></div>
        <div id="oo1">Adresse : <?php echo $usr['adresse'] ?></div>
        <div id="oo2" style="margin-left:250px;margin-top:-60px;">quantité : <?php echo $usr['quantité'] ?></div>
        <div id="oo3" style="margin-left:250px;">Color : <?php echo $usr['color'] ?></div>
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
    <div data-aos="flip-left" data-aos-duration="1500" style="display: flex;">
      <!--Menu Slider-->
<div id="MenuSlider">
  <div class="cat">
    <a href="pantalon.php" style="text-decoration: none; margin-right: 27px;"><button type="button" class="btn-primary" id="submitCategories"><b>Pantalon</b></button> </a>
    <a href="jeans.php" style="text-decoration: none;"><button type="button" class="btn-primary" id="submitCategories"><b>Jeans</b></button>  </a> 
  </div>
  <div class="cat">
    <a href="shoes.php" style="text-decoration: none; margin-right: 27px;"><button type="button" class="btn-primary" id="submitCategories"><b>Chaussures</b></button> </a>
    <a href="T_shirt.php" style="text-decoration: none;"><button type="button" class="btn-primary" id="submitCategories"><b>Pull</b></button>  </a> 
  </div>
  <div class="cat">
    <a href="robes.php" style="text-decoration: none;  margin-right: 54px;"><button type="button" class="btn-primary" id="submitCategories"><b>Robes</b></button></a>
    <a href="manteau.php" style="text-decoration: none;"><button type="button" class="btn-primary" id="submitCategories"><b>Manteaux</b></button> </a>
  </div>
  <div class="cat">
    <a href="sac.php" style="text-decoration: none;  margin-right: 44px;"><button type="button" class="btn-primary" id="submitCategories"><b>Sac</b></button></a>
    <a href="chemise.php" style="text-decoration: none;"><button type="button" class="btn-primary" id="submitCategories"><b>Chemises</b></button> </a>
  </div>
</div>
    <!--Carousel-->
    <div data-aos="flip-left" data-aos-duration="1500">
      <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner" id="fff">
            <div class="carousel-item" id="photo">
              <img src="carousel/fille-glamour-positive-robe-marron-dansant-dans-rue-joyeuse-dame-caucasienne-se-detendre-milieu-urbain.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item active" class="container2" id="photo">
              <img src="carousel/deux-belles-jeunes-filles-hipster-souriantes-robes-ete-mode.jpg" class="d-block w-100">
                 <div class="texte" style="transform: translate(100px,-450px); font-size: 3em;"></div>
            </div>
            
            <div class="carousel-item" class="container2" id="photo">
              <img src="carousel/deux-jeunes-belles-femmes-hipster-souriantes-pull-manteau-blancs-mode.jpg" class="d-block w-100">
              <div class="texte" id="texte2" style="transform: translate(10px,-300px); font-size: 4em;">New Collection <br> <mark>in store </mark> </div>
            </div>
            

          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:#0275d8 ;"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:#0275d8 ;"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
</div>



    <div class="fashh">
      <div class="box">
        <img src="index/jolie-jeune-fille-coiffure-sombre-ondulee-maquillage-brillant-robe-soie-veste-noire-tenant-lunettes-soleil-dans-mains-regardant-loin-contre-mur-beige-du-batiment.jpg" id="fash2" style="width: 550px; height: 500px; margin-right: 10px; margin-top: 10px;">
      </div>
      <div class="box">
        <img src="index/image-pleine-longueur-mode-femme-noire-elegante-manteau-beige-luxe-elegant-pull-velours.jpg" id="fash4" style="margin-right: 10px; margin-left: 0px; margin-top: 10px;">
      </div>
      <div class="box">
        <img src="index/superbe-femme-elegante-blonde-aux-levres-rouges-dans-lunettes-soleil-colorees-trench-coat-beige-touche-doucement-visage-pose-exterieur.jpg" id="fash5" style="margin-left: 0px; margin-top: 10px;">
      </div>
      </div>
<div class="fash">
  <div class="box">
 <img src="index/55.jpg" id="fash1" style="margin-right: 10px;">
</div>
<div class="box">
 <img src="index/fille-caucasienne-confiante-dans-lunettes-soleil-sombres-recherche-distance-plan-exterieur-femme-mode-bonne-humeur.jpg" id="fash3" >
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
    <p><img src="contact/visa.png">  visa</d>
    <p><img src="contact/pai.png">  paiment a Livraison</p>
    <p><img src="contact/cc.png">  Mastercard</p>
</div>
<div>
  <div class="contact">
    <img src="contact/facebook.jpg" style="height: 30px; width: 30px;  margin-left: 70px;">
  </div>
  <div class="contact">
    <img src="contact/instagram.jpg" style="height: 30px; width: 30px;">
  </div>
  <div class="contact">
    <img src="contact/twitter.jpg" style="height: 30px; width: 30px;">
  </div>
  <div class="contact">
    <img src="contact/youtube.jpg" style="height: 30px; width: 50px;">
  </div>
  <div class="contact">
    <img src="contact/pinterest.jpg" style="height: 30px; width: 30px;">
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
</body>
</html>