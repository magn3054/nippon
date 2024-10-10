"use strict";

/* En standard hover funktion men skifter src på billedet 
    når musen er over billedet. Derfor er den skrevet i JS */
function fiskeSkift() {
    const img = document.getElementById('error-image');

    img.addEventListener('mouseover', () => { // Venter på musen er over billedet
        img.src = 'img/flad-fisk.webp';
    });
    img.addEventListener('mouseout', () => { // Venter på musen er væk fra billedet
        img.src = 'img/stiv-fisk.webp';
    });
}