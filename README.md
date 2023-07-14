<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Dark Phoenix official website!!
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        body {
            font-size: 16px;
            color: #fff;
            background-color: gray;
        }
        #header-nav {
            background-color: black;
            border-radius: 0;
            border: 0;
            padding-bottom: 30px;
        }
        #logo-img{
            width: 120px;
            height: 120px;
            margin: 10px 10px 10px 0px;
            border: solid white ;
            border-radius: 40px;
            clear: right;
        }
        .navbar-brand{
            padding-top: 25px;
        }
        .navbar-brand h1{
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: whitesmoke;
            font-size: 2em;
            text-shadow: 1px 1px 1px white;
            text-transform: uppercase;
            margin-top: 0px;
            margin-left: 10px;
            margin-bottom: 0px;
        }
        .navbar-brand a:hover, .navbar-brand a:focus{
            text-decoration: chartreuse;
        }
        .navbar-brand p{
            color: aqua;
            text-transform: capitalize;
            font-size: 0.8em;
            margin-top: 10px;
        }
        .navbar-brand p span {
            vertical-align: middle;
            margin-left: 10px;
        }
        #img{
            height: 20px;
            width: 20px;
            margin-left: 20px;
        }
        #nav-list{
            margin-top: 10px;
        }
        #nav-list a{
            color: white;
            text-align: center;
        }
        #nav-list a:hover{
            background: red;
            border-radius: 20px;
        }
        #active{
            background: red;
            border-radius: 20px;
        }
        #nav-list a span{
            font-size: 0.8em;
        }
        #phone{
            margin-top: 5px;
        }
        #phone a {
            text-align: right;
            padding-bottom: 10px;
        }
        #phone div{
            text-align: right;
            padding-right: 10px;
        }
        .navbar-header button.navbar-toggle, .navbar-header .icon-bar{
            border: 2px solid white;
        }
        .navbar-header button.navbar-toggle{
            clear: both;
            margin-top: -30px;
        }
        .panel-footer{
            margin-top: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: black;
        }
        .panel-footer div.row{
            margin-bottom: 20px;
        }
        #hours, #address{
            line-height: 2;
        }
        #hours>span, #address>span{
            font-size: 1.2em;
        }
        #testimonials{
            font-style: italic;
        }
        #testimonials p:nth-child(2){
            margin-top: 20px;
        }
        @media (min-width: 1200px) {
            .container .jumbotron {
                height: 675px;
                background-image: url("https://in.portal-pokemon.com/movie/series/m10/img/og-image.png");
                box-shadow: 0 0 50px #fff;
                border: 2px solid #fff;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px){
            #logo-img{
                width: 80px;
                height: 80px;
                margin: 5px 5px 5px 0;
            }
            .container .jumbotron {
                background-image: url("https://in.portal-pokemon.com/movie/series/m10/img/og-image.png");
                height: 558px;
                box-shadow: 0 0 50px #fff;
                border: 2px solid #fff;
            }
        }
        @media (min-width:768px) and (max-width:991px){
            .container .jumbotron {
                background-image: url("https://in.portal-pokemon.com/movie/series/m10/img/og-image.png");
                height: 432px;
                box-shadow: 0 0 50px #fff;
                border: 2px solid #fff;
            }  
        }
        @media (max-width: 767px) {
            .navbar-brand{
                padding-top: 10px;
                height: 60px;
            }
            .navbar-brand h1{
                padding-top: 10px;
                font-size: 5vw;
            }
            .navbar-brand p{
                font-size: 0.6em;
                margin-top: 12px;
            }
            .navbar-brand p img{
                height: 10px;
            }
            #menu-tile, #special-tile {
                width: 360px;
                margin: 0 auto 10px;
            }
            .panel-footer section {
                margin-bottom: 20px;
                text-align: center;
            }
            .panel-footer section hr{
                width: 50%;
            }
        }
        @media (max-width: 479px) {
            #menu-tile, #special-tile{
                width: 280px;
                margin: 0 auto 10px;
            }
            .navbar-brand h1{
                padding-top: 2px;
                font-size: 6vw;
            }
        }
        #collapsable-nav a{
            font-size: 1.2em;
        }
        #collapsable-nav a span{
            font-size: 1em;
            margin-right: 5px;
        }
        #call-btn >a{
            font-size: 1.5em;
            display: block;
            margin: 0 20px;
            padding: 8px;
            border: 2px solid white;
            background-color: gray;
            color: black;
            font-weight: bold;
        }
        #xs-deliver{
            margin-top: 5px;
            font-size: .5em;
            text-transform: uppercase;
        }
        .container .jumbotron{
            margin-top: 30px;
            padding: 0;
            box-shadow: 0 0 50px white;
            border: 2px solid white;
        }
        #menu-tile, #special-tile, #map-tile{
            height: 250px;
            width: 100%;
            margin-bottom: 10px;
            position: relative;
            border: 2px solid whitesmoke;
            border-radius: 10px;
            overflow: hidden;
        }
        #menu-tile:hover, #special-tile:hover, #map-tile:hover{
            box-shadow: 0 1px 5px 1px white;
        }
        #menu-tile{
            background: url("https://rukminim1.flixcart.com/image/850/1000/khnqqa80/art-craft-kit/j/h/7/darkrai-gx-88-147-ultra-rare-sun-moon-burning-shadows-pokemon-original-imafxmdakf4sdzza.jpeg?q=20") no-repeat;
            background-position: center;
            background-size: 360px 300px;   
        }
        #special-tile{ 
            background: url("https://pbs.twimg.com/media/Ea6QxsHUMAAlZpF.jpg:large") no-repeat;
            background-size: 360px;
            background-position: center;
        }
        #menu-tile span, #special-tile span, #map-tile span {
            opacity: 0.8;
            position: absolute;
            bottom: 0;
            right: 0;
            text-align: center;
            font-size: 1.5em;
            color: black;
            text-transform: uppercase;
            width: 100%;
            font-weight: bold;
            background-color: gray
        }
    </style>
    <body>
        <header>
            <nav id="header-nav" class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a href="index.html" class="pull-left visible-md visible-lg">
                            <img id="logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu42l5H3aRccBOfs-_rPfQQK-flBL6li_96A&usqp=CAU">
                        </a>
                        <div class="navbar-brand">
                            <a>
                                <h1>
                                    darkrai: Mythical pokemon
                                </h1>
                            </a>
                            <p>
                                <img id="img" src="https://w7.pngwing.com/pngs/875/775/png-transparent-darkrai-cresselia-pokemon-celebi-pokemon-heart-pokemon-art.png" alt="certified">
                                <span>Dark-phoenix cerified</span>
                            </p>
                        </div>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="collapsable-nav" class="collapse navbar-collapse">
                        <ul id="nav-list" class="nav navbar-nav navbar-right">
                            <li class="visible-xs" id="active">
                                <a href="dpadvanced.html">
                                    <span class="glyphicon glyphicon-home">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="menu.html">
                                    <span class="glyphicon glyphicon-globe"></span><br class="hidden-xs">About
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-gift"></span><br class="hidden-xs">Free gifts
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-user"></span><br class="hidden-xs">User
                                </a>
                            </li>
                            <li id="phone" >
                                <a href="9336954109">
                                    <span>9336954109</span>
                                </a>
                                <div>Enquiry off</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="call-btn" class="visible-xs">
            <a class="btn" href="tel:9336954109">
                <span class="glyphicon glyphicon-earphone"></span>
                9336954109
            </a>
        </div>
        <div id="xs-deliever" class="text-center visible-xs">*Phone number</div>
        <div id="main-content" class="container">
            <div class="jumbotron">
                <img src="https://in.portal-pokemon.com/movie/series/m10/img/og-image.png" alt="in-picture" class="img-responsive visible-xs">
            </div>
            <div class="row" id="home-tile">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="menu.html" >
                        <div id="menu-tile"><span>Description</span></div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="singl.html">
                        <div id="special-tile"><span>Moveset</span></div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <a href="https://goo.gl/maps/6X5XukNfUZjFYLi87" target="_blank">
                        <div id="map-tile">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d221469.81322189016!2d76.98972526521256!3d28.744996333999033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1siitd%20delhi!5e0!3m2!1sen!2sin!4v1689161001934!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><span>Hoeen-region</span></div>
                    </a>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="container">
                <div class="row">
                    <section class="col-sm-4" id="hours">
                        <span>Hours:</span><br>
                        Mon-Fri:10am - 5pm<br>
                        Sat-Sun: closed<br>
                        <hr class="visible-xs">
                    </section>
                    <section id="address" class="col-sm-4">
                        <span>Address:</span><br>
                        IIT Delhi<br>
                        New Delhi,India
                        <hr class="visible-xs">
                    </section>
                    <section class="col-sm-4" id="testimonials">
                        <p>"I am thankful to all who are visiting my site please share"</p>
                        <p>"like and follow my web page"</p>
                    </section>
                </div>
                <div class="text-center">&copy; Copyright DarkRai1786@gmail.com</div>
            </div>
        </footer>
    </body>
</html>

