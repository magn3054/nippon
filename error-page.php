<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nippon 404 Error</title>
    <script defer src="js/errorpage.js"></script>
    <script defer src="js/links.js"></script>
    <link rel="icon" href="img/favicon-logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/error-page.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h1>Hovsa</h1>
        <p>Denne side findes ikke, så det var bare ærgeligt</p>
        <img onclick="indexPage()" id="error-image" src="img/stiv-fisk.webp" alt="">
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>