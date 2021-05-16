// Open Menu
let menu = document.body.getElementsByClassName("menu")[0];

menu.style.display = "none";

let open = document.body.getElementsByClassName("logo-menu")[0];

open.onclick = function() {
    menu.style.display = "block";
}

// Close Menu
let close = document.body.getElementsByClassName("close")[0];

close.onclick = function() {
    menu.style.display = "none";
}

// Up button
let up = document.body.getElementsByClassName("up")[0];

window.onscroll = function() {
    if (window.pageYOffset < 150) {
        up.style.display = "none";
    } else {
        up.style.display = "block";
    }
}

up.onclick = function scroll() {
    window.scrollTo(0, 0);
}



