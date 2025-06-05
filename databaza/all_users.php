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
echo "Database is connected";

//tento prikaz chceme poslat na databazu
$sql = "SELECT * FROM users";
//toto posle nasu poziadavku a zapiseme si to co nam prislo spat
$result = mysqli_query($conn, $sql);
//toto nam da tie nase hodnoty v normalneho stavu(list the budu pekne vidno mena atd)
// dat si "var_dump($all_users);" a uvidis to
$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

//var_dump($all_users);
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All users</title>
</head>
<body>
    <header></header>
    <main>
        <h1>All users</h1>
        <br>
        <?php 
        //toto zisti ci nahadou nieje ta databaza prazdna, potom zvoli tej
        if(empty($all_users)):?>
            <p> database is empty</p>
        
        <?php 
        //v tomto podtym som zmatena sry daj to do chatu
        else:?>
            <ul>
            <?php foreach($all_users as $oneUser): ?>
                <li><?php echo $oneUser["first_name"]." ".$oneUser["last_name"];?></li>

                <?php endforeach;?>
            </ul>
            <?php endif;?>


        <a href="index.php">My database</a>

    </main>

    <footer>
    </footer>

    
</body>
</html>