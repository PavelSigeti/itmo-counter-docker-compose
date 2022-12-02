<?php

echo $_SERVER['HTTP_USER_AGENT'];

echo '<br>';

try {
    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=counter', 'root', 'root');
    $count = $dbh->prepare("INSERT INTO counter.data (`datetime`, `client_info`) VALUES (now(), ?) ");

    $response = $count->execute([ $_SERVER['HTTP_USER_AGENT'] ]);

    echo 'Increment: ' . $dbh->lastInsertId();

} catch (PDOException $e) {
    print "Error!:".$e->getMessage()."<br/>";
    die();
}