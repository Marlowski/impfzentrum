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
    <!-- slider library -->
    <link rel="stylesheet" type="text/css" href="../../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../../slick/slick-theme.css"/>
    <script type="text/javascript" src="../../slick/slick.min.js"></script>
    <!-- font (europa Adobe Font) -->
    <link rel="stylesheet" href="https://use.typekit.net/jby6hqc.css">
    <title>Impfzentrum Berlin | Termin buchen</title>
</head>
<body class="contains-slider">
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
    <button class="default-btn small secondary slider-prev">Zurück</button>
    <form method="post" action="<?php echo htmlspecialchars('submit.php') ?>" class="booking-slider-form-container" onsubmit="return formSubmit()">
        <div class="slider-wrapper">
            <div class="slider-elem">
                <h1>Termin Online vereinbaren</h1>
                <h3>Bitte beantworten Sie die folgenden Fragen, um ein für Sie geeigneten Termin, finden zu können.</h3>
                <p class="form-notice">Sie können mit den Pfeiltasten oder den Buttons durch das Formular navigieren.<br/>Sie können aber auch durch Sliden (Wischen auf dem Bildschirm) die Folien wechseln.</p>
                <button class="default-btn medium slider-next">Weiter</button>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="slider-elem">
                <h1>Zu welcher Altersgruppe gehören Sie?</h1>
                <div class="form-input-wrapper radio">
                    <input id="age-first" type="radio" name="age" value="0-25">
                    <label for="age-first">0-25</label>
                    <input id="age-second" type="radio" name="age" value="26-40">
                    <label for="age-second">26-40</label>
                    <input id="age-third" type="radio" name="age" value="41-55">
                    <label for="age-third">41-55</label>
                    <input id="age-fourth" type="radio" name="age" value="56-70">
                    <label for="age-fourth">56-70</label>
                    <input id="age-fifth" type="radio" name="age" value="+70">
                    <label for="age-fifth">+70</label>
                </div>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="slider-elem">
                <h1>Leiden Sie unter Vorerkrankungen, weshalb Sie zu einer Risikogruppe gehören?</h1>
                <div class="form-input-wrapper radio">
                    <input id="risk-yes" type="radio" name="risk" value="Ja">
                    <label for="risk-yes">Ja</label>
                    <input id="risk-no" type="radio" name="risk" value="Nein">
                    <label for="risk-no">Nein</label>
                </div>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="slider-elem">
                <h1>Welcher Impfstoff kommt für Sie in Frage?</h1>
                <p class="form-notice">Mehrauswahl möglich</p>
                <div class="form-input-wrapper radio">
                    <input id="vac-first" type="checkbox" name="vaccine" value="Biontech">
                    <label for="vac-first">Biontech</label>
                    <input id="vac-second" type="checkbox" name="vaccine" value="Moderna">
                    <label for="vac-second">Moderna</label>
                    <input id="vac-third" type="checkbox" name="vaccine" value="AstraZeneca">
                    <label for="vac-third">AstraZeneca</label>
                    <input id="vac-fourth" type="checkbox" name="vaccine" value="Johnson & Johnson">
                    <label for="vac-fourth">Johnson & Johnson</label>
                </div>
                <button class="default-btn medium secondary slider-next">Weiter</button>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="slider-elem">
                <h1>Suchen Sie einen Standort aus</h1>
                <p class="form-notice">Mehrauswahl möglich</p>
                <div class="form-input-wrapper radio">
                    <input id="location-first" type="checkbox" name="location" value="Mitte">
                    <label for="location-first">Mitte</label>
                    <input id="location-second" type="checkbox" name="location" value="Steglitz">
                    <label for="location-second">Steglitz</label>
                    <input id="location-third" type="checkbox" name="location" value="Schmargendorf">
                    <label for="location-third">Schmargendorf</label>
                    <input id="location-fourth" type="checkbox" name="location" value="Pankow">
                    <label for="location-fourth">Pankow</label>
                </div>
                <button class="default-btn medium secondary slider-next">Weiter</button>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="slider-elem">
                <h1>Wann würde Ihnen ein Termin am besten passen?</h1>
                <div class="form-input-wrapper radio list">
                    <label class="actual-label" for="appointment-start">Datum wählen</label>
                    <input type="date" id="appointment-start" name="appointment-start" value="2021-08-08">
                    <button class="default-btn medium secondary slider-next">Weiter</button>
                </div>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="slider-elem">
                <h1>Wir können Ihnen folgende Termine anbieten</h1>
                <div class="form-input-wrapper radio list">
                    <input id="appointment-first" type="radio" name="appointment" value="08.08.2021 um 9:00 Uhr Straße 21, 12345 Berlin Steglitz">
                    <label for="appointment-first">08.08.2021 um <b>9:00 Uhr</b> Straße 21, 12345 Berlin Steglitz</label>
                    <input id="appointment-second" type="radio" name="appointment" value="08.08.2021 um 10:30 Uhr Straße 21, 12345 Berlin Mitte">
                    <label for="appointment-second">08.08.2021 um <b>10:30 Uhr</b> Straße 21, 12345 Berlin Mitte</label>
                    <input id="appointment-third" type="radio" name="appointment" value="08.08.2021 um 15:45 Uhr Straße 21, 12345 Berlin Steglitz">
                    <label for="appointment-third">08.08.2021 um <b>15:45 Uhr</b> Straße 21, 12345 Berlin Steglitz</label>
                </div>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="slider-elem personal-data">
                <h1>Klasse! Jetzt fehlen nur noch ein paar Daten über Sie</h1>
                <div class="form-input-wrapper text">
                    <div class="label-input-wrapper">
                        <label for="name">Vor- und Nachname</label>
                        <input id="name" type="text" name="name">
                    </div>
                    <div class="label-input-wrapper">
                        <label for="bday">Geburtstag</label>
                        <input id="bday" type="text" name="bday">
                    </div>
                    <div class="label-input-wrapper">
                        <label for="adress">Adresse</label>
                        <input id="adress" type="text" name="adress">
                    </div>
                    <div class="label-input-wrapper">
                        <label for="mail">Email-Adresse</label>
                        <input id="mail" type="text" name="mail">
                    </div>
                    <input type="submit" class="default-btn medium" value="Termin buchen">
                </div>
            </div>
        </div>
    </form>
    <footer>
        <a href="../../impressum.html">Impressum</a>
        <a href="../../datenschutz.html">Datenschutz</a>
        <a href="../../team.html">Team</a>
    </footer>
</body>
</html>