jQuery(document).ready(function(){
 //    jQuery(".menu-item-has-children").after().click(function(event){
 //        event.preventDefault();
 //   jQuery(".sub-menu").addClass("abcde");
 // if(jQuery(".sub-menu").hasClass("abcde")){
 //            jQuery(".sub-menu").removeClass("abcde");
 //        }else
 //          jQuery(".sub-menu").addClass("abcde");
 //      });

    jQuery( ".off-canvas-right .menu-item-has-children > a").after( "<div class='icon-submenu'></div>" );
        jQuery(".icon-submenu").after().click(function(){
        jQuery(".icon-submenu").toggleClass('abcde',3000);
    });
          jQuery(".icon-submenu").after().click(function(){
        jQuery(".sub-menu").toggleClass('mobile',3000);
    });
});
