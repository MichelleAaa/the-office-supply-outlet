// For faqlist.php

let btns = document.querySelectorAll(".btn.btn-link.btn-block.text-left.d-flex.justify-content-between.flex-row");

btns.forEach(btn => btn.addEventListener("click", togglePlusMinus));

function togglePlusMinus(e) {
    e.preventDefault();

    let spanContent = e.target.children[0];
    let spanClass = spanContent.classList[0];

    btns.forEach(btn => {
        let btnSpan = btn.querySelector('span');
        let btnSpanClass = btnSpan.classList;

        if (btnSpan != spanContent && btnSpanClass == spanClass){
            btnSpan.innerText = "+";
        }
    })

    if (spanContent.innerText == "+"){
        spanContent.innerText = "-";
    } else {
        spanContent.innerText = "+";
    }
}


// For Navbar - Woocommerce Search

// The woocommerce search bar in the nav will auto-fill the value if the blog search bar is used in the News & Ideas section. This code is to clear the value from the woocommerce search bar, which only searches for products.

window.addEventListener("DOMContentLoaded", clearInputValue);

function clearInputValue() {
    let navSearch = document.querySelector('nav #wp-block-search__input-1');
    navSearch.value = "";
}