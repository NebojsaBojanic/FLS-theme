document.addEventListener("DOMContentLoaded", function() {
     //Ikonica na koju klikces da se otvori menu
    var navToggle         = document.querySelector(".nav-toggle");
    //Klasa koja se dodaje na body tagkada se klikne na navToggle
    var bodyClass         = document.querySelector("body");
    //Dodaje na aktivnu ikonicu - u nasem slucaju na close dodaje open klasu
    var hamburgerMenuLine = document.querySelector(".hamburger-mobile-line");

    //click event sa js
    navToggle.addEventListener("click", function(e) {
        //radi klik na bilo koji element, cak i na a bez obzira da li a href tag imao # ili realan linkm, npr google.com
        e.preventDefault();
   
        bodyClass.classList.toggle('nav-open');
        hamburgerMenuLine.classList.toggle("open");
    });


