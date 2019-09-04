jQuery(document).ready(function ($) {

     //===================
    // sub menu effects      
    // ===================

    let rigthmenu = $('aside .widget_nav_menu ul li');
    rigthmenu.has('.sub-menu').children('a').before('<i class="arrow right"></i>');
    let headermenu = $('header nav#menu_container ul li');
    headermenu.has('.sub-menu').children('a').before('<i class="arrow right"></i>');

    rigthmenu
        .mouseenter(function () {
            $(this).find('.sub-menu li').slideDown('0.5');
            $(this).find('i.arrow').removeClass('right').addClass('down').addClass('g-b');
        })
        .mouseleave(function () {
            $(this).find('.sub-menu li').slideUp('0.5');
            $(this).find('i.arrow').removeClass('down').addClass('right');
        });


        headermenu
        .mouseover(function () {
            $(this).find('.sub-menu').fadeIn('0.5');
            $(this).find('i.arrow').removeClass('right').addClass('down');
        })
        .mouseleave(function () {
            $(this).find('.sub-menu').fadeOut();
            $(this).find('i.arrow').removeClass('down').addClass('right');
        });

});