<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Verkiezing</title>
    <link rel="icon" href="./img/SR_S.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/main2.css">
    <link rel="stylesheet" type="text/css" href="./css/verkiezing.css">
    <script src="jq/JQuery.min.js"></script>
    <script src="jq/visibility.js"></script>
    <script src="jq/sidebar.js"></script>
    <script src="jq/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.stdMenu')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

            })
        ;
    </script>
</head>
<body>
<!-- Follow menu -->

<div class="ui large top fixed hidden inverted menu">
    <a class="imgLogo" href="./"><img class="ui medium image" src="./img/SR_Logo2_transparant_wit.png"> </a>
    <a class="item" href="./">Home</a>
    <a class="item" href="./wat">Wat?</a>
    <a class="item" href="./stuvers">Stuvers</a>
    <a class="item" href="./raden">Raden</a>
    <a class="item" href="./dossiers">Dossiers</a>
    <a class="item" href="./galerij">Galerij</a>
    <a class="active item" href="./verkiezing">Verkiezing</a>
    <a class="item" href="./contact">Contact</a>
    <div class="right menu">
        <div class="item">
            <a class="ui inverted button" href="./login">Log in</a>
        </div>
    </div>
</div>

<!-- Side bar menu -->

<div class="ui vertical inverted sidebar menu">
    <!-- <a class="imgLogo" href="./"><img class="ui medium image" src="./img/SR_Logo2_transparant_wit.png"> </a> -->
    -
    <a class="item" href="./">Home</a>
    <a class="item" href="./wat">Wat?</a>
    <a class="item" href="./stuvers">Stuvers</a>
    <a class="item" href="./raden">Raden</a>
    <a class="item" href="./dossiers">Dossiers</a>
    <a class="item" href="./galerij">Galerij</a>
    <a class="active item" href="./verkiezing">Verkiezing</a>
    <a class="item" href="./contact">Contact</a>
    <div class="right menu">
        <div class="item">
            <a class="ui inverted button" href="./login">Log in</a>
        </div>
    </div>
</div>
<div class="pusher">

    <!-- Standard menu -->
    <div class="ui inverted center aligned segment stdMenu">
        <div>
            <div class="ui large secondary inverted pointing menu">
                <a class="imgLogo" href="./"><img class="ui medium image" src="./img/SR_Logo2_transparant_wit.png"> </a>

                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a class="item" href="./">Home</a>
                <a class="item" href="./wat">Wat?</a>
                <a class="item" href="./stuvers">Stuvers</a>
                <a class="item" href="./raden">Raden</a>
                <a class="item" href="./dossiers">Dossiers</a>
                <a class="item" href="./galerij">Galerij</a>
                <a class="active item" href="./verkiezing">Verkiezing</a>
                <a class="item" href="./contact">Contact</a>
                <div class="right menu">
                    <div class="item">
                        <a class="ui inverted button" href="./login">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="background">
    <div class="row">
        <h1 class="ui huge center aligned header headerTittle">Verkiezingen</h1>
    </div>
    <div class="ui container segment">
        <div class="row">
            <h2 class="ui center aligned header headerTittle2">Zet de stap! Word Studentenvertegenwoordiger!</h2>
        </div>
        <div>
            <p class="pText1">De taak als Studentenvertegenwoordiger is een verantwoordelijkheid die je opneemt naar jou en de studenten van de school toe. Je vertegenwoordigt meer dan 5000 studenten in de verschillende onderwijsraden binnen en buiten onze school.
                Het is een compleet nieuwe ervaring waardoor je de school beter leert kennen en ervaring verwerft in organiseren, in dialoog gaan met andere partijen, adviseren, etc.
                Als Studentenvertegenwoordiger laat je het beleid van de school voelen wat er leeft onder de studenten. Jouw stem heeft zeker belang en kan dingen veranderen, ten goede van de school.</p>
        </div>
    </div>
    <div class="ui container segment extraHe">
        <div class="row">
            <h2 class="ui center aligned header headerTittle2">Vacature van een Studentenvertegenwoordiger</h2>
        </div>
        <div>
            <p class="headerSubTittle">Per Departement zoeken we steeds twee mannen en twee vrouwen.</p>
        </div>
        <h3 class="ui header BulletListHeader">Wie zoeken we?</h3>
        <div class="ui bulleted list BulletList">
            <div class="item">Ben je geëngageerd, en zet je je graag in voor je medestudenten op de school?</div>
            <div class="item">Heb je vernieuwende ideeën over de aanpak in de Erasmushogeschool? Ben je geïnteresseerd in alles binnen den buiten je campus en heb je hier een mening over? Laat je je mening ook horen en ben je niet bang om in discussie te gaan?</div>
            <div class="item">Heb je de nodige skills om dingen te veranderen?</div>
        </div>
        <h3 class="ui header BulletListHeader">Wat wordt er van jou verwacht?</h3>
        <div class="ui bulleted list BulletList">
            <div class="item">Je kan tijd maken voor de vergaderingen en verantwoordelijkheden die bij je mandaat horen.</div>
            <div class="item">Je kan essentiële informatie opslaan en doorspelen naar de Studentenraad.</div>
            <div class="item">Je weet wat er leeft binnen en buiten je campus</div>
        </div>
        <h3 class="ui header BulletListHeader">Voordelen</h3>
        <div class="ui bulleted list BulletList">
            <div class="item">Je geniet van het statuut als Studentenvertegenwoordiger, dus mag je lessen overslaan om belangrijke vergaderingen bij te wonen.</div>
            <div class="item">Je bouwt een interessant netwerk uit, waar je verschillende personen binnen de EhB, VVS of UAB leert kennen.</div>
            <div class="item">Je verandert dingen ten goede voor je medestudenten, appreciatie zal volgen!</div>
            <div class="item">Je stimuleert je ervaringen in verschillende belangrijke competenties zoals organiseren, vergaderen, standpunten realiseren, etc.</div>
        </div>
        <h3 class="ui header BulletListHeader">Ondersteuning</h3>
        <div class="ui bulleted list BulletList">
            <div class="item">Uigaves die relevant zijn met de Studentenraad worden terugbetaald</div>
            <div class="item">Je krijgt de steun van andere studentenvertegenwoordigers om projecten uit te werken</div>
            <div class="item">Je hebt de steun van verschillende beleidsadviseurs en medewerkers binnen de Erasmushogeschool</div>
        </div>
        <p class="pText2">Heb je interesse om studentenvertegenwoordiger te worden? dien dan je kandidatuur in!</p>
        <a class="ui button ButSchrijfIn" href="http://www.verkiezingenehb.be">Schrijf je in!</a>
    </div>
</div>
</body>
</html>