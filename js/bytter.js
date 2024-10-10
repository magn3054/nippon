"use strict";

function byt() {
    const dinKasse = document.getElementById('dit-billede');
    const andenKasse = document.getElementById('andet-billede');
    const temp = dinKasse.src

    dinKasse.src = andenKasse.src;
    andenKasse.src = temp;
}

