<?php

DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD',"root");
DEFINE('DB_HOST',"localhost");
DEFINE('DB_NAME',"CONTACTS");

$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die("Couldn't connect to DB".mysqli_error());
?>
