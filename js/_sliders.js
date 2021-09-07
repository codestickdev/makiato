// $('.galleryBoxes__gallery').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: true,
//     dots: false,
//     infinite: true,
// })

$(document).ready(function() {

    $('.responsive').slick({
        dots: true,
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendDots: $('.sliderDots'),
        prevArrow: $('.preArrow'),
        nextArrow: $('.nextArrow'),
      });
      $('.responsiveMobile').slick({
        dots: true,
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendDots: $('.sliderDotsMobile'),
        prevArrow: $('.preArrowMobile'),
        nextArrow: $('.nextArrowMobile'),
      });
});