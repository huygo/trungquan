// Action category products left menu
$(document).ready(function(){
    $('.v2_bnc_category_heading').on('click', function(){
        $('.v2_bnc_category_menu_list').slideToggle(300);
    });
    $('.v2_bnc_icon_filter').on('click', function(){
        $('.v2_bnc_products_filter_page').slideToggle(300);
    });

    $(window).scroll(function() {
        var hehe =  $(window).scrollTop();
        if(hehe > 600) {
            $('.v2_bnc_header_top--left').addClass('fixed')
        }
        else {
            $('.v2_bnc_header_top--left').removeClass('fixed')
        }

    });


});
// End Action category products left menu

// Owl Slideshow
// code tạo biến chống trùng lặp biến bị xung đột với thư viện khác
$(document).ready(function(){
    "use strict";

    $(".owl-slider-top").owlCarousel({
        navigation: false,
        items:1,
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        autoHeight: true,
        autoPlay : true,
        singleItem:true,
        responsive:true,
        pagination : true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });

    $(".owl_news_main").owlCarousel({
        navigation: true,
        items:3,
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        //Autoplay
        autoPlay : true,
        itemsCustom:[[480,2],[320,1],[768,2],[767,2],[991,3],[1200,3]],
        responsive:true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    $(".owl_video_main").owlCarousel({
        navigation: true,
        items:3,
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        //Autoplay
        autoPlay : true,
        itemsCustom:[[480,1],[320,1],[768,1],[767,1],[991,3],[1200,3]],
        responsive:true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    $(".owl_img_product_details").owlCarousel({
        navigation: false,
        items:3,
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        //Autoplay
        autoPlay : true,
        itemsCustom:[[480,2],[320,2],[768,4],[767,4],[991,4],[1024,2],[1200,3]],
        responsive:true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]

    });

    $(".owl-carousel-products_sam").owlCarousel({
        navigation: false,
        items:3,
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        //Autoplay
        autoPlay : true,
        itemsCustom:[[480,1],[320,1],[768,1],[767,1],[991,1],[1024,1],[1200,3]],
        responsive:true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]

    });

    $(".owl-carousel-products").owlCarousel({
        navigation: true,
        items:4,
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        pagination:false,
        //Autoplay
        autoPlay : true,
        itemsCustom:[[480,2],[320,1],[768,2],[767,2],[991,2],[1024,3],[1200,4]],
        responsive:true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]

    });
    $(".owl-carousel-brands").owlCarousel({
        navigation: true,
        items:6,
        slideSpeed : 200,
        paginationSpeed : 200,
        rewindSpeed : 1000,
        //Autoplay
        autoPlay : true,
        itemsCustom:[[480,2],[320,1],[768,3],[767,3],[991,4],[1200,6]],
        responsive:true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]

    });

     $(".owl-group-product").owlCarousel({
        navigation: false,
        items:4,
        slideSpeed : 200,
        paginationSpeed : 200,
        rewindSpeed : 1000,
        //Autoplay
        autoPlay : true,
        itemsCustom:[[480,1],[320,1],[768,1],[767,1],[991,1],[1200,4]],
        responsive:true,
        navigationText: [
                        "<i class='fa fa-angle-right'></i>"
        ]

    });


    $(".owl_sidebar_slideshow").owlCarousel({
        navigation: true,
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        singleItem:true,
        //Autoplay
        autoPlay : true,
        responsive:true,
        navigationText:false
    }); 

    $(".owl_customer_feedback").owlCarousel({
        navigation: true,
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        singleItem:true,
        //Autoplay
        autoPlay : true,
        responsive:true,
        navigationText:false
    }); 

});
// End Owl Slideshow

// Scroll To Top
$(document).ready(function(){
  $(".v2_bnc_icon_scrolltop").click(function(event){
   $('html, body').animate({ scrollTop: 0 }, 1000);
  });
  // Hide,Show ScrollToTop
  var num = 100;  
  $(window).bind('scroll', function () {
      if ($(window).scrollTop() > num) {   
          $('.v2_bnc_scrolltop').addClass('fixed');
      }
      else
      {
          $('.v2_bnc_scrolltop').removeClass('fixed');
      }
  });

  var num = 100;  
  $(window).bind('scroll', function () {
      if ($(window).scrollTop() > num) {   
          $('.v2_bnc_header_top').addClass('fixed');
      }
      else
      {
          $('.v2_bnc_header_top').removeClass('fixed');
      }
  });
  
    
    $('.toggle-menu').on('click', function(){
        $('.button_menu_mobile').toggleClass('active');
    });

     $('.number-count').on('click', function(){
        $(this).next().addClass('active');
    }); 

    $('.titil-menu-moblie').on('click', function(){
        $(this).parent('.top-menu-new').removeClass('active');
    });

    $('.icons-click-search').on('click', function(){
        $('.v2_bnc_search_main').slideToggle(500);
    });
}); 
// End Scroll To Top  

// Menu mobile
$(document).ready(function() {
    var removeClass = true;
    $menuLeft = $('.pushmenu-left');
    $nav_list = $('.button_menu_mobile');
    
    $nav_list.click(function(e) {
        $(this).toggleClass('active');
        $('body').toggleClass('pushmenu-push-toright');
        $menuLeft.toggleClass('pushmenu-open');
        removeClass = false;
    });
    $('html').click(function () {
        if (removeClass) {
            $('body').removeClass('pushmenu-push-toright');
            $('.pushmenu-left').removeClass('pushmenu-open');
            $('.button_menu_mobile').removeClass('active');
        }
        removeClass = true;
    });

    $('.navbar-nav').find('.parent').append('<span></span>');

    $('.navbar-nav .parent span').on("click", function() {
        if ($(this).attr('class') == 'opened') {
            $(this).removeClass().parent('.parent').find('ul').slideToggle();
        } else {
            $(this).addClass('opened').parent('.parent').find('ul').slideToggle();
        }
        removeClass = false;
    });
});