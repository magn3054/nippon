<header>
    <img onclick="gennemLoader('error-page.php', '3')" id="main-logo" src="img/hvid-fisk.png" alt="Logo">
    <div id="submenus">
        <div class="menu-item">
            <h3>Vores Måltidskasser</h3>
            <div class="dropdown">
                <p onclick="indholdPage()">Ugens Menu</p>
                <p onclick="studiePage()">Budget Kassen</p>
                <p onclick="failPage()">Hurtig Kassen</p>
                <p onclick="failPage()">Sundere Livstil Kassen</p>
                <p onclick="failPage()">Pescetar Kassen</p>
                <p onclick="failPage()">Vegetar Kassen</p>
                <p onclick="failPage()">Øko Kassen</p>
            </div>
        </div>
        <div class="menu-item">            
            <h3>Opskrifter</h3>
            <div class="dropdown">
                <p onclick="failPage()">Nudler</p>
                <p onclick="failPage()">Sushi</p>
                <p onclick="failPage()">Ris</p>
                <p onclick="failPage()">Grønt</p>
            </div>
        </div>
        <div class="menu-item">    
            <h3 onclick="failPage()">Sådan Fungerer Det</h3>
        </div>
        <div class="menu-item">
            <h3>Abonnement</h3>
            <div class="dropdown">
                <p onclick="failPage()">Fuldtid</p>
                <p onclick="failPage()">Flexi</p>
            </div>
        </div>
        <div class="menu-item">
            <h3>Om os</h3>
            <div class="dropdown">
                <p onclick="failPage()">Kontakt</p>
            </div>
        </div>

    </div>
    <div class="icons-menu">
        <img onclick="failPage()" class="icons" id="heart" src="img/heart.svg" alt="Hjerte">
        <div class="icons basket-container">
            <img onclick="bestillingPage()" id="basket" src="img/basket.svg" alt="Kurv">
        </div>
        <img onclick="failPage()" class="icons" id="profile" src="img/profile.svg" alt="Profil">
    </div>
</header>