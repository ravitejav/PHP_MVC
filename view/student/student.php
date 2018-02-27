<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="<?php echo URL; ?>style/css/main.css" rel="stylesheet">
  </head>
  <body>
    <form action="<?php echo URL;?>home/login" class="login-form-1" method="POST">
      <div class="container">
        <input type="text" name="username" placeholder="User name" required="required"><br />
        <input type="password" name="passvalue" placeholder="Password" required="required"><br />
        <input type="submit" value="LOGIN">
      </div>
    </form>
  </body>
</html>
