let pull_homme = document.getElementById("pull_homme");
let pull_femme = document.getElementById("pull_femme");
let pantalon_homme = document.getElementById("pantalon_homme");
let pantalon_femme = document.getElementById("pantalon_femme");
let chaussures_homme = document.getElementById("chaussures_homme");
let chaussures_femme = document.getElementById("chaussures_femme");
let vet_homme = document.getElementById("vet_homme");
let vet_femme = document.getElementById("vet_femme");
let who ;
AOS.init();
function homme() {
    this.who = "homme";
}
function femme() {
    this.who="femme";
}
function pull() {
    if (this.who == "homme")
    {
        pull_homme.style.display="block";
        pull_homme.style.display="flex";
        pull_homme.style.flexWrap="wrap";
        pull_femme.style.display="none";
        pantalon_homme.style.display="none";
        pantalon_femme.style.display="none";
        chaussures_homme.style.display="none";
        chaussures_femme.style.display="none";
        vet_homme.style.display="none";
        vet_femme.style.display="none";
    }else{
        pull_homme.style.display="none";
        pull_femme.style.display="block";
        pull_femme.style.display="flex";
        pull_femme.style.flexWrap="wrap";
        pantalon_homme.style.display="none";
        pantalon_femme.style.display="none";
        chaussures_homme.style.display="none";
        chaussures_femme.style.display="none";
        vet_homme.style.display="none";
        vet_femme.style.display="none";
    }
}
function Chaussures() {
    if (this.who == "homme")
    {
        pull_homme.style.display="none";
        chaussures_homme.style.display="flex";
        chaussures_homme.style.flexWrap="wrap";
        pull_femme.style.display="none";
        pantalon_homme.style.display="none";
        pantalon_femme.style.display="none";
        chaussures_femme.style.display="none";
        vet_homme.style.display="none";
        vet_femme.style.display="none";
    }else{
        pull_homme.style.display="none";
        pull_femme.style.display="none";
        chaussures_femme.style.display="flex";
        chaussures_femme.style.flexWrap="wrap";
        pantalon_homme.style.display="none";
        pantalon_femme.style.display="none";
        chaussures_homme.style.display="none";
        vet_homme.style.display="none";
        vet_femme.style.display="none";
    }
}

function pantalon() {
    if (this.who == "homme")
    {
        pull_homme.style.display="none";
        pantalon_homme.style.display="flex";
        pantalon_homme.style.flexWrap="wrap";
        pull_femme.style.display="none";
        chaussures_homme.style.display="none";
        pantalon_femme.style.display="none";
        chaussures_femme.style.display="none";
        vet_homme.style.display="none";
        vet_femme.style.display="none";
    }else{
        pull_homme.style.display="none";
        pull_femme.style.display="none";
        pantalon_femme.style.display="flex";
        pantalon_femme.style.flexWrap="wrap";
        pantalon_homme.style.display="none";
        chaussures_femme.style.display="none";
        chaussures_homme.style.display="none";
        vet_homme.style.display="none";
        vet_femme.style.display="none";
    }
}


function Autres() {
    if (this.who == "homme")
    {
        pull_homme.style.display="none";
        vet_homme.style.display="flex";
        vet_homme.style.flexWrap="wrap";
        pull_femme.style.display="none";
        chaussures_homme.style.display="none";
        pantalon_femme.style.display="none";
        chaussures_femme.style.display="none";
        pantalon_homme.style.display="none";
        vet_femme.style.display="none";
    }else{
        pull_homme.style.display="none";
        pull_femme.style.display="none";
        vet_femme.style.display="flex";
        vet_femme.style.flexWrap="wrap";
        pantalon_homme.style.display="none";
        pantalon_femme.style.display="none";
        chaussures_femme.style.display="none";
        chaussures_homme.style.display="none";
        vet_homme.style.display="none";
    }
}

let email_contact = document.getElementById("email_contact");
let email1 = document.getElementById("email1");
function hover() {
    email1.classList.add('hover');
}

let contenu = document.getElementById("contenu");
texte = "--SOLDES -- SOLDES -- SOLDES  -LIVRAISON À DOMICILE GRATUITE DÈS 199 TND D’ACHAT -- SOLDES  --SOLDES  --SOLDES";
i=0;
function afficher() {
    if (i<texte.length)
    {
        contenu.innerHTML+=texte.charAt(i);
        i++;
        setTimeout(afficher, 100);
        /*setInterval(() => {
            contenu.innerText+=texte.charAt(i);
        }, 1000);*/
    }else{
        contenu.innerHTML="";
        i=0;
        afficher();
    }
}
afficher();
/////////////////affichage_des_bouttons////////////////////
let buttons = document.getElementById("buttons");
function affichage_buttons() {
  window.location.href = "login.php";
}
let cards = document.querySelector('.cards');
function affich() {
    cards.classList.add("test");
}
/////////////////afficher_categories////////////////////////
let options1 = document.querySelector('.options1');
function afficher_categories() {
    options1.classList.add('add_options1');
}
function hide_categories() {
    options1.classList.remove('add_options1');
}
/////////////////afficher_quantité//////////////////////////
let quantité = document.querySelector('.quantité');
function afficher_qunatité() {
    quantité.style.display="flex";
    window.scroll(0,0);
}
function hide_quantité() {
    quantité.style.display="none";
}
/////////////////afficher_categories////////////////////////
let k1 ;
k1=0;
let MenuSlider = document.getElementById("MenuSlider");
function afficher_categories() {
    if (this.k1==0)
    {
        MenuSlider.style.display="block";
        this.k1=1;
    }else{
        MenuSlider.style.display="none";
        this.k1=0;
    }
}
let k2 ;
k2=0;
let MenuSlider1 = document.getElementById("MenuSlider1");
let clothes = document.getElementById("clothes");
function afficher_categories1() {
    if (this.k2==0)
    {
        MenuSlider1.style.display="block";
        clothes.style.marginLeft="0px";
        this.k2=1;
    }else{
        MenuSlider1.style.display="none";
        clothes.style.marginLeft="230px";
        this.k2=0;
    }
}
$(document).ready(function(){
  //jquery for toggle sub menus
  $('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
  });

  //jquery for expand and collapse the sidebar
  $('.menu-btn').click(function(){
    $('.side-bar').addClass('active');
    $('.menu-btn').css("visibility", "hidden");
  });

  $('.close-btn').click(function(){
    $('.side-bar').removeClass('active');
    $('.menu-btn').css("visibility", "visible");
  });
});
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });



    var slider = document.getElementById("slider");
var sliderWidth = slider.offsetWidth;
var slideList = document.getElementById("slideWrap");
var count = 1;
var items = slideList.querySelectorAll("li").length;
var prev = document.getElementById("prev");
var next = document.getElementById("next");

window.addEventListener('resize', function() {
  sliderWidth = slider.offsetWidth;
});
var prevSlide = function() {
  if(count > 1) {
    count = count - 2;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }

  else if(count = 1) {
    count = items - 1;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
};
var nextSlide = function() {
  if(count < items) {
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
  else if(count = items) {
    slideList.style.left = "0px";
    count = 1;
  }
};
next.addEventListener("click", function() {
  nextSlide();
});

prev.addEventListener("click", function() {
  prevSlide();
});
setInterval(function() {
  nextSlide()
}, 8000);
window.onload = function() {
responsiveSlider();  
}
/////////////////////////////////////
let qa1 = 0 ;
let ele111 = document.getElementById("ele111");
function hide_recherche() {
    if (qa1 == 0)
    {
      ele111.style.display="none";
    }  
}
function afficher_rechercher() {
      ele111.style.display="block";
}
/////////////////////////////
function vers_chix() {
  window.location.href = "index1.php";
}
/////////////////////////////////////
let qa2 = 0 ;
let ele112 = document.getElementById("ele112");
function hide_recherche1() {
    if (qa2 == 0)
    {
      ele112.style.display="none";
    }  
}
function afficher_rechercher1() {
      ele112.style.display="block";
}
//////////////////////////////////////
