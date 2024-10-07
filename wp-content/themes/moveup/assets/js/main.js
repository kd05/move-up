jQuery(document).ready(function ($) {


    /****************************************************
     *             AOS Animation
     ***************************************************/
    setTimeout(() => {
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000, // values from 0 to 3000, with step 50ms
            once: true
        });
    }, 1);



    /****************************************************
     *             Slick
     ***************************************************/
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });



    /****************************************************
   *             Modal
   ***************************************************/

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

});
