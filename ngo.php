<?php
include_once 'inc/setup.php';
include_once 'inc/User.php';

$user = new User($db);

if (isset($_GET['id']))
    $ngo = $user->getNgoDetails($_GET['id']);
else
    $ngo = $user->getNgoDetails($_SESSION[USER_ID]);

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

        .propic {
            border-radius: 100%;
            padding: 0;
            height: 2em;
            margin-top: 0.75em;
        }

        .form-control {
            border-radius: 0;
            width: 280px !important;
        }

        .btn {
            border-radius: 0;
            margin-right: 20px !important;
        }

        .picsec, .prosec, .eventsec {
            background-color: white;
            height: 552px;
            width: 390px;
            margin: 12px;
            margin-left: 40px;
        }

        .picsec {
            margin-left: 40px;
        }

        .pic img {
            margin-left: 45px;
            margin-top: 30px;
            border-radius: 100%;
            height: 290px;
            padding: 20px;
        }

        .name {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #f23c2b
        }

        .container {
            margin: 0;
            padding: 0;
            margin-left: 40px;
            padding-left: 20px;
        }

        .addEvent {
            margin-left: 95px;
            padding: 0;
            margin-top: 80px;
            width: 222px;
        }

        .btn-block {
            width: 220px;
            height: 60px;
            font-size: 22px;
            border: none;
            background-color: #f23c2b;
        }

        .prosec .list {
            color: #f23c2b;
            font-weight: bold;
        }

        .prosec .push {
            margin-top: 30px;
        }

        .glyphicon {
            color: #f23c2b;
        }

        .glyphicon-log-in, .glyphicon-bell {
            color: #ffffff;
        }

        li.list-group-item, a.list-group-item {
            border-radius: 0 !important;
            height: 60px;
            line-height: 40px;
            font-weight: bold;
            color: black;
        }

        #list1 {
            height: 271px;
            overflow: auto;
        }

        #list2 {
            height: 161px;
            overflow: auto;
        }

        li.list-group-item {
            color: #f23c2b;
            font-size: 20px;
        }

        a.list-group-item:hover {
            background-color: #f23c2b;
            color: white;
        }

        .pic, .name, .addEvent {

        }

        .tooltip {
            display: none;
            position: absolute;
            border: 1px solid #333;
            background-color: #161616;
            border-radius: 5px;
            padding: 10px;
            color: #fff;
            font-size: 12px;
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
                        <button class="btn btn-default" type="submit">
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
                <li><img src="<?= $_SESSION[USER_PIC] ?>" class="propic"/></li>
                <li><a href="./" class="uname"><?= $_SESSION[USER_NAME] ?></a></li>
                <li class="dropdown"><a href="#" type="button"
                    data-toggle="dropdown"><span class="glyphicon glyphicon-bell notification-icon"></span>
                    Notifications<span class="caret"></span></a>
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
                <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 picsec">
            <div class="row">
                <div class="col-sm-12 pic">
                    <img src="<?= $ngo['image_url'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 name">
                    <p><?= $ngo['name'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 addEvent">
                    <a href="./newEvent.php" class="btn btn-danger btn-block btn-lg">+ Add New Event</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 prosec">
            <div class="row push">
                <div class="col-sm-4 list ">
                    Short description:
                </div>
                <div class="col-sm-8 desc">
                    <?= $ngo['description'] ?>
                </div>
            </div>
            <div class="row push">
                <div class="col-sm-4 list ">
                    Number of successful events:
                </div>
                <div class="col-sm-8 desc">
                    <?= $ngo['count'] ?>
                </div>
            </div>
            <div class="row push">
                <div class="col-sm-4 list ">
                    Total pledges till date:
                </div>
                <div class="col-sm-8 desc">
                    <?= $ngo['max'] ?>
                </div>
            </div>
            <div class="row push">
                <div class="col-sm-4 list ">
                    Head of Organization:
                </div>
                <div class="col-sm-8 desc">
                    <?= $ngo['head_of_ngo'] ?>
                </div>
            </div>
            <div class="row push">
                <div class="col-sm-4 list ">
                    Most successful pledges:
                </div>
                <div class="col-sm-8 desc">
                    <?= $ngo['max'] ?>
                </div>
            </div>
            <div class="row push">
                <div class="col-sm-4 list ">
                    Contact Info:
                </div>
                <div class="col-sm-8 desc">
                    <i class="glyphicon glyphicon-envelope"></i> <?= $ngo['email'] ?><br>
                    <i class="glyphicon glyphicon-phone"></i> <?= $ngo['mobile'] ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4 eventsec">
            <div class="row">
                <div class="list-group">
                    <li class="list-group-item">Upcoming events</li>
                    <div id="list1">
                        <?php
                        if (count($ngo['upcoming']) === 0)
                            echo 'No upcoming events.';
                        foreach ($ngo['upcoming'] as $eachEvent) {
                            echo
                                '<a href="./event.php?id=' . $eachEvent['id'] . '" class="list-group-item ">' .
                                '<span class="glyphicon glyphicon-calendar "></span> ' .
                                $eachEvent['name'] . '</a>';
                        }
                        ?>
                    </div>
                    <li class="list-group-item">Past Events</li>
                    <div id="list2">
                        <?php
                        if (count($ngo['past']) === 0)
                            echo 'No past events.';
                        foreach ($ngo['past'] as $eachEvent) {
                            echo
                                '<a href="./event.php?id=' . $eachEvent['id'] . '" class="list-group-item ">' .
                                '<span class="glyphicon glyphicon-calendar "></span> ' .
                                $eachEvent['name'] . '</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('a.list-group-item').hover(function () {
        $(this).find('.glyphicon-calendar').css(
            {'color': 'white'});
    });
    $('a.list-group-item').mouseleave(function () {
        $(this).find('.glyphicon-calendar').css(
            {'color': '#f23c2b'});
    });

</script>
</body>
</html>
