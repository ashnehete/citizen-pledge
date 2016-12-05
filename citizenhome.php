
<!DOCTYPE html>
<html lang = "en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
  <script src="js/jquery.js"></script>
  <script src="js/responsive-calendar.js"></script>
  <link href="css/responsive-calendar.css" rel="stylesheet" media="screen">
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
.propic{
  border-radius:100%;
  padding:none;
  height:2em;
  margin-top:0.75em;
}
.container .row{
  font-size: 1.25em;
}
.container .list-group {
  height: auto;
    max-height: 200px;
    overflow-x: hidden;
}
.container .row .btn {
  background-color: #e7e7e7; 
  color: black;
  font-size: 1.25em;
  text-align: left;
}
.container .col-sm-7 .panel-heading{
  font-size: 1.2em;
}
.container .col-sm-7 .panel-body{
  height: auto;
    max-height: 200px;
    overflow-x: hidden;
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
        <li><a href="#">Feed</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><img src="https://www.drupal.org/files/profile_default.png" class="propic"></img></li>
        <li><a href="#" class="uname"> Username</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <div class="row">
      <div class="col-sm-3"><!--left col-->
            <ul class="list-group">
              <li class="list-group-item text-muted">Events Pledged <i class="fa fa-dashboard fa-1x"></i></li>
              <ul class="list-group-item text-left"><strong>Event 1</strong></ul>
              <ul class="list-group-item text-left"><strong>Event 2</strong></ul>
              <ul class="list-group-item text-left"><strong>Event 3</strong></ul>
              <ul class="list-group-item text-left"><strong>Event 4</strong></ul>
              <ul class="list-group-item text-left"><strong>Event 5</strong></ul>
              <ul class="list-group-item text-left"><strong>Event 6</strong></ul>
            </ul> 
            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">Calendar</button>

  <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
    
      <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>  
          </div>
        </div>
        </div>
        <div>

        </div>
        <div class="col-sm-7">
          <div class="panel panel-default">
              <div class="panel-heading">Event 1<i class="fa fa-link fa-1x"></i></div>
              <div class="panel-body">fcudgfcujgdkhbkhvklfhkvhkjdbhvjkbncb jgbwdkjgwkjfhklehnvlkhnlrvj;cbs whfdliehlvfnhe swfgucjgeugvckujbgkju ehfkehkfhkehf ebfkjebgvlnhrlonb kehbfliheglkhrgljntljhb bekjfvbrlhglrhg kevbhlkhrlovgbj elhglrhglhr rhglvrhl cejkucjvkgbeurkhbvkirhn evbkirhblihvlrnhbv jefbgkjurhgoltjhbhlnt ejbgfkhrebglihrntlghjn virgvikthblijto jegbvkrgbkvb vbkirhb lkrhnbglvhntrlbhltb rvlkhntlbhltnb fcudgfcujgdkhbkhvklfhkvhkjdbhvjkbncb jgbwdkjgwkjfhklehnvlkhnlrvj;cbs whfdliehlvfnhe swfgucjgeugvckujbgkju ehfkehkfhkehf ebfkjebgvlnhrlonb kehbfliheglkhrgljntljhb bekjfvbrlhglrhg kevbhlkhrlovgbj elhglrhglhr rhglvrhl cejkucjvkgbeurkhbvkirhn evbkirhblihvlrnhbv jefbgkjurhgoltjhbhlnt ejbgfkhrebglihrntlghjn virgvikthblijto jegbvkrgbkvb vbkirhb lkrhnbglvhntrlbhltb rvlkhntlbhltnb</div>
            </div>
          <div class="panel panel-default">
              <div class="panel-heading">Event 2<i class="fa fa-link fa-1x"></i></div>
              <div class="panel-body">fcudgfcujgdkhbkhvklfhkvhkjdbhvjkbncb jgbwdkjgwkjfhklehnvlkhnlrvj;cbs whfdliehlvfnhe swfgucjgeugvckujbgkju ehfkehkfhkehf ebfkjebgvlnhrlonb kehbfliheglkhrgljntljhb bekjfvbrlhglrhg kevbhlkhrlovgbj elhglrhglhr rhglvrhl cejkucjvkgbeurkhbvkirhn evbkirhblihvlrnhbv jefbgkjurhgoltjhbhlnt ejbgfkhrebglihrntlghjn virgvikthblijto jegbvkrgbkvb vbkirhb lkrhnbglvhntrlbhltb rvlkhntlbhltnb fcudgfcujgdkhbkhvklfhkvhkjdbhvjkbncb jgbwdkjgwkjfhklehnvlkhnlrvj;cbs whfdliehlvfnhe swfgucjgeugvckujbgkju ehfkehkfhkehf ebfkjebgvlnhrlonb kehbfliheglkhrgljntljhb bekjfvbrlhglrhg kevbhlkhrlovgbj elhglrhglhr rhglvrhl cejkucjvkgbeurkhbvkirhn evbkirhblihvlrnhbv jefbgkjurhgoltjhbhlnt ejbgfkhrebglihrntlghjn virgvikthblijto jegbvkrgbkvb vbkirhb lkrhnbglvhntrlbhltb rvlkhntlbhltnb</div>
            </div>
          <div class="panel panel-default">
              <div class="panel-heading">Event 3<i class="fa fa-link fa-1x"></i></div>
              <div class="panel-body">fcudgfcujgdkhbkhvklfhkvhkjdbhvjkbncb jgbwdkjgwkjfhklehnvlkhnlrvj;cbs whfdliehlvfnhe swfgucjgeugvckujbgkju ehfkehkfhkehf ebfkjebgvlnhrlonb kehbfliheglkhrgljntljhb bekjfvbrlhglrhg kevbhlkhrlovgbj elhglrhglhr rhglvrhl cejkucjvkgbeurkhbvkirhn evbkirhblihvlrnhbv jefbgkjurhgoltjhbhlnt ejbgfkhrebglihrntlghjn virgvikthblijto jegbvkrgbkvb vbkirhb lkrhnbglvhntrlbhltb rvlkhntlbhltnb fcudgfcujgdkhbkhvklfhkvhkjdbhvjkbncb jgbwdkjgwkjfhklehnvlkhnlrvj;cbs whfdliehlvfnhe swfgucjgeugvckujbgkju ehfkehkfhkehf ebfkjebgvlnhrlonb kehbfliheglkhrgljntljhb bekjfvbrlhglrhg kevbhlkhrlovgbj elhglrhglhr rhglvrhl cejkucjvkgbeurkhbvkirhn evbkirhblihvlrnhbv jefbgkjurhgoltjhbhlnt ejbgfkhrebglihrntlghjn virgvikthblijto jegbvkrgbkvb vbkirhb lkrhnbglvhntrlbhltb rvlkhntlbhltnb</div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">Event 4<i class="fa fa-link fa-1x"></i></div>
              <div class="panel-body">fcudgfcujgdkhbkhvklfhkvhkjdbhvjkbncb jgbwdkjgwkjfhklehnvlkhnlrvj;cbs whfdliehlvfnhe swfgucjgeugvckujbgkju ehfkehkfhkehf ebfkjebgvlnhrlonb kehbfliheglkhrgljntljhb bekjfvbrlhglrhg kevbhlkhrlovgbj elhglrhglhr rhglvrhl cejkucjvkgbeurkhbvkirhn evbkirhblihvlrnhbv jefbgkjurhgoltjhbhlnt ejbgfkhrebglihrntlghjn virgvikthblijto jegbvkrgbkvb vbkirhb lkrhnbglvhntrlbhltb rvlkhntlbhltnb fcudgfcujgdkhbkhvklfhkvhkjdbhvjkbncb jgbwdkjgwkjfhklehnvlkhnlrvj;cbs whfdliehlvfnhe swfgucjgeugvckujbgkju ehfkehkfhkehf ebfkjebgvlnhrlonb kehbfliheglkhrgljntljhb bekjfvbrlhglrhg kevbhlkhrlovgbj elhglrhglhr rhglvrhl cejkucjvkgbeurkhbvkirhn evbkirhblihvlrnhbv jefbgkjurhgoltjhbhlnt ejbgfkhrebglihrntlghjn virgvikthblijto jegbvkrgbkvb vbkirhb lkrhnbglvhntrlbhltb rvlkhntlbhltnb</div>
            </div>
        </div>
        <div class="col-sm-2">
          
        </div>
    </div>
</div>
</body>
</html>

