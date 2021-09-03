/* Mobile menu */

$(document).ready(function() {
    $('.menu').on('click', function()
    {
        $('.menuMoible').toggleClass('menuMoible--active');
        $('.logo').toggleClass('logo--active');
    });
})