"use strict";

/*=============================
      TABS
=============================*/

const tabs = document.querySelectorAll(".af5-tab");

/*=============================
      SCREENS
=============================*/

const screens = {
    banner: document.querySelector(".af5-page"),
    video: document.querySelector(".af5-video-screen"),
    image: document.querySelector(".af5ii-screen"),
    anchor: document.querySelector(".af5ga-screen"),
    popup: document.querySelector(".af5p-page"),
    interstitial: document.querySelector(".af5is-page")
};

/*=============================
      PANELS
=============================*/

const panels = {
    banner: document.querySelector(".af5-panel"),
    video: document.querySelector(".af5-video-info"),
    image: document.querySelector(".af5-image-info"),
    anchor: document.querySelector(".af5-anchor-info"),
    popup: document.querySelector(".af5-popup-info"),
    interstitial: document.querySelector(".af5-interstitial-info")
};

/*=============================
      HIDE ALL
=============================*/

function hideAll() {

    Object.values(screens).forEach(screen => {

        if (screen) {

            screen.style.display = "none";

        }

    });

    Object.values(panels).forEach(panel => {

        if (panel) {

            panel.style.display = "none";

        }

    });

}

/*=============================
      SHOW SECTION
=============================*/

function showSection(type) {

    hideAll();

    if (screens[type]) {

        screens[type].style.display =
            (type === "banner") ? "flex" : "block";

    }

    if (panels[type]) {

        panels[type].style.display = "block";

    }

}

/*=============================
      TAB EVENTS
=============================*/

tabs.forEach(tab => {

    tab.addEventListener("click", function () {

        tabs.forEach(btn => btn.classList.remove("af5-active"));

        this.classList.add("af5-active");

        switch (this.id) {

            case "af5-banner":

                showSection("banner");

            break;

            case "af5-video":

                showSection("video");

            break;

            case "af5-image":

                showSection("image");

            break;

            case "af5-anchor":

                showSection("anchor");

            break;

            case "af5-popup":

                showSection("popup");

            break;

            case "af5-interstitial":

                showSection("interstitial");

            break;

        }

    });

});

/*=============================
      DEFAULT
=============================*/

showSection("banner");