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
   body{
  font-family:Montserrat;
  background:url("BG.jpg");
  background-size: cover;
 	height:100vh;
  }
.navbar-custom {
  border-radius:0;
  background-color: #f23c2b;
  border:none;
}
.navbar-custom .navbar-brand {
  color: #ffffff;
}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus {
  background-color:#ed220f;
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
   background-color:#ed220f;
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
.propic{
	border-radius:100%;
	padding:none;
	height:2em;
	margin-top:0.75em;
}
.form-control{
	border-radius:0;
	width:280px !important;
}
.btn{
	border-radius:0;
	margin-right:20px !important;
}

.event{
	width:80%;
	margin-left:10%;
	margin-top:3%;
	background-color:white;
}
.fixed-nav-bar{
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  width: 100%;
  margin-bottom:30px;
}
#epic{
	height:60%;
	width:625px;
	max-width:700px;
	margin:0;
	padding:0;
}
.push{
	margin-left:-30px;
}
.botn.btn-block{
	width:140px;
	height:60px;
	font-size:25px;
	border:none;
	font-weight:bold;
	background-color:#f23c2b;
	margin-left:95px;
	margin-top:110px;
}
#to{
	font-weight:bold;
	font-size:24px;
	text-align:center;
	margin-top:10px;
}
#ename{
	color:#f23c2b;
	font-weight:bold;
	font-size:28px;
	text-align:center;
}
.list{
	color:#f23c2b;
	font-weight:bold;
	margin:20px;
	font-size:20px;
	padding-left:160px;
}
.desc{
	width:50%;
	font-size:20px;
	margin-top:20px;
}
.eventCount{
	position:absolute;
	font-size:25px;
	font-weight:bold;
	background-color:#f23c2b;
	color:white;
	padding:10px;
	padding-top:2px;
	text-align:center;
	top:0;
	right:0;
}
.glyphicon-pencil,.glyphicon-remove{
	position:absolute;
	top:0;
	left:0;
	font-size:18px;
	margin-left:8px;
	padding:14px;
	background-color:#f23c2b;
	color:white;
}
.glyphicon-remove{
	display:none;
}
.glyphicon-remove:hover{
	cursor:pointer;
}
.glyphicon-pencil:hover{
	cursor:pointer;
}
.form-group{
	display:none;
}
textarea{
	resize:none;
}
.btn-block.bttn{
	position:absolute;
	width:50px;
	height:46px;
	font-size:21px;
	border:none;
	font-weight:bold;
	background-color:#f23c2b;
	margin:0;
	padding:0;
	margin-left:45px;
	display:none;
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
        <li><a href="./"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 event">
			<form>
				<div class="row push">
					<div class="col-sm-8 eventPic">
						<img src="img/charity.jpg" id="epic"></img>
					</div>
					<div class="col-sm-4 pledge">
						<span class="glyphicon glyphicon-remove"></span>
						<span class="glyphicon glyphicon-pencil"></span>
						<button type = "submit" class = "btn btn-danger btn-block btn-lg bttn"><span class="glyphicon glyphicon-ok"></span></button>
						<span class="eventCount">5000</span>
						<button type = "submit" class = "btn btn-danger btn-block btn-lg botn">Delete</button>
						<p id="to">Event Name </p>
					</div>
				</div>
				<div class="row push">
					<div class="col-sm-4 list">
						NGO Name:
					</div>
					<div class="col-sm-8 desc">
						<a href="#">String with link to NGO</a>
					</div>
				</div>
				<div class="row push">
					<div class="col-sm-4 list ">
						Event Description:  
					</div>
					<div class="col-sm-8 desc">
						<div class="form-group">
							<textarea class="form-control" rows="4" id="desc"></textarea>
						</div>
						<span class="disapp">Short parapraph(Max 5 lines)</span>
					</div>
				</div>
				<div class="row push">
					<div class="col-sm-4 list ">
						Event Timing:
					</div>
					<div class="col-sm-8 desc">
						<div class="form-group">
							<input type="text" class="form-control" id="time">
						</div>
						<span class="disapp">Start time to end time</span>
					</div>
				</div>
				<div class="row push">
					<div class="col-sm-4 list ">
						Event Location:
					</div>
					<div class="col-sm-8 desc">
						<div class="form-group">
							<input type="text" class="form-control" id="time">
						</div>
						<span class="disapp">Location</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.glyphicon-pencil').click(function(){
			$('.disapp').fadeOut(500);
			$('.form-group').delay(500).fadeIn(500);
			$(this).fadeOut(500);
			$('.glyphicon-remove').fadeIn(500);
			$('.bttn.btn-block').fadeIn(500);
		});
		$('.glyphicon-remove').click(function(){
			$('.form-group').fadeOut(500);
			$('.disapp').delay(500).fadeIn(500);
			$(this).fadeOut(500);
			$('.bttn.btn-block').fadeOut(500);
			$('.glyphicon-pencil').fadeIn(500);
		});
	});
</script>
</body>
</html>
