<!DOCTYPE html>
<html lang="en">
<head>
    <title>EverTap Official</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        .row.content {height: 600px}

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
            <a class="navbar-brand" href="index"><img src="img/logo2.png" width="34" height="34"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index">Home</a></li>
                <li><a href="gallery">Gallery</a></li>
                <li class="active"><a href="#">Registration</a></li>
                <li><a href="login">Log in</a></li>
                <li><a href="contacts">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="https://youtu.be/dQw4w9WgXcQ">Free money, try it out!!!</a></p>
            <p><a href="#"></a></p>
            <p><a href="#"></a></p>
        </div>
        <div class="col-sm-8 text-left">
          <form action="/action_page.php">
            <div class="container">
              <h1>Register</h1>
              <h4>Fill out the forms, to create your account</h4>
              <h4>Password must contain 8 or more characters</h4>
              <h4>Username must contain atleast 3 characters</h4>
              <hr>

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" id="email" required>

              <label for="psw"><b>Username</b></label>
              <input type="text" name="username" placeholder="Username" pattern=".{3,}" required title="Atleast 3 characters" required>

              <label for="psw-repeat"><b>Password</b></label>
              <input type="password" id="pwd" name="pwd" pattern=".{8,}" title="Eight or more characters" required>
              <button type="submit" class="registerbtn">Register</button>
            </div>
            <hr>
        </div>
        
        <!-- <div class="col-sm-2 sidenav">
            <div class="well">
                <p>ADS</p>
            </div> -->

            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Some really boring and totally not needed text here.exe</p>
</footer>

</body>
</html>
