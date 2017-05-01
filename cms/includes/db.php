<?php
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "zdravlje";

    $mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
    # future note to myselfČ: ONLY use mysqli_connect_error() for testing!When you release your site online you have to remove this function. Otherwise you are prone to SQL injection (hacking).
if ($mysqli->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset("utf8");
?>
