<?php 

$actualPage =  basename(($_SERVER["REQUEST_URI"]));
$actualPage = str_replace(".php", "", $actualPage);

include("includes\header.php");
?>

<main>
        <h1>About</h1>

        <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Enim iste, corporis repellat libero provident pariatur 
             reiciendis quidem sint fugit officiis qui quaerat vitae 
             doloribus, delectus suscipit cumque harum fugiat! Fugiat?
        </p>
        <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Enim iste, corporis repellat libero provident pariatur 
             reiciendis quidem sint fugit officiis qui quaerat vitae 
             doloribus, delectus suscipit cumque harum fugiat! Fugiat?
        </p>
        <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Enim iste, corporis repellat libero provident pariatur 
             reiciendis quidem sint fugit officiis qui quaerat vitae 
             doloribus, delectus suscipit cumque harum fugiat! Fugiat?
        </p>
    </main>

    <?php include("includes/footer.php")?>