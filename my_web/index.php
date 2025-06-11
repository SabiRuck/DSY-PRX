<?php 

include("data/cookies.php");

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

        </section>
            
        <section id="menuS">
            <div class="container" id="menu">
            <h3>BEST SELLERS</h3>
            <div id="cookies">
                <div class="cookie">
                    <img class="ignoreCookie" src="images/cookie<?php echo (string) $dictCookie["ChocolateChip"]["id"]; ?>.png">
                    <h4><?php echo($dictCookie["ChocolateChip"]["name"]) ?></h4>
                    <div class="price">
                        <p class="from">From:</p>
                        <p><?php echo($dictCookie["ChocolateChip"]["price7"]) ?>€</p>
                    </div>
                    <button class="buttonWhite">Buy</button>
                </div>

                <div class="cookie">
                    <img class="ignoreCookie" id="brownie" src="images/cookie<?php echo (string) $dictCookie["Brownie"]["id"]; ?>.png">
                    <h4><?php echo($dictCookie["Brownie"]["name"]) ?></h4>
                    <div class="price">
                        <p class="from">From:</p>
                        <p><?php echo($dictCookie["Brownie"]["price7"]) ?>€</p>
                    </div>
                    <a href="product.php?product=ChocolateChip" class="buttonWhite">Buy</a>
                </div>

                <div class="cookie">
                    <img class="ignoreCookie" src="images/cookie<?php echo (string) $dictCookie["BirthdayCake"]["id"]; ?>.png">
                    <h4><?php echo($dictCookie["BirthdayCake"]["name"]) ?></h4>
                    <div class="price">
                        <p class="from">From:</p>
                        <p><?php echo($dictCookie["BirthdayCake"]["price7"]) ?>€</p>
                    </div>
                    <button class="buttonWhite">Buy</button>
                </div>

                <div class="cookie">
                    <img class="ignoreCookie" src="images/cookie<?php echo (string) $dictCookie["Raspberry"]["id"]; ?>.png">
                    <h4><?php echo($dictCookie["Raspberry"]["name"]) ?></h4>
                    <div class="price">
                        <p class="from">From:</p>
                        <p><?php echo($dictCookie["Raspberry"]["price7"]) ?>€</p>
                    </div>
                    <button class="buttonWhite">Buy</button>
                </div>

                <div class="cookie">
                    <img class="ignoreCookie" src="images/cookie<?php echo (string) $dictCookie["CaramelLotus"]["id"]; ?>.png">
                    <h4><?php echo($dictCookie["CaramelLotus"]["name"]) ?></h4>
                    <div class="price">
                        <p class="from">From:</p>
                        <p><?php echo($dictCookie["CaramelLotus"]["price7"]) ?>€</p>
                    </div>
                    <button class="buttonWhite">Buy</button>
                </div>

                <div class="cookie">
                    <img class="ignoreCookie" src="images/cookie<?php echo (string) $dictCookie["PeanutButter"]["id"]; ?>.png">
                    <h4><?php echo($dictCookie["PeanutButter"]["name"]) ?></h4>
                    <div class="price">
                        <p class="from">From:</p>
                        <p><?php echo($dictCookie["PeanutButter"]["price7"]) ?>€</p>
                    </div>
                    <button class="buttonWhite">Buy</button>
                </div>
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
