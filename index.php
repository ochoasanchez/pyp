<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WorkTasker</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,700,900' rel='stylesheet' type='text/css'>

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <?php include_once("../analytics.php") ?>
  <div id="footer" style="background:#fff;" class="visible-xs visible-sm">
    <div class="container-fluid">
      <div class="row icon text-center">
        <a href="#"><div class="col-xs-3">
          <div class="col-xs-12 ">
            <img src="img/home.png" class="img-responsive center-block" />
          </div>
          <div class="col-xs-12">
            <p>Home</p>
          </div>
        </div></a><!-- /home -->
        <a href="#"><div class="col-xs-3">
          <div class="col-xs-12 ">
            <img src="img/post.png" class="img-responsive center-block" />
          </div>
          <div class="col-xs-12">
            <p>Post</p>
          </div>
        </div></a><!-- /post -->
        <a href="#"><div class="col-xs-3">
          <div class="col-xs-12 ">
            <img src="img/search.png" class="img-responsive center-block" />
          </div>
          <div class="col-xs-12">
            <p>Search</p>
          </div>
        </div></a><!-- /search -->
        <a href="#"><div class="col-xs-3">
          <div class="col-xs-12 ">
            <img src="img/user.png" class="img-responsive center-block" />
          </div>
          <div class="col-xs-12">
            <p>You</p>
          </div>
        </div></a><!-- /user -->
      </div><!-- /.row -->
    </div>
  </div>
    <div class="container-fluid">
    <!-- Page Content -->
    <nav class="navbar navbar-default" style="color:#fff; margin-top:-110px;bottom:0">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed white-text" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="border:none;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="brand.png" class="img-responsive" style="margin-top:-0.4em"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="white">POST A TASK</span></a></li>
            <li><a href="#"><span class="white">BROWSE TASK</span></a></li>
            <li><a href="#"><span class="white">FIND JOB SEEKER</span></a></li>
            <li><a href="#"><span class="white">LOGIN</span></a></li>
            <li><a href="#"><span class="white">SIGN UP</span></a></li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background:none;"><span class="white"><img src="img/en.png" class="img-circle img-responsive flag">EN <b class="caret"></b></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="img/en.png" class="img-circle img-responsive flag">English</a></li>
                <li><a href="#"><img src="img/se.png" class="img-circle img-responsive flag">Swedish</a></li>
                <li><a href="#"><img src="img/de.png" class="img-circle img-responsive flag">German</a></li>
              </ul>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-menu-hamburger white"></span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div id="dropbar" class="navbar navbar-default navbar-fixed-top" style="color:#000;background:#fff:height:8em;">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="border:none;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="footer.png" class="img-responsive" style="margin-top:-0.4em"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="">POST A TASK</span></a></li>
            <li><a href="#"><span class="">BROWSE TASK</span></a></li>
            <li><a href="#"><span class="">FIND JOB SEEKER</span></a></li>
            <li><a href="#"><span class="">LOGIN</span></a></li>
            <li><a href="#"><span class="">SIGN UP</span></a></li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background:none;"><img src="img/en.png" class="img-circle img-responsive flag">EN <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="img/en.png" class="img-circle img-responsive flag">English</a></li>
                <li><a href="#"><img src="img/se.png" class="img-circle img-responsive flag">Swedish</a></li>
                <li><a href="#"><img src="img/de.png" class="img-circle img-responsive flag">German</a></li>
              </ul>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top:7em;">
                <h1 class="title"><span class="light white">What do you need done? Find it on WorkTasker</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <h3 class="subtitle"><span class="bold">Work. Assign. Done</span></h3>
            </div>
        </div>
        <!-- /.row -->
        <div class="row text-center" style="margin-top:3em;">
          <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4" style="margin-bottom:5em;">
            <form>
              <div class="row">
                <div class="col-xs-9">
                <div class="form-group text-center">
                  <input type="text" class="form-control search-box" id="search" style="height:42px;display:inline-block;" placeholder="Search...">
                </div>
              </div>
              <div class="col-xs-3" style="margin-left:-1em;">
                <button type="submit" class="btn" style="width:5em;height:42px;font-size:1.1em;display:inline-block"><span class="glyphicon glyphicon-search"></span></button>
              </div>
            </div><!-- /.row -->
            </form>
          </div>
        </div><!-- /.row -->
    </div>
    <!-- /.head container -->
  <div class="container-fluid c2" style="; margin:6em 0 -30em ;color:#212121;">
      <div class="row row-centered"><!-- Row 3-->

        <div class="row white-bg" style="padding:0 10%">
            <h1 class="col-xs-12 col-md-12 text-center light" style="font-size:3em; margin-top:1em;">What is WorkTasker?</h1>
            <div class="col-xs-12 col-sm-12 col-md-6 text-center" style="margin-bottom:2em">
              <div class='embed-container'><iframe src='https://player.vimeo.com/video/109050795' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
            </div>
            <div class="col-xs-12 col-md-6 light text-center">
            <p style="font-size:1.4em;margin:2em 0 1em;" class="text-left">WorkTasker is a trusted community marketplace for people and businesses to outsource tasks. Find local services or hire flexible staff in minutes.
            Whether it is handyman work, office admin, photography or anything else, you simply post a task
for FREE and then choose from rated, verified and reviewed people ready to work straight away</p>
            </div>
        </div><!-- /.row -->

        <div class="row light-grey" style="padding-bottom:1em">
          <div class="col-md-12">
            <h1 class="col-md-12 text-center light" style="font-size:3em;">How WorkTasker Works</h1>
          <div class="col-md-12 text-center">
            <div class="col-md-3 ju-panel text-center">
              <h1 class="bold" style="color:#2196F3;font-size:4em;">1</h1>
              <img class="img-responsive" src="img/ic-1.png" style="margin:-1em auto 0em;"/>
              <p class="light one-three">Tell us what you need
                <br>It's FREE to post</p>
            </div>
            <div class="col-md-3 ju-panel text-center">
              <h1 class="bold" style="color:#2196F3;font-size:4em;">2</h1>
              <img class="img-responsive text-center" src="img/ic-2.png" style="margin:-1em auto 0em;"/>
              <p class="light one-three">Receive offers from trusted<br> workers within minutes</p>
            </div>
            <div class="col-md-3 ju-panel text-center">
              <h1 class="bold" style="color:#2196F3;font-size:4em;">3</h1>
              <img class="img-responsive" src="img/ic-3.png" style="margin:-1em auto 0em;"/>
              <p class="light one-three">Choose the best person <br>for the job</p>
            </div>
          </div><!-- /panels -->
        </div>
      </div><!-- /.row -->
      <div class="row white-bg" style="margin-top:0em;">
          <h1 class="col-md-12 text-center light" style="font-size:3em;">Categories</h1>
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="card text-center">
              <div class="image">
                <img src="img/cat01.jpg">
              </div>
              <div class="content text-center">
                <div class="card-title light">Delivery</div>
              </div>
            </div>
          </div><!-- /.card3 -->

          <a  href="#">
            <div class="col-md-4">
              <div class="card text-center" style="padding-bottom:-2em;">
                <div class="image">
                  <img src="img/cat02.jpg">
                </div>
                <div class="content">
                  <div class="card-title light">Handyman</div>
                </div>
              </div>
            </div><!-- /.card3 -->
          </a>

          <a href="#">
          <div class="col-md-4">
            <div class="card text-center">
              <div class="image">
                <img src="img/cat03.jpg">
              </div>
              <div class="content">
                <div class="card-title light">Moving Help</div>
              </div>
            </div>
          </div></a><!-- /.card3 -->
        </div><!-- Top Card Row -->
        <div class="col-md-12" style="margin-bottom:1em;">
          <a href="#">
          <div class="col-md-4">
            <div class="card text-center">
              <div class="image">
                <img src="img/cat04.jpg">
              </div>
              <div class="content">
                <div class="card-title light">Party Planning</span></div>
              </div>
            </div>
          </div></a><!-- /.card3 -->
          <a href="#">
          <div class="col-md-4">
            <div class="card text-center">
              <div class="image">
                <img src="img/cat05.jpg">
              </div>
              <div class="content">
                <div class="card-title light">Services</span></div>
              </div>
            </div>
          </div></a><!-- /.card3 -->
          <a href="#">
          <div class="col-md-4">
            <div class="card text-center">
              <div class="image">
                <img src="img/cat06.jpg">
              </div>
              <div class="content">
                <div class="card-title light">Consulting</div>
              </div>
            </div>
          </div></a><!-- /.card3 -->
        </div><!-- /Bottom Card Row-->
      </div><!-- /.row -->

    <div class="row light-grey" style="height:5.5em;"></div>
      <div class="row white-bg">
        <footer class="col-md-12" style="padding:0">
          <div class="col-md-3 black-text">
            <a href="#"><p class="bold">DISCOVER</p></a>
            <a href="#"><p class="light">About WorkTasker</p></a>
            <a href="#"><p class="light">Privacy Policy</p></a>
            <a href="#"><p class="light">How Worktasker works</p></a>
          </div>
          <div class="col-md-3 black-text">
            <a href="#"><p class="bold">COMPANY</p></a>
            <a href="#"><p class="light">Terms & Conditions</p></a>
            <a href="#"><p class="light">FAQ</p></a>
            <a href="#"><p class="light">Reviews</p></a>
            <a href="#"><p class="light">Contact Us</p></a>
          </div>
          <div class="col-md-3 black-text">
            <a href="#"><p class="bold">JOIN US</p></a>
            <a href="#"><p class="light">Facebook</p></a>
            <a href="#"><p class="light">Twitter</p></a>
            <a href="#"><p class="light">YouTube</p></a>
            <a href="#"><p class="light">Google+</p></a>
            <a href="#"><p class="light">LinkedIn</p></a>
          </div>
          <div class="col-md-3 black-text">
            <a href="#"><p class="bold">CONNECT</p></a>
            <p class="light">Join our newsletter!</p>
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail3">E-mail address</label>
              <input type="email" class="form-control" id="exampleInputEmail3" style="width:200px;height:30px; border-radius:2px;" placeholder="E-mail address">
            </div>
            <p class="light">© 2011-2015 WorkTasker AB</p>
          </div>
        </footer>
      </div>
    </div>
    </div><!-- /.container -->
      </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
    var bgImageArray = ["header1.jpg", "header2.jpg", "header3.jpg"], base = "img/", secs = 5;
      bgImageArray.forEach(function(img){ new Image().src = base + img; });
      function backgroundSequence() {
        window.clearTimeout();
        var k = 0;
        for (var i = 0; i < bgImageArray.length; i++) {
            setTimeout(function(){
                document.documentElement.style.background = "url(" + base + bgImageArray[k] + ") no-repeat center center fixed";
                document.documentElement.style.backgroundSize ="cover";
                if ((k + 1) === bgImageArray.length) {
                  setTimeout(function() {
                    backgroundSequence() }, (secs * 1000))
                  } else { k++; }
            }, (secs * 1000) * i)
          }
      }
      backgroundSequence();
    </script>
    <script>
    (function ($) {
      $(document).ready(function(){

      // hide .navbar first
      $("#dropbar").hide();

      // fade in .navbar
      $(function () {
        $(window).scroll(function () {
                // set distance user needs to scroll before we fadeIn navbar
          if ($(this).scrollTop() > 570) {
            $('#dropbar').fadeIn();
          } else {
            $('#dropbar').fadeOut();
          }
        });


      });

    });
      }(jQuery));
    </script>

</body>

</html>
