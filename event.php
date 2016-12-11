<?php
if (!isset($_GET['id']))
    header('Location: ./');
include_once 'inc/setup.php';
include_once 'inc/Event.php';

$event = new Event($db);
$event_details = $event->getEventById($_GET['id']);

if (isset($_POST['submit'])) {
    $pledge_msg = $event->pledgeToEvent($_SESSION[USER_ID], $_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $event_details['name'] ?></title>
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

        .event {
            width: 80%;
            margin-left: 10%;
            margin-top: 3%;
            background-color: white;
        }

        .fixed-nav-bar {
              position: fixed;
              top: 0;
              left: 0;
              z-index: 9999;
              width: 100%;
              margin-bottom: 30px;
        }

        #epic {
            height: 60%;
            width: 625px;
            max-width: 700px;
            margin: 0;
            padding: 0;
        }

        .push {
            margin-left: -30px;
        }

        .btn-block {
            width: 180px;
            height: 60px;
            font-size: 25px;
            border: none;
            font-weight: bold;
            background-color: #f23c2b;
            margin-left: 75px;
            margin-top: 110px;
        }

        #to {
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            margin-top: 10px;
        }

        #ename {
            color: #f23c2b;
            font-weight: bold;
            font-size: 28px;
            text-align: center;
        }

        .list {
            color: #f23c2b;
            font-weight: bold;
            margin: 20px;
            font-size: 20px;
            padding-left: 160px;
        }

        .desc {
            width: 50%;
            font-size: 20px;
            margin-top: 20px;
        }

        .eventCount {
            position: absolute;
            font-size: 25px;
            font-weight: bold;
            background-color: #f23c2b;
            color: white;
            padding: 10px;
            padding-top: 2px;
            text-align: center;
            top: 0;
            right: 0;
        }

        .dropdown-menu {
            height: auto;
            max-height: 180px;
            overflow-x: hidden;
            font-size: 1em;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-custom fixed-nav-bar">
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
                <?php
                if ($_SESSION[USER_ID] === CITIZEN)
                    echo '<li class="active"><a href="./feed.php">Feed</a></li>';
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><img src="<?= $_SESSION[USER_PIC] ?>" class="propic"/></li>
                <li><a href="./" class="uname"><?= $_SESSION[USER_NAME] ?></a></li>
                <li class="dropdown"><a href="#" type="button"
                                        data-toggle="dropdown"><span
                            class="glyphicon glyphicon-bell notification-icon"></span>
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
        <div class="col-sm-12 event">
            <div class="row push">
                <div class="col-sm-8 eventPic center">
                    <img src="<?= $event_details['image_url'] ?>" style="width: auto; height: 200px"/>
                </div>
                <div class="col-sm-4 pledge">
                    <span class="eventCount"><?= $event_details['pledges'] ?></span>
                    <form action="#" method="post">
                        <button type="submit" name="submit" class="btn btn-danger btn-block btn-lg">+ Pledge</button>
                    </form>
                    <p id="to">to</p>
                    <p id="ename"><?= $event_details['name'] ?></p>
                </div>
            </div>
            <h4 class="center"><?= (isset($pledge_msg) ? $pledge_msg : ''); ?></h4>
            <div class="row push">
                <div class="col-sm-4 list">
                    NGO Name:
                </div>
                <div class="col-sm-8 desc">
                    <a href="./ngo.php?id=<?= $event_details['ngo_id'] ?>"><?= $event_details['ngo'] ?></a>
                </div>
            </div>
            <div class="row push">
                <div class="col-sm-4 list ">
                    Event Description:
                </div>
                <div class="col-sm-8 desc">
                    <?= $event_details['description'] ?>
                </div>
            </div>
            <div class="row push">
                <div class="col-sm-4 list ">
                    Event Timing:
                </div>
                <div class="col-sm-8 desc">
                    <?= $event_details['start_time'] . ' - ' . $event_details['end_time'] ?>
                </div>
            </div>
            <div class="row push">
                <div class="col-sm-4 list ">
                    Event Location:
                </div>
                <div class="col-sm-8 desc">
                    <?= $event_details['location'] ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
