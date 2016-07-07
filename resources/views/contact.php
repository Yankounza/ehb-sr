<!DOCTYPE html>
<html lang="nl" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="./img/SR_S.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/main2.css">
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <script src="jq/JQuery.min.js"></script>
    <script src="jq/visibility.js"></script>
    <script src="jq/sidebar.js"></script>
    <script src="jq/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

            })
        ;
    </script>
</head>
<body>

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
    <a class="item" href="./verkiezing">Verkiezing</a>
    <a class="active item" href="./contact">Contact</a>
    <div class="right menu">
        <div class="item">
            <a class="ui inverted button" href="./login">Log in</a>
        </div>
    </div>
</div>
<div class="pusher">

    <!-- Standard menu -->
    <div class="ui inverted center aligned segment">
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
                <a class="item" href="./verkiezing">Verkiezing</a>
                <a class="active item" href="./contact">Contact</a>
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
        <h1 class="ui huge center aligned header headerTittle">Contact</h1>
    </div>
    <div class="ui container segment">
        <div>
            <p class="pText">-	Je kunt met alle vragen steeds terecht bij de studentenraad. Heb je een vraag, een idee, …. Contacteer ons dan!</p>
        </div>
    </div>
    <div class="ui container segment extraHe">
        <h2 class="ui center aligned header headerTittle2">Contact Formulier</h2>
        <form method="post" action="algContact">
            <div class="ui form success">
                <div class="fields">
                    <div class="six wide field label1">
                        <label class="label" for="firstName">First Name</label>
                        <input type="text" name="voornaam" placeholder="First Name" id="firstName" value="">

                    </div>
                    <div class="six wide field label2">
                        <label class="label" for="lastName">Last Name</label>
                        <input type="text" name="familienaam" placeholder="Last Name" id="lastName" value="">

                    </div>
                </div>
                <div class="six wide field label1">
                    <label class="label" for="email">E-mail</label>
                    <input type="email" name="email" placeholder="example@student.ehb.be" id="email" value="" >

                </div>
                <div class="fields">
                    <div class="six wide field label1">
                        <label class="label" for="campus">Campus</label>
                        <select class="ui search dropdown" id="departement" name="departement">
                            <option value="">Select departement</option>
                            <option value="DT">Design & Technologie</option>
                            <option value="MMM">Management, media & Maatschappij</option>
                            <option value="EDU">Onderwijs & Pedagogie</option>
                            <option value="GL">Gezondheidszorg & Landsschapsarchitectuur</option>
                            <option value="RITCS">RITCS</option>
                            <option value="KCB">Koninklijk Conservatorium Brussel</option>
                        </select>

                    </div>
                    <div class="six wide field label2">
                        <label class="label" for="type">Type</label>
                        <select class="ui search dropdown" id="type" name="type">
                            <option value="">Select Type</option>
                            <option value="vraag">Vraag</option>
                            <option value="probleem">Probleem</option>
                            <option value="klacht">Klacht</option>
                            <option value="idee">Idee</option>
                            <option value="OC">Opleiding</option>
                        </select>

                    </div>
                </div>
                <div class="field vraag">
                    <label class="label" for="message">Vraag</label>
                    <textarea rows="10" id="message" name="message"></textarea>

                </div>
            </div>
           <!--
                <div class="ui success message">
                    <div class="header">Form completed</div>
                    <p>Het bericht werd goed verstuurd.</p>
                </div>
            -->
            <div>
                <!--  <p> *****  CAPTCHA ****</p> -->
            </div>
            <button class="ui button ButVerz" type="submit" name="submit" value="Submit">Verzend</button>
        </form>
    </div>

</body>
</html>