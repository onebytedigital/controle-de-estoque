$(function() {
    AOS.init()
    cardHover()
    slickCarousel()
    portifolioHover()
    toggleMenu()
})

function animarLogo() {
    $(".nav-brand").onclick(function () {
        $(".nav-brand img").css("width","100%")
    })
}

function menu() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $("header").addClass("fixed")
            $(".nav-link").addClass("fixed")
            $(".nav-icon").addClass("fixed")
        }else {
            $("header").removeClass("fixed")
            $(".nav-link").removeClass("fixed")
            $(".nav-icon").removeClass("fixed")
        }
    }); //missing );
}

function toggleMenu() {
  $(".toggle").click(function() {
    $(".nav-mobile-container").toggleClass("active")
  })
}

function cardHover() {
    $(".card-hover").hover(function() {
        $(this).toggleClass("active")
    })
}

function portifolioHover() {
    $(".portifolio-hover").hover(function() {
        $(this).toggleClass("active")
    })
}

function slickCarousel() {
    
$('.slick-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
}