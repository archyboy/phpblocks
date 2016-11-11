/* 
 * Copyright 2016 Anders Habberstad. All rights reserved!
 * This source code is made by Anders Habberstad. 
 * Contact me on habberstad@mail.com before any reuse or redistrubution of this code.
 */


// Extend jQuery with Animate.css
$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});
// and use like this:
// $('#yourElement').animateCss('bounce');


$(document).ready(function() {
    $('#top-logo').animateCss('bounce');
    $('.background').animateCss('bounce');
    $(".about-me").addClass("special");
    $("h1").html('<h3>This is a H3</h3>');
    $(".about-you").hide();
    $(".about-me.special").click(function() {
        $(".about-me").remove();
        $(".about-you").show();
        $(".about-you").addClass('special-white');
        $('.about-you').animateCss('bounce');
    });
    $("#print-pre").click(function() {
        
        $('#print-pre').animateCss('bounce');
        $('#print-pre').animate({
            opacity: 0.25,
            left: "+=50",
            height: "toggle"
            }, 1000, function() {
            // Animation complete.
            $('#print-pre').animate({
                opacity: 1.00,
                left: "+=50",
                height: "toggle"
            }, 1000, function() {
                $('#print-pre').animateCss('rotateOut');
            });
        });
    });

    // Show $_SERVER Buttons    
    $("#hide-server-info").hide();
    $("#show-server-info").click(function() {
        $(".popup-server").toggle();
        $("#show-server-info").hide();
        $("#hide-server-info").show();
    });
    $("#hide-server-info").click(function() {
        $(".popup-server").toggle();
        $("#hide-server-info").hide();
        $("#show-server-info").show();
    });
    
    // Show $_REQUEST Buttons
    $("#hide-request-info").hide();
    $("#show-request-info").click(function() {
        $(".popup-request").toggle();
        $("#show-request-info").hide();
        $("#hide-request-info").show();
    });
    $("#hide-request-info").click(function() {
        $(".popup-request").toggle();
        $("#hide-request-info").hide();
        $("#show-request-info").show();
    });    
});