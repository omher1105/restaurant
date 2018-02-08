<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <a class="navbar-brand" href="#"><img src="http://donnasrestaurant.com/images/logo.png" width="8%">Restaurant L' Giovanne</a>

      <!-- <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
	    </div> -->
    </nav>
    <?php $menus = ['Bienvenidos','Nosotros','Platos de Fondo','Reservas','Ubicacion','Contacto']; ?>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar" style="background-color: #841818;">
          <ul class="nav nav-pills flex-column">
            <!-- <li class="nav-item">
              <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
            </li> -->
            <?php foreach($menus as  $key => $menu){ ?>
            <li class="nav-item" style="border-bottom: 1px solid #fff">
          		<?php if($key == 2){ ?>
              		<a class="nav-link" href="menu<?php echo $key; ?>.php" onclick="listado()" style="color: #fff;font-size: 20px;font-weight: 600;"><?php echo $menu; ?></a>
              	<?php }else { ?>
              		<a class="nav-link" href="menu<?php echo $key; ?>.php" style="color: #fff;font-size: 20px;font-weight: 600;"><?php echo $menu; ?></a>
              	<?php }?>
            </li>
           <?php } ?>
          </ul>
        </nav>
		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">	