<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "es":
        //echo "PAGE ES";
        include("lang.es.php");
        break;
    case "en":
        //echo "PAGE EN";
        include("lang.en.php");
        break;
    default:
        //echo "PAGE EN - Setting Default";
        include("lang.en.php");//include EN in all other cases of different lang detection
        break;
}
?>
<html lang='en'>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="<?php echo $lang['DESC']?>" />
<meta name="Author" content="Juan Ochoa. Venezuela. Octubre 2015.">
<meta name="theme-color" content="#92ff05">
<title><?php echo $lang['TITLE']?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <?php include_once("analytics.php") ?>
  <div class="container" style="">
    <div class="row main">
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="color:#000;">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title bold" id="myModalLabel"><?php echo $lang['FORM']?></h4>
            </div>
            <div class="modal-body">
              <form style="padding:0 10%" action="send.php" method="post" id="form" name="form">
                <div class="form-group">
                  <label for="name"><?php echo $lang['NAME']?> (*)</label>
                  <input type="text" class="form-control" name="name" id="name" value="" required>
                </div>
                <div class="form-group">
                  <label for="company"><?php echo $lang['COMPANY']?></label>
                  <input type="text" class="form-control" name="company" id="company" value="">
                </div>
                <div class="form-group">
                  <label for="email">Email (*)</label>
                  <input type="email" class="form-control" name="email" id="email" value="" required>
                </div>
                <label for="description"><?php echo $lang['MESSAGE']?> (*)</label><br/>
                  <textarea style="width:100%;" name="description" id="description" required></textarea><br/>
                <div class="text-center"><button name='submitted' type="submit" class="btn btn-default">SUBMIT</button></div>
                <div class="text-center"><p>(*) <?php echo $lang['FIELDS']?></p></div>
              </form>
            </div>
          </div>
        </div>
      </div><!-- /Modal -->
      <div class='col-xs-12' style="padding-top:2em;">
        <img src="img/logo.png" class="img-responsive center-block header-img" style="width:70%">
      </div>
      <div class='col-xs-12'>
        <h1 class="white light text-center" style="margin:0 0 1em 0;"><?php echo $lang['HEADER']?></h1>
      </div>
      <div class='co-xs-12 center-block text-center'>
        <button type="button" class="btn-lg btn" data-toggle="modal" data-target="#myModal" style="color:#212121;">
          <span class="glyphicon glyphicon-envelope"></span> <?php echo $lang['CONTACT']?>
        </button>
      </div>
      <div class='col-xs-12 col-md-4 center-block file'>
        <a href="worktasker/"><img src='img/p1.jpg' class="img-responsive"/>
        <div class="mask"></div>
      </div>
      <div class='col-xs-12 col-md-4 center-block file'>
        <a href="payday/"><img src='img/p2.jpg' class="img-responsive"/>
      </div>
      <div class='col-xs-12 col-md-4 center-block file'>
        <a href="app/"><img src='img/p3.jpg' class="img-responsive"/></a>
      </div>
      <div class="col-md-12" style="padding:0 21%;margin-top:2em;">
        <div class='col-xs-4 col-md-4'>
          <a href="http://facebook.com/jlochoa1"><img src='img/i1.png' class="img-responsive center-block" /></a>
        </div>
        <div class='col-xs-4 col-md-4 '>
          <a href="http://twitter.com/_juanochoa"><img src='img/i2.png' class="img-responsive center-block"/></a>
        </div>
        <div class='col-xs-4 col-md-4 center-block'>
          <a href="http://google.com/+JuanOchoa21"><img src='img/i3.png' class="img-responsive center-block"/></a>
        </div>
      </div> <!-- /social -->

      <div class='col-xs-12 center-block text-center' style="margin-top:2em;">
        <a href="" data-toggle="modal" data-target="#myModal" style="color:#212121;"><p class="green-text">
          <span class="glyphicon glyphicon-envelope"></span> <?php echo $lang['CONTACT']?>
        </p></a>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
