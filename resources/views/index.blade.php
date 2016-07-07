<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta property="og:title" content="Studentenraad" />
    <meta property="og:url" content="http://www.studentenraad.ehb.be" />
    <meta property="og:image" content="http://www.vvs.ac/sites/default/files/ehb2009_logo.png_0.jpg">
    <title>Home</title>
    <link rel="icon" href="./img/SR_S.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/main2.css">
    <link rel="stylesheet" type="text/css" href="./css/home.css">

    <script src="jq/JQuery.min.js"></script>
    <script src="jq/visibility.js"></script>
    <script src="jq/sidebar.js"></script>
    <script src="jq/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.firstImage')
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
                <a class="active item" href="./">Home</a>
                <a class="item" href="./wat">Wat?</a>
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
                <a class="active item" href="./">Home</a>
                <a class="item" href="./wat">Wat?</a>
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
    <div>
        <div class="ui inverted center aligned segment">
            <div>
                <div class="ui large secondary inverted pointing menu">
                    <a class="imgLogo" href="./"><img class="ui medium image" src="./img/SR_Logo2_transparant_wit.png"> </a>

                    <a class="toc item">
                        <i class="sidebar icon"></i>
                    </a>
                    <a class="active item" href="./">Home</a>
                    <a class="item" href="./wat">Wat?</a>
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

    <div class="firstImage">
        <div>
            <h1 class="ui header welkomText">Welkom<br>bij de<br>Studentenraad</h1>
        </div>
        <i class="dropdown icon iconDrop"></i>
    </div>
    <div>
        <div class="ui two column grid mainGrid">

            <div class="ui segment column firstColumnEvent">
                <img src="./img/work-in-progress.png" class="work">
                <!--
                <div>
                    <h3 class="ui header titleEvent">EVENT LIST</h3>
                </div>
                <div class="ui tree column grid">
                    <div class="row rowFirstColomn">
                        <div class="column colDate">10</div>
                        <div class="column colMonth">Maart</div>
                        <div class="column colText">!! Nog niet van Toepassing !!</div>
                    </div>
                    <div class="row rowFirstColomn">
                        <div class="column colDate">10</div>
                        <div class="column colMonth">April</div>
                        <div class="column colText">!! Nog niet van Toepassing !!</div>
                    </div>
                    <div class="row rowFirstColomn">
                        <div class="column colDate">50</div>
                        <div class="column colMonth">Mei</div>
                        <div class="column colText">!! Nog niet van Toepassing !!</div>
                    </div>
                    <div class="row rowFirstColomn">
                        <div class="column colDate">30</div>
                        <div class="column colMonth">Mei</div>
                        <div class="column colText">!! Nog niet van Toepassing !!</div>
                    </div>
                    <div class="row rowFirstColomn">
                        <div class="column colDate">3</div>
                        <div class="column colMonth">Juni</div>
                        <div class="column colText">!! Nog niet van Toepassing !!</div>
                    </div>
                </div>
                -->
            </div>
            <div class="ui segment column secondColomnEvent">
                <img src="./img/work-in-progress.png" class="work">
                <!--
                <div>
                    <h3 class="ui header titleEvent">TOPIC LIST</h3>
                </div>
                <div class="ui five row grid gridSecondEvent">
                    <div class="row">
                        <div class="ui two row grid ">
                            <div class="row rowTittleTopic">Titel Topic</div>
                            <div class="row rowCommentsTopic">Comments</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ui two row grid">
                            <div class="row rowTittleTopic">Titel Topic</div>
                            <div class="row rowCommentsTopic">Comments</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ui two row grid">
                            <div class="row rowTittleTopic">Titel Topic</div>
                            <div class="row rowCommentsTopic">Comments</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ui two row grid">
                            <div class="row rowTittleTopic">Titel Topic</div>
                            <div class="row rowCommentsTopic">Comments</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ui two row grid">
                            <div class="row rowTittleTopic">Titel Topic</div>
                            <div class="row rowCommentsTopic">Comments</div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
    <div class="ui container segment StuverDag">
        <div>
            <h2 class="ui header titleEvent">Stuver van de dag</h2>
        </div>
        <div class="ui two column grid">
            <div class="column colQuote">
                <p class="textQuote">{{$lid->Quote}}</p>
            </div>
            <div class="column colStuver">
                <div class="ui horizontal list">
                    <div class="item">
                        @if($lid->Foto != null)
                            <img class="ui mini circular image" src="./img/Picture/{{$lid->Foto}}">
                        @else
                            <img class="ui mini circular image" src="./img/unknown.jpeg">
                        @endif
                        <div class="content">
                            <div class="ui sub header">{{$lid->Voornaam}} {{$lid->Familienaam}}</div>
                            <p>{{$lid->Statuut}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>