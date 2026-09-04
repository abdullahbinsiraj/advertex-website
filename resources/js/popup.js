
document.addEventListener("DOMContentLoaded", function () {

    const popup = document.getElementById("advertex-popup-overlay");
    const closeBtn = document.getElementById("popupCloseBtn");
    const laterBtn = document.querySelector(".advertex-popup-later");

    const popupKey = "advertex_popup_expiry";

    const now = Date.now();

    const expiry = localStorage.getItem(popupKey);

    function closePopup() {

        popup.classList.remove("active");

        const next24Hours = Date.now() + (24 * 60 * 60 * 1000);

        localStorage.setItem(popupKey, next24Hours);

    }

    if (!expiry || now > expiry) {

        setTimeout(function () {

            popup.classList.add("active");

        },800);

    }

    closeBtn.addEventListener("click", closePopup);

    laterBtn.addEventListener("click", closePopup);

    popup.addEventListener("click", function(e){

        if(e.target === popup){

            closePopup();

        }

    });

    document.addEventListener("keydown", function(e){

        if(e.key === "Escape"){

            closePopup();

        }

    });

});