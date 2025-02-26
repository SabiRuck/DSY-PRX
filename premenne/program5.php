<?php

    function checkInput($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        if(isset($_POST["name"]) && !empty($_POST["name"]))
        {
            $firstName = checkInput($_POST["name"]);
            echo $firstName;
        }
        else
        {
            echo "Nezadal si meno";
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
    <form action="" method="POST">
        <label for="name">Meno: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="secondname">Priezvisko:</label>
        <input type="text" name="secondname" id="secondname">
        <br><br>

        <label for="name">Pohlavie:</label>
        <select name="pohlavie" id="">
            <option value="1">muz</option>
            <option value="2">zena</option>
            <option value="3">ine</option>
        </select>
        <input type="submit" value="Odoslat"> 
    </form>
</body>
</html>