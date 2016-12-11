<?php
include_once 'inc/setup.php';
if (!isset($_SESSION[LOGGED_IN]) || $_SESSION[LOGGED_IN] === false)
    header('Location: ./');
include_once 'inc/User.php';
$user = new User($db);

if (isset($_POST['submit'])) {
    $imageUrl = $user->uploadProfilePicture($_FILES['browseImage']);
    $user->insertDetails($_POST['name'], $_POST['desc'], $_POST['mobile'], $imageUrl, $_POST['head']);
    header('Location: ./ngo.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Citizen Pledge</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
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

        .profile {
            margin: 20px;
            width: 45%;
        }

        #dtls {
            color: #f23c2b;
            font-weight: bold;
            margin-left: 120px;
            margin-top: 40px;
        }

        label {
            font-size: 20px;
            font-weight: bold;
            color: #f23c2b;

        }

        .propic {
            border-radius: 100%;
            padding: 0;
            height: 2em;
            margin-top: 0.75em;
        }

        .col-sm-6 {
            margin-left: 120px;
            width: 400px;
        }

        .form-control:focus {
            border-color: #FF0000;
            font-weight: bold;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.0), 0 0 8px rgba(255, 0, 0, 0.0);
        }

        textarea {
            resize: none;
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
        }

        #click {
            position: absolute;
            left: 60px;
            top: 140px;
            z-index: -1;
            font-size: 22px;
            color: #f23c2b;
        }

        #im {
            font-size: 20px;
            color: #f23c2b;
        }

        .sbt {
            margin-left: 475px;
            padding: 0;
            width: 152px;
        }

        .btn-block {
            width: 152px;
            height: 60px;
            font-size: 22px;
            border: none;
            background-color: #f23c2b;
        }

        .dropdown-menu {
            height: auto;
            max-height: 180px;
            overflow-x: hidden;
            font-size: 1em;
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
            <a class="navbar-brand" href="./">Citizen Pledge</a>
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="./">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="./"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <h2 id="dtls">
        NGO Details:
    </h2>
    <form id="ngopro" action="#" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6 profile">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="nme">Name of the NGO: </label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nme" name="name" required>
                        </div>
                        <label for="headngo">Head of the NGO: </label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="headngo" name="head" required>
                        </div>
                        <label for="desc">Short description: </label>
                        <div class="form-group">
                            <textarea class="form-control" rows=6 id="desc" name="desc" required placeholder="200 characters max"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 profile">
                <div class="form-group">
                    <p class="img" id="im"><b>Image: </b></p>
                    <label for="browse">
                        <label id="click">Click to upload</label>
                        <img id="avatar" src='img/blank.gif' style="height: 250px; width:250px;">
                    </label>
                    <input id="browse" type="file" name="browseImage" onchange="previewFile()" required>
                </div>
                <label for="mobileNo">Mobile No.: </label>
                <div class="form-group">
                    <input type="tel" class="form-control" name="mobile" id="mobileNo" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 sbt">
                <button type="submit" name="submit" class="btn btn-danger btn-block btn-lg">Submit</button>
            </div>
        </div>
    </form>
</div>
<script>
    function previewFile() {
        var preview = document.querySelector('#avatar'); //selects the query with id avatar
        var file = document.querySelector('input[type=file]').files[0]; //sames as here
        var reader = new FileReader();
        reader.onloadend = function () {
            preview.src = reader.result;
        }

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

