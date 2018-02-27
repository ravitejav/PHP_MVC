<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Error </title>
  </head>
  <body>
    <center><h1><?php if(isset($_SESSION['errornameof'])){echo $_SESSION['errornameof']; } ?></h1></center>
  </body>
</html>
