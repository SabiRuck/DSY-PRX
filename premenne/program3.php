<?php

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(isset($_POST["pocet"]))
    {
        $pocet = (int)$_POST["pocet"];
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
        <label for="">Pocet: </label>
        <input type="text" name="pocet" id="pocet">
        <input type="submit" value="Odoslat"><br><br>
    </form>
    <?php 
        $a = 0;
        for ($i=0; $i < $pocet; $i++)
        {
            if($a == 0)
            {
                echo("<img src=\"cat.jpg\" alt=\"cat\" title=\"cat\" width=\"200px\"> ");
                $a = 1;
            }
            else
            {
                echo("<img src=\"cat2.png\" alt=\"cat2\" title=\"cat2\" width=\"200px\"> ");
                $a = 0;
            }
            
        } 
    ?>
        
    
</body>
</html>