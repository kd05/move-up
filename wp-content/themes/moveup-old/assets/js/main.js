jQuery( document ).ready(function($) {


    /****************************************************
     *             AOS Animation
     ***************************************************/
    setTimeout(() => {
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000, // values from 0 to 3000, with step 50ms
            once: true
        });
    },1);



    /****************************************************
     *             Slick
     ***************************************************/
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });



});
