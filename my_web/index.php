<?php 

include("data/cookies.php");

$peopleTexts = [

    [
        "name" => "",
        "text" => "Every batch is a little different, and I think that’s the beauty of handmade cookies. No shortcuts—just honest, real baking.",
    ],
    [
        "name" => "",
        "text" => "I’m all about tradition. There’s something special about recreating recipes that have been loved for generations.",
    ],
    [
        "name" => "",
        "text" => "My favorite part of baking? Seeing someone take a bite and smile. That’s when I know all the hard work was worth it.",
    ],
    [
        "name" => "",
        "text" => "I love experimenting with flavors—every batch is a chance to try something new. But no matter the recipe, quality ingredients always come first.",
    ],
    [
        "name" => "",
        "text" => "For me, it’s all about balance. A cookie should be soft in the center, with just the right amount of crunch on the edges. That’s my baking philosophy.",
    ]
]
?>





<?php include("header.php")?>

    <main>
        <section id="heroS">
            <div class="container" id="hero">
            <div id="heroImg">
                <h1>Cookies so good, you won’t want to share!</h1>
                <img src="images/heroCookie1.png">
                <div><img src="images/heroCookie2.png"></div>
            </div>
            <div id="heroBottom">
                <h2>Craving cookies? Our freshly baked treats are just a click away—perfect for any occasion or simply to brighten your day!</h2>
                <div id="heroButtons">
                    <button class="buttonBrown">Order Now</button>
                    <button class="buttonBrown">Shop Our Cookies</button>
                </div>
            </div>
            </div>
        </section>


       <section id="avatar">
        <div class="slideshowContainer">
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

            <div class="slidesWrapper">
            <?php for ($i = 0; $i < 5; $i++): ?>
            <div class="mySlides fade">
                <div class="avatarContenr">
                <img src="images/person<?php echo $i ?>.png" class="avatarImg">
                <blockquote>
                    <p>"<?php echo $peopleTexts[$i]["text"] ?>"</p>
                    <p>-<?php echo $peopleTexts[$i]["name"] ?></p>
                </blockquote>
                </div>
            </div>
            <?php endfor; ?>
            </div>

            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        </section>



            
        <section id="menuS">
            <div class="container" id="menu">
            <h3>BEST SELLERS</h3>
            <div id="cookies">
            <?php for ($i=1; $i < 7; $i++): ?>
                <div class="cookie">
                    <img class="ignoreCookie" src="images/cookie<?php echo (string) $dictCookie[$i]["id"]; ?>.png">
                    <h4><?php echo($dictCookie[$i]["name"]) ?></h4>
                    <div class="price">
                        <p class="from">From:</p>
                        <p><?php echo($dictCookie[$i]["price7"]) ?>€</p>
                    </div>
                    <a href="product.php?product=<?php echo $i?>" class="buttonWhite">Buy</a>
                </div>
                <?php endfor;?>
            </div>
            </div>
        </section>


        <section id="mixS">
            <div class="container" id="mix">
            <img src="images/cookieBox.png"  class="ignoreMix">
            <div id="mixText">
                <h3>Can’t decide?</h3>
                <h4>Your Box, Your Rules—Customize Your Perfect Cookie Mix!</h4>
                <button class="buttonBrown">Start Building</button>
            </div>
            </div>
        </section>

        <section id="joinS">
            <div class="container" id="join">
                <form action="#" method="post" id="joinPost">
                    <div id="joinText">
                        <h3><em>Join the Cookie Club <span style="font-style: normal;">🍪</span></em></h3>
                        <p><strong>Get 10% off your first order,</strong> restock reminders, special offers</p>
                    </div>
                    <div id="joinSub">
                        <input type="email" placeholder="email@gmail.com">
                        <button type="submit">Sign-Up</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
    <img src="images/vector4.png">
    <?php include("footer.php")?>
