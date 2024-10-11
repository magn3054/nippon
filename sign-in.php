<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nippon - Asiatiske Måltidskasser</title>
    <script defer src="js/links.js"></script>
    <script defer src="js/scrollToTop.js"></script>
    <script defer src="js/signIn.js"></script>
    <link rel="icon" href="img/favicon-logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/scrollToTop.css">
    <link rel="stylesheet" href="css/sign-in.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="sign-in" id="sign-in">
      <h1>Sign up</h1>
      <section class="firkanter" id="firkanter">
        <div id="firkant-et"></div>
        <div></div>
        <div></div>
      </section>
      <img class="sign-in-person" src="img/sign-in-person.svg" alt="sign-in-ikon">
      <section class="felter">
        <div class="row">
          <input type="text" id="fornavn" name="fornavn" placeholder="Fornavn" required>
        </div>
        <div class="row">
          <input type="text" id="efternavn" name="efternavn" placeholder="Efternavn" required>
        </div>
        <div class="row">
          <input type="text" id="adresse" name="adresse" placeholder="Adresse" required>
        </div>
        <div class="row">
          <input type="text" id="lejlighed-etage" name="lejlighed-etage" placeholder="Lejlighed/Etage">
        </div>
        <div class="row">
          <input type="text" id="postnummer" name="postnummer" placeholder="Postnummer" required>
        </div>
        <div class="row">
          <input type="tel" id="tlf" name="tlf" placeholder="Tlf" required>
        </div>
        <div class="row">
          <input type="text" id="faktureringsadresse" name="faktureringsadresse" placeholder="Faktureringsadresse">
        </div>
        <div class="row">
          <textarea id="instruktioner-til-chauffor" name="instruktioner-til-chauffor" placeholder="Instruktioner til chauffør"></textarea>
        </div>
      </section>
      <div class="button-container">
        <input class="next-step" type="submit" value="Næste step" onclick="showNextSection('sign-in', 'sign-in-two')">
      </div>
    </section>
    
    <section class="sign-in" id="sign-in-two" style="display: none;">
      <section class="firkanter">
        <div></div>
        <div id="firkant-to"></div>
        <div></div>
      </section>
      <section class="felter">
        <div class="row">
          <select id="antal-personer" name="antal-personer" required>
            <option value="" disabled selected hidden>Antal personer</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
          </select>
        </div>
        <div class="row">
          <select id="abonnement" name="abonnement" required>
            <option value="" disabled selected hidden>Abonnement</option>
            <option value="basic">Flexi</option>
            <option value="standard">Fuldtid</option>
          </select>
        </div>
        <h2>Præferencer</h2>
        <br>
        <div class="row">
          <label for="budgetvenligt">
            <input type="checkbox" id="budgetvenligt" name="budgetvenligt">
            Budgetvenligt
          </label>
        </div>
        <div class="row">
          <label for="nemt-og-hurtigt">
            <input type="checkbox" id="nemt-og-hurtigt" name="nemt-og-hurtigt">
            Nemt og hurtigt
          </label>
        </div>
        <div class="row">
          <label for="vegetarisk">
            <input type="checkbox" id="vegetarisk" name="vegetarisk">
            Vegetarisk
          </label>
        </div>
        <div class="row">
          <label for="kod-og-gront">
            <input type="checkbox" id="kod-og-gront" name="kod-og-gront">
            Kød og grønt
          </label>
        </div>
        <div class="row">
          <label for="familievenligt">
            <input type="checkbox" id="familievenligt" name="familievenligt">
            Familievenligt
          </label>
        </div>
        <div class="row">
          <label for="fisk-og-gront">
            <input type="checkbox" id="fisk-og-gront" name="fisk-og-gront">
            Fisk og grønt
          </label>
        </div>
      </section>
      <div class="button-container">
        <input class="next-step" type="submit" value="Næste step" onclick="showNextSection('sign-in-two', 'sign-in-three')">
      </div>
    </section>
    
    <section class="sign-in" id="sign-in-three" style="display: none;">
      <section class="firkanter">
        <div></div>
        <div></div>
        <div id="firkant-tre"></div>
      </section>
      <section class="felter-to"> 
        <div class="row"> 
          <input type="text" id="kortnummer" name="kortnummer" placeholder="Kortnummer" required> 
        </div> 
        <div class="row"> 
          <input type="text" id="mm-yy" name="mm-yy" placeholder="MM/YY" required> 
        </div> 
        <div class="row"> 
          <input type="text" id="verificeringskode" name="verificeringskode" placeholder="Verificeringskode" required> 
        </div> 
      </section>
      <div class="button-container">
        <input class="next-step" type="submit" value="Næste step" onclick="showNextSection('sign-in-three', 'done')">
      </div>
    </section>
    
    <section class="done" id="done" style="display: none;">
      <h1>! Tillykke !</h1>
      <p>Du har nu oprettet en bruger hos Nippon</p>
      <p>Din nye måltidskasse er på vej og du kan nu glæde dig til en masse spændende opskrifter inspireret fra det japanske køkken</p>
      <div class="button-container">
        <a href="index.php">
          <button>Tilbage til forsiden</button>
        </a>
      </div>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>