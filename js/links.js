"use strict";

// linker til forsiden 
function indexPage() { 
    window.location.href = "index.php";
}

// linker til indhold siden
function indholdPage() { 
    window.location.href = "indhold.php";
}

// linker til studiekasse siden
function studiePage() { 
    window.location.href = "studiekassen.php";
}

// linker til bestilling siden
function bestillingPage() { 
    window.location.href = "sign-in.php";
}

// linker til 404 siden
function failPage() { 
    window.location.href = "error-page.php";
}

/* Skaber en modal med en loader, inden den linker videre, angivet af parameteren 'url'. 
    Bliver der ikke angivet nogen parametrer er standard 404 siden efter 3 sekunder*/
function gennemLoader(url='error-page.php', tid=3) { 
    const modal = document.createElement('div');
    modal.style.position = 'fixed';
    modal.style.width = '100%';
    modal.style.height = '100%';
    modal.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    modal.style.display = 'flex';
    modal.style.justifyContent = 'center';
    modal.style.alignItems = 'center';
    modal.style.zIndex = '9999';

    const img = document.createElement('img');
    img.src = '../img/fish-loader.gif'; 
    img.style.maxWidth = '30%';
    img.style.maxHeight = '30%';

    modal.appendChild(img); // Tilføjer loader til modal-div'en
    document.body.appendChild(modal); // Tilføjer modal-div'en til body

    setTimeout(() => { // Timer til at fjerne modal og linke videre
        window.location.href = url;
    }, tid*1000);
}