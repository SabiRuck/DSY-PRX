
<?php 

include("data/cookies.php");


?>

<?php include("header.php")?>

<main id="menuPage">
    <section id="menuPageS">
        
        <div id="pageCookies">
            <?php for ($i=1; $i < count($dictCookie)+1; $i++): ?>
                <div class="pageCookie">
                    <img class="pageIgnoreCookie" src="images/cookie<?php echo (string) $dictCookie[$i]["id"]; ?>.png">
                    <h4><?php echo($dictCookie[$i]["name"]) ?></h4>
                    <div class="pagePrice">
                        <p class="pageFrom">From:</p>
                        <p><?php echo($dictCookie[$i]["price7"]) ?>€</p>
                    </div>
                    <a href="product.php?product=<?php echo $i?>" class="buttonWhite">Buy</a>
                </div>
                <?php endfor;?>
        </div>



    </section>
</main>





<footer>
    <img src="images/vector5.png" id="productVector">
    <?php include("footer.php") ?>
</footer>
</body>
</html>