<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nippon - Asiatiske Måltidskasser</title>
    <script defer src="js/links.js"></script>
    <script defer src="js/scrollToTop.js"></script>
    <link rel="icon" href="img/favicon-logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/scrollToTop.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="top-banner">
        <img src="img/baggrundsbillede.png" alt="">
        <div class="nippon-scraper">
            <p>N</p>
            <p>I</p>
            <p>P</p>
            <p>P</p>
            <p>O</p>
            <p>N</p>
        </div>
        <a href="error-page.html"><div class="ugens-menu">Ugens menu</div></a>
    </section>
    <section class="mid-section">
        <article>
            <h4>Studierabat?</h4>
            <p>Er du studerende og på udkig efter nemme, lækre måltider til en overkommelig pris? Med vores eksklusive studierabat på måltidskasser kan du spare penge uden at gå på kompromis med kvaliteten. 
                Få sunde, varierede retter leveret direkte til døren, så du kan bruge mere tid på studierne og mindre tid på madlavning og indkøb. Tjek vores måltidskasser med studierabat og gør hverdagen både nemmere og billigere!</p>
        </article>
        <img src="img/cham_dish.png" alt="Champignon ret med nudler og grøntsager">
    </section>
    <section class="bot-section">
        <article onclick="failPage()">
            <img src="img/nogetmedaeg.png" alt="">
            <h4>sundt og billigt</h4>
        </article>
        <article onclick="failPage()">
            <img src="img/budding.png" alt="">
            <h4>nemme Desserter</h4>
        </article>
        <article onclick="failPage()">
            <img src="img/reje.png" alt="">
            <h4>alt godt fra havet</h4>
        </article>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    
    <?php include 'footer.php'; ?>
</body>
</html>