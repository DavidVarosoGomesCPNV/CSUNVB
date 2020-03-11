<?php
ob_start();
$title = "CSU-NVB - Accueil";
?>
<head>
    <style>

        /* Included color classes..
           .red
           .blue
           .yellow
       */

        /*@import url(https://fonts.googleapis.com/css?family=Raleway:400,800);*/
        figure.snip1104 {
            font-family: 'Raleway', Arial, sans-serif;
            position: relative;
            overflow: hidden;
            margin: 10px;
            min-width: 220px;
            max-width: 310px;
            max-height: 220px;
            /*min-height: 200px;*/
            width: 100%;
            background: #000000;
            color: #ffffff;
            text-align: center;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        }

        figure.snip1104 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            font-size: 23px;
        }

        figure.snip1104 img {
            max-width: 100%;
            position: relative;
            opacity: 0.4;
        }

        figure.snip1104 figcaption {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        figure.snip1104 h2 {
            position: absolute;
            left: 40px;
            right: 40px;
            display: inline-block;
            background: #000000;
            -webkit-transform: skew(-10deg) rotate(-10deg) translate(0, -50%);
            transform: skew(-10deg) rotate(-10deg) translate(0, -50%);
            padding: 12px 5px;
            margin: 0;
            top: 50%;
            text-transform: uppercase;
            font-weight: 400;
        }

        figure.snip1104 h2 span {
            font-weight: 800;
        }

        figure.snip1104:before {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            content: '';
            background: #ffffff;
            position: absolute;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transform: rotate(110deg) translateY(-50%);
            transform: rotate(110deg) translateY(-50%);
        }

        figure.snip1104 a {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: absolute;
            z-index: 1;
        }

        figure.snip1104.blue {
            background: #123851;
        }

        figure.snip1104.blue h2 {
            background: #0a212f;
        }

        figure.snip1104.red {
            background: #581a14;
        }

        figure.snip1104.red h2 {
            background: #36100c;
        }

        figure.snip1104.yellow {
            background: #7f5006;
        }

        figure.snip1104.yellow h2 {
            background: #583804;
        }

        figure.snip1104:hover img,
        figure.snip1104.hover img {
            opacity: 1;
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        figure.snip1104:hover h2,
        figure.snip1104.hover h2 {
            -webkit-transform: skew(-10deg) rotate(-10deg) translate(-150%, -50%);
            transform: skew(-10deg) rotate(-10deg) translate(-150%, -50%);
        }

        figure.snip1104:hover:before,
        figure.snip1104.hover:before {
            -webkit-transform: rotate(110deg) translateY(-150%);
            transform: rotate(110deg) translateY(-150%);
        }


        /* Demo purposes only */
        html {
            height: 100%;
        }

        body {
            background-color: #212121;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: wrap;
            margin: 0;
            height: 100%;
        }

        /*-------------------------------------------------------------------*/

        body {
            background: black;
        }

        #load {
            position: relative;
            width: 600px;
            height: 36px;
            left: 45%;
            top: 90%;
            margin-left: -300px;
            overflow: visible;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
        }

        #load div {
            position: absolute;
            width: 20px;
            height: 36px;
            opacity: 0;
            font-family: Helvetica, Arial, sans-serif;
            animation: move 2s linear infinite;
            -o-animation: move 2s linear infinite;
            -moz-animation: move 2s linear infinite;
            -webkit-animation: move 2s linear infinite;
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            color: #35C4F0;
        }

        #load div:nth-child(2) {
            animation-delay: 0.2s;
            -o-animation-delay: 0.2s;
            -moz-animation-delay: 0.2s;
            -webkit-animation-delay: 0.2s;
        }

        #load div:nth-child(3) {
            animation-delay: 0.4s;
            -o-animation-delay: 0.4s;
            -webkit-animation-delay: 0.4s;
        }

        #load div:nth-child(4) {
            animation-delay: 0.6s;
            -o-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            -webkit-animation-delay: 0.6s;
        }

        #load div:nth-child(5) {
            animation-delay: 0.8s;
            -o-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            -webkit-animation-delay: 0.8s;
        }

        #load div:nth-child(6) {
            animation-delay: 1s;
            -o-animation-delay: 1s;
            -moz-animation-delay: 1s;
            -webkit-animation-delay: 1s;
        }

        #load div:nth-child(7) {
            animation-delay: 1.2s;
            -o-animation-delay: 1.2s;
            -moz-animation-delay: 1.2s;
            -webkit-animation-delay: 1.2s;
        }

        @keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }
            35% {
                left: 41%;
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            65% {
                left: 59%;
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                left: 100%;
                -moz-transform: rotate(-180deg);
                -webkit-transform: rotate(-180deg);
                -o-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-moz-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }
            35% {
                left: 41%;
                -moz-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            65% {
                left: 59%;
                -moz-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                left: 100%;
                -moz-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }
            35% {
                left: 41%;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            65% {
                left: 59%;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                left: 100%;
                -webkit-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-o-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }
            35% {
                left: 41%;
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            65% {
                left: 59%;
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
            100% {
                left: 100%;
                -o-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        /*
        -----------------------------------------------------------------------------------------------------
        */


    </style>
    <link href="content/scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="content/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/etiquete.css" type="text/css">
    <title></title>
</head>
<body>

<div class="row">
    <div class="col-sm-6">
        <figure class="snip1104 red">
            <img src="/assets/images/administration.PNG" alt="sample33"/>
            <figcaption>
                <h2>Adminis<span>tration</span></h2>
            </figcaption>
            <a href="?action=admin"></a>
        </figure>
    </div>

    <div class="col-sm-6">
        <figure class="snip1104 blue"><img src="/assets/images/remise_garde.jpeg" alt="sample34"/>
            <figcaption>
                <h2>Remise d<span>e garde</span></h2>
            </figcaption>
            <a href="?action=shiftend"></a>
        </figure>
    </div>
</div>


<div class="row">
    <div class="col-sm-6">
        <figure class="snip1104"><img src="/assets/images/tache_hebdo.jpg" style="height: 220px" alt="sample35"/>
            <figcaption>
                <h2>Tâches <span> hebdomadaires</span></h2>
            </figcaption>
            <a href="?action=todolist"> </a>
        </figure>
    </div>

    <div class="col-sm-6">
        <figure class="snip1104 red">
            <img src="/assets/images/stupefiant.jpg" style="height: " alt="sample33"/>
            <figcaption>
                <h2>Stupé<span>fiants</span></h2>
            </figcaption>
            <a href="?action=drugs"></a>
        </figure>
    </div>
</div>
</div>


<!--
<div id="load">
    <div>G</div>
    <div>N</div>
    <div>I</div>
    <div>D</div>
    <div>A</div>
    <div>O</div>
    <div>L</div>
</div>
-->

</body>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
