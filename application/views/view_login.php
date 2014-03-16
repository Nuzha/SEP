<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'css/signin.css'?>" rel="stylesheet">
  </head>

  <body>

      <?php
      
/*        echo validation_errors(); 
        echo form_open();
        
        echo '<p>';
        echo form_input('email');
        echo '/p';
        
        echo '<p>';
        echo form_password('password');
        echo '/p';
        
        echo '<p>';
        echo form_submit('login_submit', 'Login');
        echo '/p';
        
        echo form_close();
  */    
      ?>
      

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        
        <?php 
            echo form_open('main/login_validation'); 
            echo validation_errors(); 
        ?>
        
        <input type="text" name="username" id="username" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign in</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>
