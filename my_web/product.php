<?php
$productKey = $_GET['product'];
$product = $dictCookie[$productKey];
include("data/cookies.php");

?>
<?php echo $dictCookie[$product]["name"]?>
<?php include("header.php")?>

    <main>
        <section>
            
            <img src="images/group<?php echo (string) ($dictCookie[$product]["id"])?>.png">
            <div id="cookiePage">
                <h3><?php echo (string) ($dictCookie[$product]["name"]) ?></h3>
                <div class="ammount">
                    
                </div>
                <div class="price">
                    <h4><?php echo (string) ($dictCookie[$product]["price7"]) ?></h4>
                </div>
                <button>ADD TO CARD</button>
            </div>
        </section>
        <section class="cookieInfo">
            <div>
                <h5>description</h5>
                <p><?php echo (string) ($dictCookie[$product]["description"])?></p>
            </div>
            <div>
                <p>Contains:</p>
                <ul>
                    <?php echo (string) ($dictCookie[$product]["allergens"])?>
                </ul>
                <p>Our desserts are made onsite and may come into contact with different allergens during production. Please be advised that any of our products may contain allergens including peanuts, tree nuts, milk, eggs, wheat, soy, and sesame.</p>
            </div>
        </section>
    </main>
    <footer>
        <img src="images/vector5.png">
        <?php include("footer.php")?>
