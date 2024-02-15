$(document).ready(function(){
  $('.slider-ul').owlCarousel({
    loop: false,
    autoplay: false,
    dots: false,
    nav: false,
    margin: 20,    
    autoplayTimeout: 5000,
    smartSpeed: 1000,
    responsive:{
      0:{
          items:6
      },
      600:{
        items:6
      },
      768:{
        items:1
      }
    }
  })

  $('.owl-banner').owlCarousel({
    loop: false,
    autoplay: false,
    dots: true,
    nav: true,
    animateOut: 'fadeOut',
    animateIn: 'flipInX',
    autoplayTimeout: 5000,
    smartSpeed: 2000,
    responsive:{
      0:{
          items:1
      },
      600:{
        items:1
      },
      768:{
        items:1
      }
    }
  })
  $('.owl-banner-home').owlCarousel({
    loop: false,
    autoplay: false,
    dots: true,
    nav: true,
    animateOut: 'fadeOut',
    animateIn: 'flipInX',
    autoplayTimeout: 5000,
    smartSpeed: 2000,
    responsive:{
      0:{
          items:1
      },
      600:{
        items:1
      },
      768:{
        items:1
      }
    }
  })  
    $('.slider-insta').owlCarousel({
    loop: true,
    center: true,
    autoplay: true,
    margin: 0,
    dots: false,
    nav: false,
    autoplayTimeout: 3000,
    smartSpeed: 1000,
    responsive:{
      0:{
          items:1
      },
      600:{
        items:3
      },
      768:{
        items:2
      },
      960:{
        items:4
      }
    }
  })
    $('.owl-resenas').owlCarousel({
      loop: false,
      autoplay: false,
      dots: true,
      nav: false,
      margin: 20,    
      autoplayTimeout: 5000,
      smartSpeed: 1000,
      responsive:{
        0:{
            items:1
        },
        600:{
          items:1
        },
        768:{
          items:3
        }
      }
    })  
/*    $('.btn_add').click(function(){
  $(".carrito_menu").removeClass('d-none');
});

   $('.btn_borrar').click(function(){
  $(".carrito_menu").toggleClass('d-none');body_index
});*/
 $('.carrito_menu').click(function(){
  $(".quitar").removeClass('opacity__0');
  $(".body_index").toggleClass('body_home');
  $(".fondo_body").toggleClass('d-block');
  $(".quitar").toggleClass('container_carrito_derecha');
});
$('.close_carrito_win').click(function(){
    $(".body_carrito").toggleClass('d-none');
    $('.body_home').removeClass('over_flow');
});

  $('.body_home_1').click(function(){
    $(".body_home_1").addClass('d-none');
    $('.body_home').removeClass('over_flow');
  });

  $('.close_form_res').click(function(){
    $(".form_buscar").toggleClass('d-none');
  });

  $('.none_cloase').click(function(){
    $(".movil_block_media").toggleClass('d-none-movil'); 
    $(".body_home").removeClass('not_scroll');
    $(".movil_block_media").toggleClass('click_mm');
    $(".movil_block_media").removeClass('movil_block_media');
  }); 
  $('.menu_responsive').click(function(){
    $(".click_mm").removeClass('d-none-movil');    
    $(".click_mm").toggleClass('movil_block_media');
    $(".click_mm").toggleClass('salir');
    $(".body_home").toggleClass('not_scroll');
    $(".click_mm").removeClass('click_mm');
  });       
  



})

