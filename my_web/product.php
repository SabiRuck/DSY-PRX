<?php
include("data/cookies.php");

if (!isset($_GET['product']) || !array_key_exists($_GET['product'], $dictCookie)) {
    die("Invalid product.");
}

$productKey = $_GET['product'];
$product = $dictCookie[$productKey];

$pieces = 7;
if (isset($_GET['pieces'])) {
    $pieces = (int) $_GET['pieces'];
}
?>

<?php include("header.php") ?>

<main>
    <section id="cookieMainS">
        <div class="container cookieMain">
            <img src="images/group<?php echo $product["id"]; ?>.png" alt="Image of <?php echo $product["name"]; ?>">

            <form method="get" id="cookiePage">
                <h3><?php echo $product["name"]; ?></h3>

                <!-- Keep product in URL -->
                <input type="hidden" name="product" value="<?php echo htmlspecialchars($productKey); ?>">

                <div class="ammount pieces-form">
                    <button 
                        type="submit" 
                        name="pieces" 
                        value="7"
                        class="piece-option <?php if ($pieces == 7) echo 'selected'; ?>"
                    >
                        7 pieces
                    </button>

                    <button 
                        type="submit" 
                        name="pieces" 
                        value="12"
                        class="piece-option <?php if ($pieces == 12) echo 'selected'; ?>"
                    >
                        12 pieces
                    </button>
                </div>

                <div class="price">
                    <h4><?php echo ($pieces == 12) 
                        ? $product["price12"] 
                        : $product["price7"]; ?> €</h4>
                </div>

                <button type="submit" name="add" value="1"><h4>ADD TO CART</h4></button> 
            </form>
        </div>
    </section>

    <section>
        <div class="cookieInfo">
            <div>
                <h5>Description</h5>
                <p><?php echo $product["description"]; ?></p>
            </div>

            <div>
                <p>Contains:</p>
                <ul>
                    <?php
                    foreach ($product["allergens"] as $allergen) {
                        echo "<li>" . htmlspecialchars($allergen) . "</li>";
                    }
                    ?>
                </ul>
                <p>
                    Our desserts are made onsite and may come into contact with different allergens during production.
                    Please be advised that any of our products may contain allergens including peanuts, tree nuts, milk, eggs, wheat, soy, and sesame.
                </p>
            </div>
        </div>
    </section>
</main>

<footer>
    <img src="images/vector5.png" alt="Footer decoration">
    <?php include("footer.php") ?>
</footer>
