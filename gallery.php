<!DOCTYPE html>
<html lang="en">
<head>
    <title>EverTap Official</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="./css/lightbox.css" rel="stylesheet"/>

    <style>
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        .row.content {height: 770px}

        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/logo2.png" width="34" height="34"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="#">Gallery</a></li>
                <li><a href="links.php">Links</a></li>
                <li><a href="contacts.php">Contact Us</a></li>
            </ul>
    </div>
</nav>
<section class="main">
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="https://youtu.be/dQw4w9WgXcQ">Free money, try it out!!!</a></p>
                <p><a href="#"></a></p>
                <p><a href="#"></a></p>
            </div>
            <div class="col-sm-8 text-left">
                <div class="heading">
                    <h1 align="center">Gallery ⊂(◉‿◉)つ</h1>
                    <h2 align="center">Pictures</h2>
                    <a href="./img/img1.jpeg" data-lightbox="Muahahaha" data-title="Curious Boii"><img src="img/img1.jpeg" class="mgallery" width="250" height="250"></a>
                    <a href="./img/img3.jpg" data-lightbox="Muahahaha" data-title="Danger Boii"><img src="img/img3.jpg" class="mgallery" width="250" height="250"></a>
                    <a href="./img/img2.jfif" data-lightbox="Muahahaha" data-title="Mid-life crisis"><img src="img/img2.jfif" class="mgallery" width="250" height="250"></a>
                    <hr>
                    <h3 align="center">Videos</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_S7WEVLbQ-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://streamable.com/s/ac2ox/nsqcbg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>Advertisement OwO</p>
                </div>
            </div>
        </div>
    </div>

</section>

<footer class="container-fluid text-center">
    <p>Some really boring and totally not needed text here.exe</p>
</footer>

<script src="./libs/js/lightbox.js"></script>

</body>
</html>
