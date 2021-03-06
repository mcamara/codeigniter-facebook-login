<!DOCTYPE html>
<html lang="es">
  <head>
  	<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="chrome=1">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title><?php echo ucfirst($title) ?></title>
    <meta name="description" content="Login">
    <meta name="author" content="Marc Camara">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=site_url("images/favicon.ico")?>">
    <!—[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]—>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <?php /* <script src="lib/jquery-1.4.js"></script> */?>
    <script src="js/bootstrap.js"></script>
  </head>
  
	<body>
    <header>
      <div class="header-content">
        Facebook login with codeigniter
      </div>
    </header>
    <div class="container">
      <?php
        if($this->session->flashdata('alert')){ ?>
          <div class="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?=$this->session->flashdata('alert')?>
          </div>
        <?php
        }
      ?>