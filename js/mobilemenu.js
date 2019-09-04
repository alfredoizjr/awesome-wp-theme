jQuery(document).ready(function ($) {

    //===================
    // mobile menu effects      
    // ===================

    $('header .mobile-menu i').on('click', function () {
        $('#mobile-menu-fade').slideDown();
    });
    $('header .mobile-menu').on('click', function () {
        $('#mobile-menu-fade').slideDown();
    });
    $('#mobile_menu_theme li a').on('click', function () {
        $('#mobile-menu-fade').slideUp();
    });
    $('#mobile-menu-fade').on('click',function(){
        $(this).slideUp();
    });

});