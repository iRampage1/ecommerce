<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Register Form</title>
  </head>
  <body>


<div class = "col-lg-5 col-lg-offset-2">

    <h1>Register Form</h1>
    <p>Fill up all fields</p>

<?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success'];  ?></div>
    <?php
} ?>
<?php echo validation_errors('<div class="alert alert-danger">','</div>' ); ?>

    <form action="" method="POST">
      <div class="form-group">
        <label for="username">USERNAME:</label>
        <input class="form-control" name="username" id="username" type= "text">
      </div>

      <div class="form-group">
        <label for="email">EMAIL:</label>
        <input class="form-control" name="email" id="email" type= "text">
      </div>

      <div class="form-group">
        <label for="password" >PASSWORD:</label>
        <input class="form-control" name="password" id="password" type= "password">
      </div>

      <div class="form-group">
        <label for="password" >CONFIRM PASSWORD:</label>
        <input class="form-control" name="password" id="password" type= "password">
      </div>

      <div class="form-group">
        <label for="gender" >GENDER:</label>
        <select class="form-control" id="gender" name="gender">
        <option value="Male">MALE</option>
        <option value="Female">FEMALE</option>
        </select>
      </div>
      <div class="form-group">
        <label for="phone" >PHONE:</label>
        <input class="form-control" name="phone" id="phone" type= "text">
      </div>

      <div>
        <button class="btn btn-primary" name="register">REGISTER</button>
      </div>

    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/css/bootstrap.min.js"></script>
  </body>
</html>