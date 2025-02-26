<?php



print_r($_POST);

if($_SERVER['REQUEST_METHOD'] === "POST")
{
    if(isset($_POST["cislo1"]) && isset($_POST["cislo2"]))
    {
        $cislo1 = $_POST["cislo1"];
        $cislo2 = $_POST["cislo2"];
        $sucet = $cislo1 + $cislo2;
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
        <fieldset>
            <legend>Zadajte cisla</legend>
            <label for="cislo1">Zadaj cislo 1:</label>
            <input type="text" name="cislo1" id="cislo1"><br><br>

            <label for="cislo2">Zadaj cislo 2:</label>
            <input type="text" name="cislo2" id="cislo2"><br><br>

            <input type="submit" value="Scitaj">
        </fieldset>
    </form>

    <strong><?php echo("Sucet tychto cisel je: $sucet");?></strong>
</body>
</html>