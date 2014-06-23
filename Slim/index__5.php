<!DOCTYPE html>
<html>
 <head>
     <link rel="stylesheet" href="style/bootstrap.min.css">
     <link rel="stylesheet" href="style/style.css">
     <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
   <title>test</title>
   <meta charset="utf-8">
 </head>
 <body>
 <?php
    require 'Slim/Slim.php';
    \Slim\Slim::registerAutoloader();
 $app = new \Slim\Slim();
 $app->get('/hello/:name', function ($name) {
     echo "Hello, $name";
 });
 $app->run();
 ?>
 </body> 
</html>