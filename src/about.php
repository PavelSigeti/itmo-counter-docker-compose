<h3>Hello, Warpion</h3><b>Hostname: <?=$_SERVER['HTTP_HOST']?></b><br>
<?php

try {
    $dbh = new PDO('mysql:host=mysql;port=3306;dbname=counter', 'root', 'root');
    $dbh->query('SELECT count(*) FROM counter.data');
    $count = $dbh->query('SELECT count(*) FROM counter.data')->fetchColumn();

    echo 'Counter: ' . $count;
} catch (PDOException $e) {
    print "Error!:".$e->getMessage()."<br/>";
    die();
}