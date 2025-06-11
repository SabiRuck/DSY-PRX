<?php 
require "database.php";

if(isset($_GET["id"]) and is_numeric($_GET["id"]))
{

    $user_id = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id = $user_id";
    //$sql = "SELECT * FROM users WHERE id =".$_GET['id'];


    $result = mysqli_query($conn, $sql);

    //vytiahne len 1 asociativne pole s nazvami toho 1 uzivatela
    $one_user = mysqli_fetch_assoc($result);

}


//var_dump($one_user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>One user</title>
</head>
<body>

<main>
    <header></header>
    <main>
    <?php if($one_user === NULL): ?>
    <p>User does not exist!!!</p>
    <?php else: ?>
    <h1> User detail:</h1>
    <h2><?php echo $one_user['first_name']." ".$one_user['last_name'] ?></h2>

    <h3>vek: <?php echo $one_user['age']?></h3>
    <?php endif; ?>
    <a href="all_users.php">Back</a>
    </main>

    <footer>
    </footer>
    
</body>
</html>