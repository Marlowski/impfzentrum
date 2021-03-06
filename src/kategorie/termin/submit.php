<?php
if($_POST['mail'] != '') {
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['mail'])));
    $adress = htmlspecialchars(stripslashes(trim($_POST['adress'])));
    $date = htmlspecialchars(stripslashes(trim($_POST['appointment'])));
    $body = " Name: $name\n Adresse: $adress\n Termin am: $date";
    mail( $email, 'Impfzentrum Berlin | Termin - ' . $date, $body);
}
?>


<!DOCTYPE html>
<html lang="de" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Marlon Kerth">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet">
    <link rel="icon" href="../../assets/icons/iz-logo-icon.svg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../../scripts/script.js"></script>
    <link href="../../styles/style.css" rel="stylesheet">
    <!-- font (europa Adobe Font) -->
    <link rel="stylesheet" href="https://use.typekit.net/jby6hqc.css">
    <title>Impfzentrum Berlin | Termin gebucht</title>
</head>
<body id="submit-page" class="default-text-page">
    <header class="dark-header">
    <a class="nav-img-holder" href="../../index.html">
        <img src="../../assets/icons/iz-logo-dark.svg" alt="Impfzentrum Berlin">
    </a>
    <ul class="nav-big-screen">
        <li>
            <a>Termin</a>
            <div class="nav-dropdown">
                <a href="../../kategorie/termin/buchen.php">Termin buchen</a>
            </div>
        </li>
        <li>
            <a>Kontakt</a>
            <div class="nav-dropdown">
                <a href="../../kategorie/termin/standorte.html">Standorte / Öffnungszeiten</a>
                <a href="../../kategorie/termin/auskunft.html">Auskunft</a>
            </div>
        </li>
        <li>
            <a>Impfstoff</a>
            <div class="nav-dropdown">
                <a href="../../kategorie/impfstoff/vergleich.html">Vergleich</a>
                <a href="../../kategorie/impfstoff/verfuegbarkeit.html">Verfügbarkeit</a>
                <a href="../../kategorie/impfstoff/auswahl.html">Wahlmöglichkeit</a>
                <a href="../../kategorie/impfstoff/prio-gruppen.html">Prioritäten Gruppen</a>
            </div>
        </li>
        <li>
            <a>Erkrankung</a>
            <div class="nav-dropdown">
                <a href="../../kategorie/symptome/symptome.html">Symptome</a>
                <a href="../../kategorie/symptome/infektion.html">Infektion</a>
            </div>
        </li>
        <li>
            <a>Vorschriften</a>
            <div class="nav-dropdown">
                <a href="../../kategorie/vorschriften/hygiene-hinweise.html">Hygiene Hinweise</a>
                <a href="../../kategorie/vorschriften/einschraenkungen.html">Einschränkungen</a>
            </div>
        </li>
    </ul>
    <div class="nav-small-screen">
        <svg id="mobile-nav-menu-btn-open" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#DB876B"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
        <svg id="mobile-nav-menu-btn" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#DB876B"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
    </div>
    <ul id="mobil-dropdown-menu">
        <li>Termin
            <ul>
                <li><a href="../../kategorie/termin/buchen.php">Termin buchen</a></li>
            </ul>
        </li>
        <li>Kontakt
            <ul>
                <li><a href="../../kategorie/termin/standorte.html">Standort / Öffnungszeiten</a></li>
                <li><a href="../../kategorie/termin/auskunft.html">Auskunft</a></li>
            </ul>
        </li>
        <li>Impfstoff
            <ul>
                <li><a href="../../kategorie/impfstoff/vergleich.html">Vergleich</a></li>
                <li><a href="../../kategorie/impfstoff/verfuegbarkeit.html">Verfügbarkeit</a></li>
                <li><a href="../../kategorie/impfstoff/auswahl.html">Wahlmöglichkeit</a></li>
                <li><a href="../../kategorie/impfstoff/prio-gruppen.html">Prioritäten Gruppen</a></li>
            </ul>
        </li>
        <li>Erkrankung
            <ul>
                <li><a href="../../kategorie/symptome/symptome.html">Symptome</a></li>
                <li><a href="../../kategorie/symptome/infektion.html">Infektion</a></li>
            </ul>
        </li>
        <li>Vorschriften
            <ul>
                <li><a href="../../kategorie/vorschriften/hygiene-hinweise.html">Hygiene Hinweise</a></li>
                <li><a href="../../kategorie/vorschriften/einschraenkungen.html">Einschränkungen</a></li>
            </ul>
        </li>
    </ul>
</header>
    <main>
        <div>
            <h1>Ihr Termin wurde erfolgreich gebucht!</h1>
            <h3>Sie können die genauen Details aus der Email entnehmen</h3>
        </div>
    </main>
    <footer>
        <a href="../../impressum.html">Impressum</a>
        <a href="../../datenschutz.html">Datenschutz</a>
        <a href="../../team.html">Team</a>
    </footer>
</body>
</html>