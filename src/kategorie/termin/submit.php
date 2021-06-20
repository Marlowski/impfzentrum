<?php
if($_POST['mail'] != '') {
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['mail'])));
    $date = htmlspecialchars(stripslashes(trim($_POST['appointment'])));
    $body = " Name: $name\n E-mail: $email\n Termin am:\n $date";
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
            <a>Termine</a>
            <div class="nav-dropdown">
                <a>Termin buchen</a>
                <a>Standorte / Öffnungszeiten</a>
                <a>Auskunft</a>
            </div>
        </li>
        <li>
            <a>Impfstoff</a>
            <div class="nav-dropdown">
                <a>Vergleich</a>
                <a>Verfügbarkeit</a>
                <a>Wahlmöglichkeit</a>
            </div>
        </li>
        <li>
            <a>Impfung erhalten</a>
            <div class="nav-dropdown">
                <a>Prioritäten Gruppen</a>
                <a>Vorerkrankungen</a>
            </div>
        </li>
        <li>
            <a>Symptome</a>
            <div class="nav-dropdown">
                <a>Gefahr für Altersgruppen</a>
                <a>Symptome</a>
                <a>Quarantäne</a>
                <a>Schnelltests</a>
                <a>Spätfolgen</a>
            </div>
        </li>
        <li>
            <a>Vorschriften</a>
            <div class="nav-dropdown">
                <a>Hygiene Hinweise</a>
                <a>Einschränkungen</a>
                <a>Verhaltensregeln</a>
            </div>
        </li>
        <li>
            <a>Inzidenzen</a>
            <div class="nav-dropdown">
                <a>Berlin</a>
                <a>Deutschland</a>
            </div>
        </li>
    </ul>
    <div class="nav-small-screen">
        <svg id="mobile-nav-menu-btn" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#DB876B"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
    </div>
    <ul id="mobil-dropdown-menu">
        <li>Termin
            <ul>
                <li><a>Termin buchen</a></li>
                <li><a>Standort / Öffnungszeiten</a></li>
                <li><a>Auskunft</a></li>
            </ul>
        </li>
        <li>Impfstoff
            <ul>
                <li><a>Vergleich</a></li>
                <li><a>Verfügbarkeit</a></li>
                <li><a>Wahlmöglichkeit</a></li>
            </ul>
        </li>
        <li>Impfung erhalten
            <ul>
                <li><a>Prioritäten Gruppen</a></li>
                <li><a>Vorerkrankungen</a></li>
            </ul>
        </li>
        <li>Symptome
            <ul>
                <li><a>Gefahr für Altersgruppen</a></li>
                <li><a>Symptome</a></li>
                <li><a>Quarantäne</a></li>
                <li><a>Schnelltests</a></li>
                <li><a>Spätfolgen</a></li>
            </ul>
        </li>
        <li>Vorschriften
            <ul>
                <li><a>Hygiene Hinweise</a></li>
                <li><a>Einschränkungen</a></li>
                <li><a>Verhaltensregeln</a></li>
            </ul>
        </li>
        <li>Inzidenzen
            <ul>
                <li><a>Berlin</a></li>
                <li><a>Deutschland</a></li>
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
    </footer>
</body>
</html>