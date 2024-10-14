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

    // var modal = document.getElementById("myModal1");

    // var btn = document.getElementById("myBtn1");

    // var span = document.getElementsByClassName("close")[0];

    // btn.onclick = function () {
    //     modal.style.display = "block";
    // }

    // span.onclick = function () {
    //     modal.style.display = "none";
    // }

    // window.onclick = function (event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // }




    const modalTriggerButtons = document.querySelectorAll("[data-modal-target]");
    const modals = document.querySelectorAll(".modal");
    const modalCloseButtons = document.querySelectorAll(".modal-close");

    modalTriggerButtons.forEach(elem => {
        elem.addEventListener("click", event => toggleModal(event.currentTarget.getAttribute("data-modal-target")));
    });
    modalCloseButtons.forEach(elem => {
        elem.addEventListener("click", event => toggleModal(event.currentTarget.closest(".modal").id));
    });
    modals.forEach(elem => {
        elem.addEventListener("click", event => {
            if (event.currentTarget === event.target) toggleModal(event.currentTarget.id);
        });
    });

    // Maybe also close with "Esc"...
    document.addEventListener("keydown", event => {
        if (event.keyCode === 27 && document.querySelector(".modal.modal-show")) {
            toggleModal(document.querySelector(".modal.modal-show").id);
        }
    });

    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);

        if (getComputedStyle(modal).display === "flex") { // alternatively: if(modal.classList.contains("modal-show"))
            modal.classList.add("modal-hide");
            setTimeout(() => {
                document.body.style.overflow = "initial"; // Optional: in order to enable/disable page scrolling while modal is hidden/shown - in this case: "initial" <=> "visible"
                modal.classList.remove("modal-show", "modal-hide");
                modal.style.display = "none";
            }, 200);
        }
        else {
            document.body.style.overflow = "hidden"; // Optional: in order to enable/disable page scrolling while modal is hidden/shown
            modal.style.display = "flex";
            modal.classList.add("modal-show");
        }
    }



});
