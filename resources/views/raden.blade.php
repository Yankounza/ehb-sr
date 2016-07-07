<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Raden</title>
    <link rel="icon" href="./img/SR_S.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/main2.css">
    <link rel="stylesheet" type="text/css" href="./css/raden.css">
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
    <a class="active item" href="./raden">Raden</a>
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
    <a class="active item" href="./">Home</a>
    <a class="item" href="./wat">Wat?</a>
    <a class="item" href="./stuvers">Stuvers</a>
    <a class="active item" href="./raden">Raden</a>
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
                <a class="item" href="./wat">Wat?</a>
                <a class="item" href="./stuvers">Stuvers</a>
                <a class="active item" href="./raden">Raden</a>
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
        <h2 class="ui header beginText">Als studentenvertegenwoordiger kan je zelf kiezen in welke raden je stapt. Je kan verschillende mandaten combineren. Zo is het bijvoorbeeld mogelijk om te zetelen in de Studentenraad, de Raad van Toezicht, de Departementsraad en de Stuvo-Raad.</h2>
    </div>
    <div class="ui container niv1 nivAll">
        <div class="ui stackable one column grid segment">
            <div class="ui stackable two row grid">
                <div class="row">
                    <h1 class="ui center aligned header header1">Op Vlaams niveau</h1>
                </div>
                <div class="row row2">
                    <h2 class="ui center aligned header header2">VVS</h2>
                </div>
            </div>
            <div class="column">
                <div class="">
                    <img class="ui big right floated image img" src="./img/Vlaanderen.gif">
                    <p class="textVVS">De Vlaamse Vereniging van Studenten is de koepelorganisatie van studentenraden van de Vlaamse hogescholen en universiteiten.
                        Ze is de officiële spreekbuis van de student. VVS plaatst het verdedigen van de studentenrechten in een breder kader van democratisering van het onderwijs.</p>
                </div>
            </div>
            <div class="column colPicStu">
                <div class="ui horizontal list">
                    @foreach($raden as $lid)
                        @if($lid->VVS == true)
                            <div class="item itemPicStu">
                                @if($lid->Foto != null)
                                    <img class="ui tiny circular image imgFoto" src="./img/Picture/{{$lid->Foto}}">
                                @else
                                    <img class="ui tiny circular image imgFoto" src="./img/unknown.jpeg">
                                @endif
                                <div class="content">
                                    <div class="ui sub header">{{$lid->Voornaam}} {{$lid->Familienaam}}</div>
                                    @if($lid->Statuut != null)
                                         <p>{{$lid->Statuut}}</p>
                                    @endif
                                </div>
                             </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <div class="ui container nivAll segment">
        <h1 class="ui header header1 row3">Niveau van de associatie</h1>
        <div class="ui stackable three column grid">
            <div>
                <h2 class="ui header bText">De Erasmushogeschool Brussel en de Vrije Universiteit Brussel zijn partners in de Universitaire Associatie Brussel (UAB). De UAB-Studentenraad verbindt de Studentenraad van de EhB met die van de VUB. De raad verdiept zich ook in onderwerpen als verder studenten en heroriënteren</h2>
            </div>
            <div class="column">
                <h2 class="ui header header3">Bast (Brusselse Associatie Studentenraad)</h2>
                <p class="UAB">De UAB-Studentenraad of BAST (Brusselse Associatie Studentenraad) bestaat uit studenten van de partnerinstellingen Vrije Universiteit Brussel en Erasmushogeschool Brussel die rechtstreeks worden verkozen.</p>
            </div>
            <div class="column">
                <img class="ui medium image imgBruss" src="./img/Bruxelles.png">
            </div>
            <div class="column">
                <div class="column">
                    <div class="ui vertical list">
                        @foreach($raden as $lid)
                            @if($lid->BAST == true)
                                <div class="item itemPicStu">
                                    @if($lid->Foto != null)
                                        <img class="ui tiny circular image imgFoto" src="./img/Picture/{{$lid->Foto}}">
                                    @else
                                        <img class="ui tiny circular image imgFoto" src="./img/unknown.jpeg">
                                    @endif
                                    <div class="content">
                                        <div class="ui sub header">{{$lid->Voornaam}} {{$lid->Familienaam}}</div>
                                        @if($lid->Statuut != null)
                                            <p>{{$lid->Statuut}}</p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <div class="ui stackable two column grid">
            <div class="column">
                <div>
                    <h2 class="ui header header3">UAB raad van bestuur</h2>
                    <p class="UAB">De Vrije Universiteit Brussel en Erasmushogeschool Brussel typeren zich als kwaliteitsvolle, maatschappelijk geëngageerde, internationaal georiënteerde en toekomstgerichte hogeronderwijsinstellingen.
                        De Universitaire Associatie Brussel ondersteunt haar partners doorheen heel haar beleid en draagt hun waarden als pluraliteit, openheid en respect hoog in het vaandel</p>
                </div>
            </div>
            <div class="column">
                <div class="column">
                    <div class="ui horizontal list">
                        @foreach($raden as $lid)
                            @if($lid->UAB == true)
                                <div class="item itemPicStu">
                                    @if($lid->Foto != null)
                                        <img class="ui tiny circular image imgFoto" src="./img/Picture/{{$lid->Foto}}">
                                    @else
                                        <img class="ui tiny circular image imgFoto" src="./img/unknown.jpeg">
                                    @endif
                                    <div class="content">
                                        <div class="ui sub header">{{$lid->Voornaam}} {{$lid->Familienaam}}</div>
                                        @if($lid->Statuut != null)
                                            <p>{{$lid->Statuut}}</p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui container nivAll segment">
        <h1 class="ui header header1 row3">Niveau van de hogeschool</h1>
        <div class="ui stackable two column grid">
            <div class="column">
                <h2 class="ui header header3">Studentenraad</h2>
                <p class="UAB">De Studentenraad behandelt onderwijs- en studentengerichte onderwerpen. Kan op eigen initiatief adviezen uitbrengen, die dan besproken worden in de andere raden van de school.</p>
            </div>
            <div class="column">
                <img class="ui medium image imgBruss colsch" src="./img/ehb_logo.png">
            </div>
        </div>
        <div class="ui stackable two column grid">
            <div class="column">
                <div>
                    <h2 class="ui header header3">Stuvo-raad</h2>
                    <p class="UAB">De leden van de Stuvo-raad bepalen mee het beleid van de Studentenvoorzieningen Erasmushogeschool Brussel. Je beslist mee over het gebruik van de middelen voor voeding, huisvesting, sociale, medische en psychologische dienstverlening, vervoer en studentenwerking.</p>
                </div>
            </div>
            <div class="column">
                <div class="column colsch">
                    <div class="ui horizontal list">
                        @foreach($raden as $lid)
                            @if($lid->STUVO == true)
                                <div class="item itemPicStu">
                                    @if($lid->Foto != null)
                                        <img class="ui tiny circular image imgFoto" src="./img/Picture/{{$lid->Foto}}">
                                    @else
                                        <img class="ui tiny circular image imgFoto" src="./img/unknown.jpeg">
                                    @endif
                                    <div class="content">
                                        <div class="ui sub header">{{$lid->Voornaam}} {{$lid->Familienaam}}</div>
                                        @if($lid->Statuut != null)
                                            <p>{{$lid->Statuut}}</p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="ui stackable two column grid">
            <div class="column">
                <div>
                    <h2 class="ui header header3">Raad van toezicht</h2>
                    <p class="UAB">Keurt onder meer de missie, de strategische doelstellingen, het strategisch meerjarenplan en de begroting goed. Bepaalt ook mee het pedagogisch project van de student.</p>
                </div>
            </div>
            <div class="column">
                <div class="column colsch">
                    <div class="ui horizontal list">
                        @foreach($raden as $lid)
                            @if($lid->RvT == true)
                                <div class="item itemPicStu">
                                    @if($lid->Foto != null)
                                        <img class="ui tiny circular image imgFoto" src="./img/Picture/{{$lid->Foto}}">
                                    @else
                                        <img class="ui tiny circular image imgFoto" src="./img/unknown.jpeg">
                                    @endif
                                    <div class="content">
                                        <div class="ui sub header">{{$lid->Voornaam}} {{$lid->Familienaam}}</div>
                                        @if($lid->Statuut != null)
                                            <p>{{$lid->Statuut}}</p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui container nivAll segment">
        <h1 class="ui header header1 rowExtraLong">Niveau van het departement / School of Arts</h1>
        <div class="ui stackable two column grid">
            <div class="column">
                <h2 class="ui header header3">Departementsraad</h2>
            </div>
            <div class="column">
                <h2 class="ui header header3">Raad van de Schools of Arts</h2>
                <div class="ui horizontal list">
                    <!--@foreach($raden as $lid)
                        @if($lid->RSchoolOfArts == true)
                            <div class="item itemPicStu">
                                @if($lid->Foto != null)
                                    <img class="ui tiny circular image imgFoto" src="./img/Picture/{{$lid->Foto}}">
                                @else
                                    <img class="ui tiny circular image imgFoto" src="./img/unknown.jpeg">
                                @endif
                                <div class="content">
                                    <div class="ui sub header">{{$lid->Voornaam}} {{$lid->Familienaam}}</div>
                                    @if($lid->Statuut != null)
                                        <p>{{$lid->Statuut}}</p>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                            -->
                </div>
            </div>
        </div>
        <p class="rowExtraLong">Deze raad neemt ondermeer beslissingen over de interne organisatie (inclusief de aanwending van de personele en materiële middelen</p>
    </div>
    <div class="ui container nivAll segment">
        <div class="ui stackable one column grid">
            <div class="column">
                <h2 class="ui centered header header3">Niveau van de opleiding</h2>
                <p class="UAB oplcom">De opleidingscommissie is een groep samengesteld uit studenten en onderwijzend personeel. Zij overzien de kwaliteit van de opleiding vanuit twee perspectieven: de docent en de student. De docenten weten wat er bij hen intern aan de gang is en de student bij hen intern.</p>
            </div>
        </div>
       <!-- <button class="ui button ButVerz">Leden OC</button> -->
    </div>
</div>
</body>
</html>