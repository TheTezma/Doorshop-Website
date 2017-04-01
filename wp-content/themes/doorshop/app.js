$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeIn(1000)
    .next()
    .fadeOut(1000)
    .end()
    .appendTo('#slideshow');
},  3000);

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active-nav";
}

var app = angular.module('Doorshop', []);

$(document).ready(function() {
    $("#Dash").click();

    $('.nav-el').each(function() {
        // Save the two div references in a var so they can be called later within the event handler
        var Desc = $(this).children('#desc-el');
        var Img = $(this).children('#img-el'); // Remove if you do not want to hide original text upon toggling
        var Title = $(this).children("#title-el");
        var Test = $(this);

        $(this).click(function(e) {
             Img.toggle();
             Desc.toggle(); // Remove if you do not want to hide original text upon toggling
             Title.toggleClass("active");
             Test.toggleClass("pan-active");
        });
    });

});

