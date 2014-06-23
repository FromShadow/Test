<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/old_style.css">
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8">
</head>
<body>
<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
?>
<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="form-box">
            <form action="" method="">
                <input name="user" type="text" placeholder="Користувач">
                <input type="password" placeholder="Пароль">
                <button class="btn btn-info btn-block login" type="submit">Увійти</button>
            </form>
        </div>
    </div>

</div>

<?php


$app = new \Slim\Slim();
$app->get('/', function () use ($app) {
    require_once 'mysql.php';
    $db = connect_db("roman","roman");
    $result = $db->query('SELECT id, ClearPass FROM authentificationData;');
    while ($row = $result->fetch_array(MYSQL_ASSOC)){
        $data[] = $row;
    }
    $app->render('friends.php', array(
            'page_title' => "Your Friends",
            'data' => $data
        )
    );
});
$app->run();
?>
</body>
</html>