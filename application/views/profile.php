<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <title>LOGIN Form</title>
  </head>
  <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RBA</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="product">PRODUCT MANAGEMENT</a></li>
      <li><a href="#">PRODUCT STORE</a></li>
       <li><a href="#">CART</a></li>
        <li><a href="#">CHECKOUT</a></li>
        <li><a href="#">SALES REPORT</a></li>
        
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url(); ?>index.php/auth/logout">LOGOUT</a></li>
    </ul>
  </div>
</nav>
<div class = "col-lg-8 col-lg-offset-2" align="center">

    <h1>WELCOME MA NIGGA</h1>                                  
     <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success'];  ?></div>
    <?php
    } ?>
 
  HELLO, <?php echo $_SESSION['username']; ?>

    <br><br>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/css/bootstrap.min.js"></script>
  </body>
</html>