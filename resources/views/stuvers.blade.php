<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Stuvers</title>
    <link rel="icon" href="./img/SR_S.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/main2.css">
    <link rel="stylesheet" type="text/css" href="./css/stuvers.css">
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
    <a class="active item" href="./stuvers">Stuvers</a>
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
    <a class="item" href="./wat">Wat?</a>
    <a class="active item" href="./stuvers">Stuvers</a>
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
                <a class="item" href="./wat">Wat?</a>
                <a class="active item" href="./stuvers">Stuvers</a>
                <a class="item" href="./raden">Raden</a>
                <a class="item" href="./dossiers">Dossiers</a>
                <a class="item" href="./galerij">Galerij</a>
                <a class="item" href="./verkiezing">Verkiezing</a>
                <a class="item" href="./contact">Contact</a>
                <div class="right menu">
                    <div class="item">
                        <a class="ui inverted button" href="./Login">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="background">
    <div class="row">
        <h1 class="ui huge center aligned header headerTittle">Studentenvertegenwoordigers</h1>
    </div>
    <div class="ui container segment boxStu">
        <div class="row">
            <h1 class="ui center aligned header headerTittle2">Design & Technologie</h1>
        </div>
        <div class="ui horizontal">
            <img class="ui small circular image headerIMG" src="./img/Campus/Campus_DT.jpg">
        </div>
        <div class="ui stackable two column grid divided">

            @foreach($leden as $lidSR)
                @if($lidSR->Campus == 'DT')
                     <div class="column">
                        <div class="item imgRight">
                            @if($lidSR->Foto != null)
                                <img class="ui tiny circular image imgFoto" src="./img/Picture/{{$lidSR->Foto}}">
                                @else
                                <img class="ui tiny circular image imgFoto" src="./img/unknown.jpeg">
                            @endif
                            <div class="content infoStuv">
                                <div class="ui sub header">{{$lidSR->Voornaam}} {{$lidSR->Familienaam}}</div>
                                @if($lidSR->Statuut != null)
                                    <p>{{$lidSR->Statuut}}</p>
                                @endif
                            </div>
                        </div>
                        <p class="quote">"{{$lidSR->Quote}}"</p>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
    <div class="ui container segment boxStuExtra">
        <div class="row">
            <h1 class="ui center aligned header headerTittle2">Management, media & maatschappij</h1>
        </div>
        <div class="ui horizontal">
            <img class="ui small circular image headerIMG" src="./img/Campus/Campus_Dansaert.jpg">
        </div>
        <div class="ui stackable four column grid divided">

            @foreach($leden as $lidSR)
                @if($lidSR->Campus == 'MMM')
                    <div class="column">
                        <div class="item imgRight">
                            @if($lidSR->Foto != null)
                                <img class="ui tiny circular image imgFoto" src="./img/Picture/{{$lidSR->Foto}}">
                            @else
                                <img class="ui tiny circular image imgFoto" src="./img/unknown.jpeg">
                            @endif
                            <div class="content">
                                <div class="ui sub header infoStuv">{{$lidSR->Voornaam}} {{$lidSR->Familienaam}}</div>
                                @if($lidSR->Statuut != null)
                                    <p>{{$lidSR->Statuut}}</p>
                                @endif
                            </div>
                        </div>
                        <p class="quote">"{{$lidSR->Quote}}"</p>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
    <div class="ui container segment boxStuExtra">
        <div class="row">
            <h1 class="ui center aligned header headerTittle2">Gezondheidszorg & Landsschapsarchitectuur</h1>
        </div>
        <div class="ui horizontal">
            <img class="ui small circular image headerIMG2" src="./img/Campus/Campus_Jette.jpg">
        </div>
        <div class="ui stackable four column grid divided">

            @foreach($leden as $lidSR)
                @if($lidSR->Campus == 'GL')
                    <div class="column">
                        <div class="item imgRight">
                            @if($lidSR->Foto != null)
                                <img class="ui tiny circular image" src="./img/Picture/{{$lidSR->Foto}}">
                            @else
                                <img class="ui tiny circular image" src="./img/unknown.jpeg">
                            @endif
                            <div class="content">
                                <div class="ui sub header infoStuv">{{$lidSR->Voornaam}} {{$lidSR->Familienaam}}</div>
                                @if($lidSR->Statuut != null)
                                    <p>{{$lidSR->Statuut}}</p>
                                @endif
                            </div>
                        </div>
                        <p class="quote">"{{$lidSR->Quote}}"</p>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
    <div class="ui container segment boxStuExtra">
        <div class="row">
            <h1 class="ui center aligned header headerTittle2">Onderwijs & Pedagogie</h1>
        </div>
        <div class="ui horizontal">
            <img class="ui small circular image headerIMG2" src="./img/Campus/Campus_Jette.jpg">
        </div>
        <div class="ui stackable four column grid divided">

            @foreach($leden as $lidSR)
                @if($lidSR->Campus == 'EDU')
                    <div class="column">
                        <div class="item imgRight">
                            @if($lidSR->Foto != null)
                                <img class="ui tiny circular image" src="./img/Picture/{{$lidSR->Foto}}">
                            @else
                                <img class="ui tiny circular image" src="./img/unknown.jpeg">
                            @endif
                            <div class="content">
                                <div class="ui sub header infoStuv">{{$lidSR->Voornaam}} {{$lidSR->Familienaam}}</div>
                                @if($lidSR->Statuut != null)
                                    <p>{{$lidSR->Statuut}}</p>
                                @endif
                            </div>
                        </div>
                        <p class="quote">"{{$lidSR->Quote}}"</p>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
    <div class="ui container segment boxStuExtra">
        <div class="row">
            <h1 class="ui center aligned header headerTittle2">Koninklijk Conservatorium Brussel</h1>
        </div>
        <div class="ui horizontal">
            <img class="ui small circular image headerIMG2" src="./img/Campus/Campus_KCB.jpg">
        </div>
        <div class="ui stackable four column grid divided">

            @foreach($leden as $lidSR)
                @if($lidSR->Campus == 'KCB')
                    <div class="column">
                        <div class="item imgRight">
                            @if($lidSR->Foto != null)
                                <img class="ui tiny circular image" src="./img/Picture/{{$lidSR->Foto}}">
                            @else
                                <img class="ui tiny circular image" src="./img/unknown.jpeg">
                            @endif
                            <div class="content">
                                <div class="ui sub header infoStuv">{{$lidSR->Voornaam}} {{$lidSR->Familienaam}}</div>
                                @if($lidSR->Statuut != null)
                                    <p>{{$lidSR->Statuut}}</p>
                                @endif
                            </div>
                        </div>
                        <p class="quote">"{{$lidSR->Quote}}"</p>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
    <div class="ui container segment boxStuExtra">
        <div class="row">
            <h1 class="ui center aligned header headerTittle2">RITCS</h1>
        </div>
        <div class="ui horizontal">
            <img class="ui small circular image headerIMG2" src="./img/Campus/Campus_Ritcs.jpg">
        </div>
        <div class="ui stackable four column grid divided">

            @foreach($leden as $lidSR)
                @if($lidSR->Campus == 'RITCS')
                    <div class="column">
                        <div class="item imgRight">
                            @if($lidSR->Foto != null)
                                <img class="ui tiny circular image" src="./img/Picture/{{$lidSR->Foto}}">
                            @else
                                <img class="ui tiny circular image" src="./img/unknown.jpeg">
                            @endif
                            <div class="content">
                                <div class="ui sub header infoStuv">{{$lidSR->Voornaam}} {{$lidSR->Familienaam}}</div>
                                @if($lidSR->Statuut != null)
                                    <p>{{$lidSR->Statuut}}</p>
                                @endif
                            </div>
                        </div>
                        <p class="quote">"{{$lidSR->Quote}}"</p>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</div>
</body>
</html>