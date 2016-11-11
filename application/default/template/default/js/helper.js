// --------- Begin Check JQuery loaded ----------
function check_jquery() {
    $(document).ready(function(){
    if (jQuery) {  
     // jQuery is loaded  
    alert("Congratualtion :) JQuery is activated");
    } else {
    // jQuery is not loaded
    alert("Too bad :( JQuery is NOT activated");
        }
    });    
}
// --------- End Check JQuery loaded ----------

// --------- Begin Scrollbox ----------
function scrollbox($id) {    
$(function() { 
    // Stick the #nav to the top of the window
    var nav = $($id);
    var navHomeY = nav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.scroll(function() {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            nav.css({
                position: 'fixed',
                top: 0,
                left: nav.offset().left,
                width: nav.width()
            });
            isFixed = true;
        }
        else if (!shouldBeFixed && isFixed)
        {
            nav.css({
                position: 'static'
            });
            isFixed = false;
        }
    });
});
    }
// --------- End Scrollbox ----------
