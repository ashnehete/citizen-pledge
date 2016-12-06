<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add an Event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Montserrat;
            background: url("img/BG.jpg");
            background-size: cover;
            height: 100vh;
        }

        .navbar-custom {
            border-radius: 0;
            background-color: #f23c2b;
            border: none;
        }

        .navbar-custom .navbar-brand {
            color: #ffffff;
        }

        .navbar-custom .navbar-brand:hover,
        .navbar-custom .navbar-brand:focus {
            background-color: #ed220f;
        }

        .navbar-custom .navbar-text {
            color: #ffffff;
        }

        .navbar-custom .navbar-nav > li > a {
            color: #ffffff;
        }

        .navbar-custom .navbar-nav > li > a:hover,
        .navbar-custom .navbar-nav > li > a:focus {
            color: #ffffff;
            background-color: #ed220f;
        }

        .navbar-custom .navbar-nav > .active > a,
        .navbar-custom .navbar-nav > .active > a:hover,
        .navbar-custom .navbar-nav > .active > a:focus {
            color: #ffffff;
            background-color: #C71F10;
        }

        .navbar-custom .navbar-nav > .disabled > a,
        .navbar-custom .navbar-nav > .disabled > a:hover,
        .navbar-custom .navbar-nav > .disabled > a:focus {
            color: #cccccc;
            background-color: transparent;
        }

        .navbar-custom .navbar-toggle {
            border-color: #dddddd;
        }

        .navbar-custom .navbar-toggle:hover,
        .navbar-custom .navbar-toggle:focus {
            background-color: #dddddd;
        }

        .navbar-custom .navbar-toggle .icon-bar {
            background-color: #cccccc;
        }

        .navbar-custom .navbar-collapse,
        .navbar-custom .navbar-form {
            border-color: #f23c2b;
        }

        .navbar-custom .navbar-nav > .dropdown > a:hover .caret,
        .navbar-custom .navbar-nav > .dropdown > a:focus .caret {
            border-top-color: #ffffff;
            border-bottom-color: #ffffff;
        }

        .navbar-custom .navbar-nav > .open > a,
        .navbar-custom .navbar-nav > .open > a:hover,
        .navbar-custom .navbar-nav > .open > a:focus {
            background-color: #ed220f;
            color: #ffffff;
        }

        .navbar-custom .navbar-nav > .open > a .caret,
        .navbar-custom .navbar-nav > .open > a:hover .caret,
        .navbar-custom .navbar-nav > .open > a:focus .caret {
            border-top-color: #ffffff;
            border-bottom-color: #ffffff;
        }

        .navbar-custom .navbar-nav > .dropdown > a .caret {
            border-top-color: #ffffff;
            border-bottom-color: #ffffff;
        }

        @media (max-width: 767) {
            .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
                color: #ffffff;
            }

            .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
                color: #ffffff;
                background-color: transparent;
            }

            .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
            .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
            .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
                color: #ffffff;
                background-color: #ed220f;
            }

            .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
            .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
            .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
                color: #cccccc;
                background-color: transparent;
            }
        }

        .navbar-custom .navbar-link {
            color: #ffffff;
        }

        .navbar-custom .navbar-link:hover {
            color: #ffffff;
        }

        .form-control {
            border-radius: 0;
            width: 280px !important;
        }

        .btn {
            border-radius: 0;
            margin-right: 20px !important;
        }

        .propic {
            border-radius: 100%;
            padding: none;
            height: 2em;
            margin-top: 0.75em;
        }

        textarea {
            resize: none;
        }

        .two {
            margin-top: 55px;
        }

        .input-group-addon {
            position: relative;
            background-color: #f23c2b;
            border: none;
            border-radius: 0;
            color: white;
            margin: 0;
            right: 162px;
        }

        .end {
            position: relative;
            right: 162px;
        }

        .time .form-control {
            width: 100px !important;
        }

        #avatar {
            background-color: rgba(0, 0, 0, 0.3);
            margin: 0 0 0 0;
            z-index: 3;
            border-color: transparent;
            cursor: pointer;
        }

        #browse {
            display: none;
            z-index: 999;
        }

        .container {
            color: #f23c2b;
        }

        .form-control:focus {
            border-color: #FF0000;
            font-weight: bold;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.0), 0 0 8px rgba(255, 0, 0, 0.0);
        }

        .subeve {
            margin-left: 375px;
            margin-top: 30px;
            color: #f23c2b;
            width: 200px;
            height: 50px;
            font-size: 20px;
        }

        .subeve:hover, .subeve:focus, .subeve:active {
            color: white;
            outline: none;
            border: none;
            background-color: #f23c2b;
        }

        .row {
            margin-top: 40px;
        }

        #click {
            position: absolute;
            left: 120px;
            top: 190px;
            z-index: -1;
            font-size: 20px;
        }
        .glyphicon-log-in, .glyphicon-bell{
            color:#ffffff;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-custom">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Citizen Pledge</a>
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><img src="https://www.drupal.org/files/profile_default.png" class="propic"></img></li>
                <li><a href="#" class="uname"> Username</a></li>
                <li class="dropdown"><a href="#" class=""btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-bell notification-icon"></span> Notifications<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <ul class="text-right" id="notif"><a href="#">Dismiss all</a></ul>
                            <li><a href="#">Amy messaged you!</a></li>
                            <li><a href="#">Sean liked your post!</a></li>
                            <li><a href="#">DigitalOcean posted a new event!</a></li>
                            <li><a href="#">Someone mentioned you!</a></li>
                            <li><a href="#">Amy liked your post!</a></li>
                            <li><a href="#">Aashish tagged you!</a></li>
                            <li><a href="#">Someone mentioned you!</a></li>
                            <li><a href="#">Gaurav messaged you!</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <form class="evnt">
            <h3 id="login">
                <b>Add an event:</b>
            </h3>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email">Event Name: </label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="desc">Event Description: </label>
                        <textarea class="form-control" rows="4" id="desc"></textarea>
                </div>
                <div class="form-group">
                    <label for="time">Timing: </label>
                    <div class="input-group time">
                        <input type="datetime-local" class="form-control" placeholder="Start"/>
                        <span class="input-group-addon">-</span>
                        <input type="datetime-local" class="form-control end" placeholder="End"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email">Location: </label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <p class="img" id="im"><b>Image: </b></p>
                    <label for="browse">
                        <label id="click">Click to upload</label>
                        <img id="avatar" src='blank.gif' style="height: 200px; width:350px;">
                    </label>
                    <input id="browse" type="file" name="browseImage" onchange="previewFile()">
                </div>
            </div>
        </form>
        <button type="submit" action="login.php" class="btn btn-default bttn submit subeve"><b>Add Event</b></button>
    </div>
</div>
<script>
    function previewFile() {
        var preview = document.querySelector('#avatar'); //selects the query with id avatar
        var file = document.querySelector('input[type=file]').files[0]; //sames as here
        var reader = new FileReader();
        reader.onloadend = function () {
            preview.src = reader.result;
        };

        if (file.type.match('image.*')) {
            reader.readAsDataURL(file); //reads the data as a URL
        } else if (!file.type.match('image.*')) {
            window.alert("Not an image file. Upload an appropriate file.");
        } else {
            preview.src = "";
        }
    }
</script>
</body>
</html>

