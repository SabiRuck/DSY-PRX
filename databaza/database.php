<?php
//udaje o nasej databaze
$db_host = "localhost";
$db_user = "admin";
$db_password = "admin1234";
$db_name = "db_user";
//toto nas nasu databazu pripoji - takze k nej referujeme ked ju chceme pouzit a robit s nou
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

//toto zistuje ze ci bol nejaky error ked sme sa snazili pripojit
if(mysqli_connect_error())
{
    echo mysqli_connect_error();
    exit;
}
//ukaze sa ak error nebol
//echo "Database is connected";

?>