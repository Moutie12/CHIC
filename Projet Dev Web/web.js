    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    //Javacript for video slider navigation
    const btns1 = document.querySelectorAll(".nav-btn");
    const slides1 = document.querySelectorAll(".video-slide");
    const contents1 = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns1.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides1.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents1.forEach((content) => {
        content.classList.remove("active");
      });

      btns1[manual].classList.add("active");
      slides1[manual].classList.add("active");
      contents1[manual].classList.add("active");
    }

    btns1.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
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
        