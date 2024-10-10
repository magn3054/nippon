"use strict";

/* En standard hover funktion men skifter src på billedet 
    når musen er over billedet. Derfor er den skrevet i JS */
function fiskeSkift() {
    const img = document.getElementById('error-image');
    img.addEventListener('mouseover', () => {
        img.src = 'img/flad-fisk.webp';
    });
    img.addEventListener('mouseout', () => {
        img.src = 'img/stiv-fisk.webp';
    });
}