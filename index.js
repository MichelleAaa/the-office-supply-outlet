// For faqlist.php

let btns = document.querySelectorAll(".btn.btn-link.btn-block.text-left.d-flex.justify-content-between.flex-row");

btns.forEach(btn => btn.addEventListener("click", togglePlusMinus))

function togglePlusMinus(e) {
    e.preventDefault();

    let spanContent = e.target.children[0];

    if (spanContent.innerText == "+"){
        spanContent.innerText = "-";
    } else {
        spanContent.innerText = "+";
    }
}

