jQuery(document).ready(function(){
	jQuery(".template-icon-search").click(function(event){
		event.preventDefault();
				jQuery(this).addClass("template-icon-search-active");
		if(jQuery(".template-search-form").hasClass("abcde")){
			jQuery(this).removeClass("template-icon-search-active");
			jQuery(".template-search-form").removeClass("abcde");
		}else
		jQuery(".template-search-form").addClass("abcde");

		});
	if(jQuery(window).width()< 991){
		jQuery('.home-new .lcam-carousel-container').attr("data-maxslides","2");
		if(jQuery(window).width()< 766){
			jQuery('.home-new .lcam-carousel-container').attr("data-maxslides","1");
   }
	}else{
		jQuery('.home-new .lcam-carousel-container').attr("data-maxslides","3");
	}
	jQuery( ".home-new .meta-info ").before( "<div class='exp-content-wrap'></div>" );
		jQuery( ".home-new .button ").after( "<div class='exp-content'></div>" );
				jQuery( ".y-kien-khach-hang .media-body .heading").before( "<div class='testi-author'></div>" );

				jQuery( ".y-kien-khach-hang .testi-author").wrap( "<div class='testi-meta'></div>" );
					jQuery( ".y-kien-khach-hang .testi-author").after( "<div class='testi-desig'></div>" );
});