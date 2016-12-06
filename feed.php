<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.navbar-custom {
  border-radius:0;
  background-color: #f23c2b;
  border:none;
  font-family:Montserrat;
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
.form-control{
	border-radius:0;
	width:280px !important;
}
.btn{
	border-radius:0;
	margin-right:20px !important;
}
.dropdown-menu{
  height: auto;
  max-height: 180px;
  overflow-x: hidden;
  font-size:1em;
}
.glyphicon{
  color:#f23c2b;
}
.glyphicon-log-in, .glyphicon-bell{
  color:#ffffff;
}
#fixed-nav-bar{
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  width: 100%;
  height: 50px;
  margin-bottom:30px;
}
.propic{
	border-radius:100%;
	padding:none;
	height:2em;
	margin-top:0.75em;
}
.col-sm-6 a{
  color:inherit;
  text-decoration: none;
}
.col-sm-6,.col-sm-2{
 margin-top:70px;
}
.container .col-sm-6 .panel-heading{
  font-size: 1.2em;
}
.container .col-sm-6 .panel-body{
  height: auto;
  max-height: 180px;
  overflow-x: hidden;
}
.container .row{
  font-size: 1.25em;
}
</style>
</head>
<body>

<nav class="navbar navbar-custom" id="fixed-nav-bar">
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
        <li><a href="file:///C:/Users/admin/citizen-pledge/citizenhome.php#">Home</a></li>
        <li class="active"><a href="#">Feed</a></li>
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
      <div class="col-sm-3"><!--left col-->
        <div class="hold">
        </div>
      </div>
      <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading"><a href ="#">Event 1<i class="fa fa-link fa-1x"></i></a></div>
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum leo vitae orci cursus, faucibus sollicitudin lorem fermentum. Quisque at risus urna. Vivamus ut augue lacinia, egestas ante nec, rutrum lectus. Nam ut interdum ex, sit amet egestas magna. Curabitur malesuada sagittis neque, non volutpat augue efficitur ac. Pellentesque sapien neque, pellentesque in mi porttitor, bibendum scelerisque magna. Nulla et libero nec mi commodo convallis. Etiam euismod diam non varius facilisis. Mauris bibendum rhoncus lacus. Praesent gravida elementum consequat.</div>
            </div>
          <div class="panel panel-default">
            <div class="panel-heading"><a href ="#">Event 2<i class="fa fa-link fa-1x"></i></a></div>
            <div class="panel-body">Phasellus suscipit lectus ante, at tempus turpis sagittis ac. Sed at interdum elit. Donec in egestas nisl. Aliquam sit amet magna sit amet justo rhoncus aliquam eu ac magna. Aenean tempor sed nunc sit amet sagittis. Donec tempus, metus sit amet dignissim volutpat, lectus elit blandit ipsum, ut fermentum tortor est eget purus. Donec eget tortor ultrices augue posuere facilisis a sed lectus. Donec faucibus magna sollicitudin, volutpat dolor et, varius erat. Donec eleifend ultricies tellus, ac pulvinar metus facilisis a. Duis blandit molestie leo, quis lacinia metus vehicula vitae. Morbi volutpat sagittis diam, vitae viverra turpis sodales nec. Nunc ultricies, lorem eu eleifend sodales, libero nibh scelerisque sem, eget posuere nisi lectus lacinia felis. Etiam arcu diam, efficitur nec malesuada at, sodales ut tellus. Sed sagittis semper sem, vitae tempor odio convallis lobortis. Phasellus suscipit volutpat aliquam.</div>
            </div>
          <div class="panel panel-default">
            <div class="panel-heading"><a href ="#">Event 3<i class="fa fa-link fa-1x"></i></a></div>
            <div class="panel-body">Sed tincidunt semper nisi, sit amet vehicula nibh blandit eu. Phasellus nec feugiat erat, non efficitur nulla. Etiam porttitor velit quis lacus auctor efficitur. Phasellus sapien odio, auctor vel sollicitudin vitae, semper ut enim. Maecenas eget nulla at purus tincidunt pharetra ut vitae arcu. Vestibulum hendrerit, nisi in ullamcorper porttitor, elit dui convallis quam, eu elementum magna augue vel libero. Sed vestibulum sollicitudin dui, id tempus risus. Proin et vehicula felis. Integer malesuada, magna ac porta faucibus, velit mi placerat erat, eget sodales eros mi at nisl. Nullam rhoncus, nulla ornare eleifend vehicula, tellus mauris rhoncus diam, a tincidunt nisl nulla nec ligula. Fusce eget risus eu odio condimentum congue. Donec vulputate, odio sed elementum maximus, turpis ipsum volutpat dui, eu fringilla ipsum erat a nulla. Vivamus lacinia nisi a quam fermentum dictum.</div>
            </div>
          <div class="panel panel-default">
            <div class="panel-heading"><a href ="#">Event 4<i class="fa fa-link fa-1x"></i></a></div>
            <div class="panel-body">Integer convallis ipsum ligula, et euismod tellus suscipit ut. Nullam consequat laoreet urna malesuada facilisis. Mauris id eros eu nisi venenatis faucibus. Etiam vel fringilla massa, sed porttitor libero. Fusce ipsum mi, commodo sit amet diam a, rhoncus rhoncus odio. Proin dictum erat sollicitudin, tempus mauris id, scelerisque nunc. Pellentesque consectetur pretium felis, a laoreet enim condimentum maximus. Sed volutpat pharetra metus, quis condimentum dolor vestibulum non. Cras et rutrum ante. Aliquam erat volutpat. Nunc egestas lobortis elit, a porta felis tincidunt euismod. Fusce et arcu et mi blandit blandit at quis quam. Suspendisse at mauris massa. Nulla lobortis neque ipsum, eu malesuada ante tempus ut. Ut porttitor sit amet ex ac imperdiet. Maecenas consequat risus vel auctor feugiat.</div>
            </div>
        </div>
  </div>
</div>

</body>
</html>

