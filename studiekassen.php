<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nippon - Asiatiske Måltidskasser</title>
    <script defer src="js/links.js"></script>
    <script defer src="js/scrollToTop.js"></script>
    <script defer src="js/bytter.js"></script>
    <link rel="icon" href="img/favicon-logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/scrollToTop.css">
    <link rel="stylesheet" href="css/studie.css">
</head>
<body>
    <?php include 'header.php'; ?> 

    <main>
        <section class="studie-information">
            <h1>Studie kassen</h1>
            <div>
                <article class="s-tekst">
                    <p>Velkommen til vores studiemåltidskasse! Vi ved, at studielivet kan være hektisk, og at det kan være en udfordring at finde tid til at lave sund og lækker mad. Derfor har vi skabt en specialdesignet måltidskasse, der passer til studerendes travle hverdag. 
                        Vores kasser indeholder nemme opskrifter og friske ingredienser, så du kan forberede velsmagende måltider på ingen tid. Med fokus på både kvalitet og prisvenlighed kan du nyde sund kost uden at sprænge budgettet. Udforsk vores udvalg, og gør din hverdag lettere med sunde måltider, der holder dig energisk og klar til at tage imod studielivet!</p>
                </article>
                <img class="box-example" src="img/dish-box.png" alt="">
            </div>
        </section>

        <section class="kasse-indhold">
            <h2>Kassens Indhold</h2>
            <ol>
                <li>Ramen - Lav din egen version af denne klassiske nudelsuppe med kylling, svinekød eller vegetarisk bouillon, og tilføj nudler, æg, grøntsager og krydderier.</li>
                <li>Yakisoba - En stegt nuddelret lavet med tynde hvedenudler, grøntsager som kål og gulerødder, samt kød eller tofu. Retten krydres med en sød-salt yakisoba-sauce.</li>
                <li>Okonomiyaki - Japanske pandekager lavet af en simpel dej med kål, æg og valgfri fyld som bacon, rejer eller svinekød. Toppes med okonomiyaki-sauce og mayonnaise.</li>
                <li>Katsudon - En skål ris toppet med sprødt friturestegt svinekød (tonkatsu) i en sød ægge- og løgsauce. Let at tilberede med enkle ingredienser.</li>
                <li>Onigiri - Risboller fyldt med tun, laks eller pickles og pakket ind i tang (nori). Onigiri er perfekt som en let snack eller til madpakken.</li>
                <li>Teriyaki-kylling - Kylling marineret i en hjemmelavet teriyakisauce (sojasauce, mirin og sukker), grillet eller stegt, og serveret med ris og grøntsager.</li>
                <li>Miso-suppe - En simpel og hurtig suppe baseret på miso-pasta, dashi-bouillon og tilsat tofu, tang og forårsløg. Perfekt som tilbehør til de fleste japanske retter.</li>
            </ol>
        </section>

        <div onclick="bestillingPage()" class="kob">
            <h2>Bestil nu</h2>
        </div>

        <section class="byt-ud">
            <h2>Byt ud</h2>
            <div class="bytter">
                <div id="din-kasse">
                    <img id="dit-billede" src="img/cham_dish.png" alt="">
                    <p>Din ret</p>
                </div>
                <div onclick="byt()" id="byt-pil">
                    <img src="img/big-arrow.svg" alt="">
                    <p>Skift retten</p>
                </div>
                <div id="byt-til">
                    <img id="andet-billede" src="img/dish-box.png" alt="">
                    <p>Byt til ...</p>
                </div>
            </div>
        </section>
    </main>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <?php include 'footer.php'; ?>
</body>
</html>