var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
        myIndex = 1
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 2 seconds
}

/*-------------------hover mujer---------------------------- */
$(".mujer").hover(function () {
    $(".menu_mujer").css("display", "flex");
    $(".menu_mujer").css("position", "absolute");
    $(".menu_mujer").css("width", "100%");
    $(".menu_mujer").css(" z-index", "1000");

    /*$(this).css("background-color", "#F5D4DF");*/

}, function () {
    $(".menu_mujer").css("display", "none");
    /* $(this).css("background-color", "transparent");*/


});

$(".menu_mujer").hover(function () {
    $(".menu_mujer").css("display", "flex");
    $(".menu_mujer").css("position", "absolute");
    $(".menu_mujer").css("width", "100%");
    $(".menu_mujer").css(" z-index", "1000");

    /* $(this).css("background-color", "#F5D4DF");*/

}, function () {
    $(".menu_mujer").css("display", "none");

});


/*-------------------hover hombre---------------------------- */


$(".hombre").hover(function () {
    $(".menu_hombre").css("display", "flex");
    $(".menu_hombre").css("position", "absolute");
    $(".menu_hombre").css("width", "100%");
    $(".menu_hombre").css(" z-index", "1000");

    /* $(this).css("background-color", "#F5D4DF");*/

}, function () {
    $(".menu_hombre").css("display", "none");
    $(this).css("background-color", "transparent");


});

$(".menu_hombre").hover(function () {
    $(".menu_hombre").css("display", "flex");
    $(".menu_hombre").css("position", "absolute");
    $(".menu_hombre").css("width", "100%");
    $(".menu_hombre").css(" z-index", "1000");

    /* $(this).css("background-color", "#F5D4DF");*/

}, function () {
    $(".menu_hombre").css("display", "none");

});

/*-------------------------------------------------- */


/*-------------------hover hombre---------------------------- */


$(".niño").hover(function () {
    $(".menu_niño").css("display", "flex");
    $(".menu_niño").css("position", "absolute");
    $(".menu_niño").css("width", "100%");
    $(".menu_niño").css(" z-index", "1000");

    /* $(this).css("background-color", "#F5D4DF");*/

}, function () {
    $(".menu_niño").css("display", "none");
    $(this).css("background-color", "transparent");


});

$(".menu_niño").hover(function () {
    $(".menu_niño").css("display", "flex");
    $(".menu_niño").css("position", "absolute");
    $(".menu_niño").css("width", "100%");
    $(".menu_niño").css(" z-index", "1000");

    /* $(this).css("background-color", "#F5D4DF");*/

}, function () {
    $(".menu_niño").css("display", "none");

});

/*-------------------------------------------------- */


$(".inicio").hover(function () {

    $(this).css("background-color", "#F5D4DF");


}, function () {

    $(this).css("background-color", "transparent");
});

$(".mujer").hover(function () {

    $(this).css("background-color", "#F5D4DF");


}, function () {

    $(this).css("background-color", "transparent");
});


$(".hombre").hover(function () {

    $(this).css("background-color", "#F5D4DF");


}, function () {

    $(this).css("background-color", "transparent");
});


$(".niño").hover(function () {

    $(this).css("background-color", "#F5D4DF");


}, function () {

    $(this).css("background-color", "transparent");
});


var clic = 1;

function divLogin() {

    if (clic == 1) {

        document.getElementById("caja").style.height = "100px";

        clic = clic + 1;

    } else {

        document.getElementById("caja").style.height = "0px";

        clic = 1;

    }

}


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}


function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-white";
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
}