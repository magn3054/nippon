"use strict";

// henter knappen:
let mybutton = document.getElementById("myBtn");

// Sørg for, at knappen vises, når brugeren ruller 20px ned fra toppen af dokumentet
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// Når brugeren klikker på knappen, rulles der til toppen af dokumentet.
function topFunction() {
  document.body.scrollTop = 0; // For browseren Safari
  document.documentElement.scrollTop = 0; // For browseren Chrome, Firefox, IE and Opera
}