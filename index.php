<?php
include_once 'inc/setup.php';
if (isset($_SESSION[LOGGED_IN]) && $_SESSION[LOGGED_IN] === true)
    goToNextPage();
include_once 'inc/User.php';
$user = new User($db);

$state = 0;

if (isset($_POST['submit-login'])) {
    $state = 1;
    $login = $user->login($_POST['email'], $_POST['password']);
    if ($login === true) goToNextPage();
} else if (isset($_POST['submit-rgstr'])) {
    $state = 2;
    $rgstr = $user->createAccount($_POST['email'], $_POST['username'], $_POST['password'],
        $_POST['confirm-password'], $_POST['type']);
}

function goToNextPage()
{
    if ($_SESSION[USER_NAME] == NULL) {
        if ($_SESSION[USER_TYPE_ID] === NGO)
            header('Location: ./ngodetails.php');
        else
            header('Location: ./userdetails.php');
    } else {
        if ($_SESSION[USER_TYPE_ID] === NGO)
            header('Location: ./ngo.php');
        else
            header('Location: ./citizen.php');
    }
}

?>
<!DOCTYPE html>
<html>
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
            background-color: white;
            color: #f23c2b;
            padding: 0;
            margin: 0;
        }

        .form-control {
            width: 60%;
            border-radius: 0;
        }

        .lgn {
            margin-left: 30%;
        }

        h1 {
            color: #f23c2b;
            font-size: 40px;
            text-align: center;
            margin-top: 5%;
            margin-bottom: 5%;
        }

        .form-control:focus {
            border-color: #FF0000;
            font-weight: bold;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.00), 0 0 8px rgba(255, 0, 0, 0.0);
        }

        .bttn {
            color: #f23c2b;
            border-radius: 0;
        }

        .bttn:hover {
            color: white;
            background-color: #f23c2b;
            border: none;
        }

        .hide {
            display: none;
        }

        .rgstr {
            margin-left: 15%;
        }

        .rgstr .form-control {
            border-radius: 0;
        }

        .inline {
            display: inline;
            width: 20%;
        }

        .btn-danger {
            border: none;
            border-radius: 0;
        }

        .btn:focus, .btn:active {
            outline: none !important;
        }

        #browse {
            display: none;
        }

        #avatar {
            background-color: rgba(0, 0, 0, 0.5);
            margin: 0 0 0 100%;
            border-color: transparent;
            cursor: pointer;
        }

        .img {
            font-size: 15px;
            top: 55%;
            color: #f23c2b;
            position: absolute;
            padding-left: 10%;
            display: inline;
        }

        .pg2 {
            display: none;
        }

        #login {
            margin-left: 200px;
        }

        #rgstr {
            margin-left: 220px;
        }

        .users {
            margin-top: 20px;
        }

        .pg2 .form-control {
            width: 250px;
        }

        .rgstrs {
            margin-left: 43%;
            margin-top: 3%;
        }

        #cho {
            margin-top: 20px;
            margin-right: 200px;
            font-size: 20px;
        }

        .btn:focus, .btn:active {
            outline: none !important;
        }

        button {
            width: 200;
            height: 50px;
            font-size: 22px;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <h1>
        Welcome to Citizen Pledge
    </h1>
    <h3 id="login" class="pg1">
        <b>Login:</b>
    </h3>
    <div class="row pg1">
        <div class="col-sm-6">
            <form class="lgn" method="post" action="#">

                <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" id="email">
                     
                </div>
                 
                <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" id="pwd">
                     
                </div>

                <p><?= ($state === 1) ? $login : ''; ?></p>
                 
                <div class="form-group">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-danger rmrme">
                            <input type="checkbox" name="options" id="option1"> Remember Me
                        </label>
                    </div>
                </div>
                 
                <div class="btn-toolbar">
                    <button type="submit" name="submit-login" class="btn btn-default bttn submit rgstr">
                        <b>Login</b>
                    </button>
                     
                    <button type="button" class="btn btn-default bttn register"><b>Click to register</b></button>
            </form>
        </div>
    </div>
    <div class="col-sm-6 center">
        <div style="width: 50%;">
            <span><strong>Helping people, changing lives.</strong></span><br>
            Citizen Pledge helps you connect with other people to bring about the change you want to see
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row pg2">
        <h3 id="rgstr">
            <b>Register:</b>
        </h3>
        <form class="rgstr" action="#" method="post">
            <div class="col-sm-4">

                <p><?= ($state === 2) ? $rgstr : ''; ?></p>
                 
                <div class="form-group user">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" id="email">
                     
                </div>
                 
                <div class="form-group pass">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" id="pwd">
                     
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group choice">
                        <br><br><b id="cho">Register as NGO or Citizen </b><br><br><br><br><br>
                     
                    <div class="btn-group btn-group-danger" data-toggle="buttons">
                        <label class="btn btn-danger btn-lg active">
                            <input type="radio" name="type" value="1" id="option1" checked> NGO
                        </label>
                        <label class="btn btn-danger btn-lg">
                            <input type="radio" name="type" value="2" id="option2"> Citizen
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group users">
                    <label for="email">Username:</label>
                        <input type="text" class="form-control" name="username" id="username">
                       
                </div>
                   
                <div class="form-group pas">
                        <label for="pwd">Confirm Password:</label>
                        <input type="password" class="form-control" name="confirm-password" id="cpwd">
                       
                </div>
            </div>

            <div class="btn-toolbar pg2 rgstrs">
                <button type="submit" name="submit-rgstr" class="btn btn-default bttn submit"><b>Register</b></button>
                <button type="button" class="btn btn-default bttn login"><b>Click to login</b></button>
            </div>
        </form>
    </div>
</div>
<script>
    $(".register").click(function () {
        $(".pg1").toggle(1000);
        $(".pg2").toggle(1000);
    });

    $(".login").click(function () {
        $(".pg1").toggle(1000);
        $(".pg2").toggle(1000);
    });

    <?= ($state == 2) ? '$(".pg1").toggle(1000);$(".pg2").toggle(1000);' : ''; ?>
</script>
</body>
</html>

