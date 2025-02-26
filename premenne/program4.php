<?php

if($_SERVER["REQUEST_METHOD"]=== "POST")
{
    if(isset($_POST["pocet"]) && $_POST["pocet"] > 0)
    {
        $pocet = $_POST["pocet"];

        $list = [];
    
        for ($i=0; $i < $pocet; $i++) 
        { 
            $list[] = rand(10, 100);
        }

        foreach ($list as $value) 
        {
            echo("$value, ");
        }
    }
    else
    {
        echo("Wrong Input!");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="pocet" id="pocet">
        <input type="submit" value="Odoslat"> 
    </form>



</body>
</html>