$(document).ready(function () {
    $(window).scroll(function () {
        $('.newNav').toggleClass("navStatic", ($(window).scrollTop() > 500));
    });
});