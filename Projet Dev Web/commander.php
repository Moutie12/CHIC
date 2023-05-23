<?php
include_once('connect.php');
$id = $_GET['id'];
$usr = "select * from pantalon where id=$id";
$conn1 = mysqli_query($connect,$usr);
$fft = mysqli_fetch_assoc($conn1);
if (isset($_POST['submit']))
{
  $quantité = $_POST['quantité'];
  $adresse = $_POST['adresse'];
  $email = $_POST['email'];
  $color = $_POST['color'];
  $sql = "insert into commande values ('NULL','$quantité','$color','$email','$adresse')";
  $conn1 = mysqli_query($connect,$sql);
}
$usr = "select * from commande";
$conn1 = mysqli_query($connect,$usr);
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style (1).css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                  <div class="item" style="height:10%;"class="hover-underline-animation"><a href="#"  class="hover-underline-animation" style="font-weight: bolder; font-size: 35px;width: 300px; padding-bottom: 0px; padding-top: 0px;"><strong>SOLDE -40%</strong></a></div>
                  <div class="item" style="height:10%;"><a href="#"  class="hover-underline-animation"style="font-weight: bolder; width: 200px; padding-bottom: 0px; padding-top: 0px;">NOUVEAUTES</a></div>
                  <div class="item" style="height:10%;">
                    <div class="sub-btn">
                      <a class="hover-underline-animation" style="width: 200px; padding-bottom: 0px; padding-top: 0px;">ACCESSOIRES<i class="fas fa-angle-right dropdown" ></i></a>
                    </div>
                    <div  class="sub-menu">
                      <div style="display: grid;">
                        <div class="hover-underline-animation1" style="width: 300px;"><a href="sac.php" class="sub-item" style="width: 270px; padding-bottom: 0px; padding-top: 0px;">SACS ET SACS A DOS</a></div>
                        <div class="hover-underline-animation1" style="width: 150px;"><a href="ceintures.html" class="sub-item" style="padding-bottom: 0px; padding-top: 0px;" >CEINTURES</a></div>
                        <div class="hover-underline-animation1" style="width: 150px;"><a href="bijoux.html" class="sub-item" style="padding-bottom: 0px; padding-top: 0px;">BIJOUX</a></div>
                        <div class="hover-underline-animation1" style="width: 150px;"><a href="lunettes.html" class="sub-item" style="padding-bottom: 0px; padding-top: 0px;">LUNETTES</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="item" style="height:10%;" class="hover-underline-animation" style="width: 200px;"><a href="shoes.php"  class="hover-underline-animation" style="padding-bottom: 0px; padding-top: 0px;">CHAUSSURES</a></div>
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


    <div class="pp256p">
        <div class="modifier_article">
        <form action="" method="POST">
            <div class="aa2a">
                <h2 id="modifier_txt" style="margin-bottom:30px;">Quantité</h2>
                <input type="number" placeholder="Quantité" id="input1" name="quantité">
                <h2 id="modifier_txt" style="margin-bottom:30px;">Color</h2>
                <input type="text" placeholder="Color" id="input2" name="color">
                <h2 id="modifier_txt" style="margin-bottom:30px;">Email :</h2>
                <input type="email" placeholder="Email" id="input3" name="email">
                <h2 id="modifier_txt" style="margin-bottom:30px;">Adresse :</h2>
                <input type="text" placeholder="Adresse" id="input4" name="adresse">
            </div>
        </div>
        <button id="submit_modifier" name="submit">Submit</button>
        </form>
    </div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="rel.js"></script>
<script src="rel1.js"></script>
<script src="rel2.js"></script>
</body>
</html>