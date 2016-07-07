<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Wat</title>
    <link rel="icon" href="./img/SR_S.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/main2.css">
    <link rel="stylesheet" type="text/css" href="./css/wat.css">
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
    <a class="active item" href="./wat">Wat?</a>
    <a class="item" href="./stuvers">Stuvers</a>
    <a class="item" href="./raden">Raden</a>
    <a class="item" href="./dossiers">Dossiers</a>
    <a class="item" href="./galerij">Galerij</a>
    <a class="item" href="./verkiezing">Verkiezing</a>
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
    <a class="active item" href="./wat">Wat?</a>
    <a class="item" href="./stuvers">Stuvers</a>
    <a class="item" href="./raden">Raden</a>
    <a class="item" href="./dossiers">Dossiers</a>
    <a class="item" href="./galerij">Galerij</a>
    <a class="item" href="./verkiezing">Verkiezing</a>
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
                <a class="active item" href="./wat">Wat?</a>
                <a class="item" href="./stuvers">Stuvers</a>
                <a class="item" href="./raden">Raden</a>
                <a class="item" href="./dossiers">Dossiers</a>
                <a class="item" href="./galerij">Galerij</a>
                <a class="item" href="./verkiezing">Verkiezing</a>
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
    <div>
        <h1 class="ui large header center aligned headerTittle">Wat is een Studentenvertegenwoordiger</h1>
    </div>
    <!--
    <div class="ui container contentInfo">
        <div class="ui very padded segment">
            <h2 class="ui header">De Visie</h2>
            <div>
                <p></p>
            </div>
        </div>
    </div>
    <div class="ui container contentInfo">
        <div class="ui very padded segment">
            <h2 class="ui header">De Missie</h2>
            <div>
                <p></p>
            </div>
        </div>
    </div>
    -->
    <div class="ui container contentInfo">
        <div class="ui very padded segment">
            <p>Als studentenvertegenwoordiger laat je enerzijds het bestuur voelen wat er bij de studenten leeft, maar het biedt jou anderzijds ook de kans om mee richting te geven aan de toekomst van de EhB. Je leert er bovendien onderhandelen, in dialoog gaan en deelnemen aan besluitvorming.

                Wil je een mandaat als studentenvertegenwoordiger, dan stel je je kandidaat voor de Studentenraad. Deze raad behandelt onderwijs- en studentgerichte onderwerpen. Zo komt onder meer de onderwijs- en examenregeling en de evaluatie van docenten aan bod. De Studentenraad kan ook op eigen initiatief adviezen uitbrengen, die dan besproken worden in de andere raden van de hogeschool. De Studentenraad telt 24 leden die jaarlijks verkozen worden (4 studenten per departement / School of Arts).
            </p>
            <p>Daarnaast zetelen studenten ook in:</p>
            <ul>
                <li>De Raad van Toezicht</li>
                <li>De Departementsraad</li>
                <li>STUVO-Raad</li>
                <li>UAB-Studentenraad (Universitaire Associatie Brussel)</li>
            </ul>
            <p>Het is de studentenraad die onder de verkozenen de studentenvertegenwoordigers aanduidt die zullen zetelen in de Raad van Toezicht, de departementsraden, Raden van de Schools of Arts, STUVO-Raad en studentenraad UAB.
                Wil je meer weten over de verschillende raden van de EhB? We vertellen je graag in enkele punten hoe elke raad is samengesteld en wat de bevoegdheden zijn.
            </p>
        </div>
    </div>
    <div>
        <h2 class="ui large header center aligned headerTittle">Citaten</h2>
    </div>

    @foreach($citaten as $citaat)
    <div class="ui container contentInfo">
        <div class="ui very padded segment">
            <div>
                <p class="style">{{$citaat->Text}}</p>
            </div>
            <div class="ui horizontal list right floated">
                <div class="item">
                    <img class="ui mini circular image" src="img/unknown.jpeg">
                    <div class="content">
                        <div class="ui sub header">{{$citaat->Voornaam}} {{$citaat->Familienaam}}</div>
                        <p>{{$citaat->Statuut}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</body>
</html>