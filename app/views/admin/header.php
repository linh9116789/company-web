<h2></h2>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">
      <title>Dashboard Template for Bootstrap</title>
      <!-- Bootstrap core CSS -->
      <link href="<?php echo BASE_URL ?>/public/template/css/bootstrap.min.css" rel="stylesheet">
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <link href="<?php echo BASE_URL ?>/public/template/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="<?php echo BASE_URL ?>/public/template/css/dashboard.css" rel="stylesheet">
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
      <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <script src="<?php echo BASE_URL ?>/public/template/js/ie-emulation-modes-warning.js"></script>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button> -->
               <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo BASE_URL ?>/login/logout">????ng xu???t</a></li>
               </ul>
               <!-- <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo BASE_URL ?>/login/logout">Xin ch??o !</a></li>
               </ul> -->
            </div>
         </div>
      </nav>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
               <ul class="nav nav-sidebar">
                  <li class="active"><a href="<?php echo BASE_URL ?>/login/dasboard">T???ng quan <span class="sr-only">(current)</span></a></li>
                  <li><a href="<?php echo BASE_URL ?>/category/index">Danh m???c</a></li>
                  <li><a href="<?php echo BASE_URL ?>/product/index">S???n ph???m</a></li>
                  <li><a href="<?php echo BASE_URL ?>/order/index">????n h??ng</a></li>
                  <li><a href="<?php echo BASE_URL ?>/artisan/index">Tin t???c</a></li>
               </ul>
            </div>