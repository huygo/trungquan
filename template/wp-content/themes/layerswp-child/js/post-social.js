jQuery(document).on("click", '.share-toggle', function(event)
{
    event.preventDefault();
    jQuery(this).toggleClass('toggle-active');
    jQuery(this).siblings('.share').toggleClass('share-active');
});
