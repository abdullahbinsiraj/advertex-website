import './bootstrap';
import 'bootstrap';
import './popup';
import * as bootstrap from 'bootstrap';

window.bootstrap = bootstrap;

/*======================================================
            FAQ ACCORDION
======================================================*/

document.addEventListener("DOMContentLoaded", function () {

    const items = document.querySelectorAll(".srv-faq-item");

    items.forEach(item => {

        const question = item.querySelector(".srv-faq-question");

        question.addEventListener("click", () => {

            if(item.classList.contains("active")){

                item.classList.remove("active");

                return;

            }

            items.forEach(i => i.classList.remove("active"));

            item.classList.add("active");

        });

    });

});