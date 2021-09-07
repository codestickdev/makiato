/* Mobile menu */

$(document).ready(function() {
    $('.menu__icon').on('click', function()
    {
        $('.menuMobile').toggleClass('menuMobile--active');
    });
})


/* Change offer */

$(document).ready(function(){
    $('.basic').click(function(){        
        $('.basic__offer--active').removeClass('basic__offer--active');
        $('.extra__offer--active').removeClass('extra__offer--active');
        $(this).removeClass('active');
        $('.extra').addClass('active');
    });
    
    $('.extra').click(function(){        
        $('.basic__offer').addClass('basic__offer--active');
        $('.extra__offer').addClass('extra__offer--active').siblings().removeClass('extra__offer--active');
        $(this).removeClass('active');
        $('.basic').addClass('active');
    });      
});