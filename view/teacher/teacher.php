<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teacher Login</title>
  </head>
  <body>
    <div class="">
      <form action="<?php echo URL; ?>teacher/login" method="post">
        <input type="text" name="usernameoft" placeholder="Username"><br>
        <input type="password" name="passvalue" placeholder="Password"><br>
        <input type="submit" value="Login">
      </form>
    </div>
    <div class="">
      <form action="<?php echo URL;?>teacher/signup" method="post">
        <input type="text" name="usernameoft" placeholder="Choose the username">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="" value="">
      </form>
    </div>
  </body>
</html>
