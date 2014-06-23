<?php
    function connect_db($user,$pass) {
        $server = 'localhost'; // this may be an ip address instead
        //$user = 'roman';
        //$pass = 'roman';
        $database = 'admins';
        $connection = new mysqli($server, $user, $pass, $database);

        return $connection;
}
?>