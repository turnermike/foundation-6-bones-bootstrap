<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

/* ==========================================================================
   PDO
   ========================================================================== */

// get db creds from environment variables
$host =     getenv('MYSQL_HOST');
$db =       getenv('MYSQL_DATABASE');
$user =     getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

// $host = 'localhost';
// $db = 'f6bb_website';
// $user = 'f6bb';
// $password = 'N#skj&98SR%Jje';

echo '<br>host: ' . $host;
echo '<br>db: ' . $db;
echo '<br>user: ' . $user;
echo '<br>password: ' . $password;
echo '<br><br>';
// echo 'testing';

$dsn = 'mysql:dbname=' . $db . ';host=' . $host;
$user = $user;
$password = $password;

try {
    $dbh = new PDO($dsn, $user, $password);
    echo '<br>Connection successfull.<br><br>';
} catch (PDOException $e) {
    echo '<br>Connection failed: ' . $e->getMessage();
}

foreach($dbh->query("Show variables like '%char%'") as $row) {
    printf("%s: %s<br />", htmlspecialchars($row[0]), htmlspecialchars($row[1]));
}


/* ==========================================================================
   mysql_connect
   ========================================================================== */



// //$link = mysql_connect('localhost', 'root', 'root');
// $link = mysql_connect('steelhousedbcluster.cluster-cseokarizhz1.us-east-1.rds.amazonaws.com', 'realinteractive', 'O#43Sf%!aE987');

// if (!$link) {
//     die('<br />Could not connect: ' . mysql_error());
// }
// echo '<br />Connected successfully';


// $db_selected = mysql_select_db('steelhouse_website', $link);

// if(!$db_selected){
//  die('<br />Could not use backbone_address_book: ' . mysql_error());
// }

// echo '<br />Selected DB Successfully';


// mysql_close($link);





