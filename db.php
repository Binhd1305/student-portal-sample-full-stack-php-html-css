<?php
    $dsn = 'mysql:host=localhost;dbname=created';
    $username = 'privateuser';
    $password = 'abcd1';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        include('db_error.php');
        exit();
    }
?>