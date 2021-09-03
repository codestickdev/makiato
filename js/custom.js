/* Mobile menu */

$(document).ready(function() {
    $('.menu__icon').on('click', function()
    {
        $('.menuMobile').toggleClass('menuMobile--active');
    });
})