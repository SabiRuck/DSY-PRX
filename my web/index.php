<?php

/*
// Accessing a list
print_r($dict["fruits"]); // Prints the list of fruits

// Accessing an element
echo $dict["vegetables"][1]; // Output: broccoli

// Adding an item to a list
$dict["fruits"][] = "mango";

// Adding a new list
$dict["dairy"] = ["milk", "cheese"];
*/

$dictCookie = [
    "ChocolateChip" => [
        "id" => 1,
        "name" => "Chocolate Chip Cookie",
        "price7" => 8.75,
        "price12" => 15.00,
        "allergens" => ["Gluten", "Eggs", "Butter"],
        "description" => "A soft, chewy classic filled with melty chocolate chips, perfect for every chocolate lover."
    ],
    "Brownie" => [
        "id" => 2,
        "name" => "Brownie Cookie",
        "price7" => 10.15,
        "price12" => 17.40,
        "allergens" => ["Gluten", "Eggs", "Butter"],
        "description" => "Rich and fudgy with a brownie-like texture, offering the ultimate chocolate experience."
    ],
    "BirthdayCake" => [
        "id" => 3,
        "name" => "Birthday Cake Cookie",
        "price7" => 10.50,
        "price12" => 18.00,
        "allergens" => ["Gluten", "Almonds"],
        "description" => "A soft, vanilla cookie with colorful sprinkles, perfect for celebrating every day, vegan-friendly and delicious!"
    ],
    "Raspberry" => [
        "id" => 4,
        "name" => "Raspberry Cookie",
        "price7" => 10.85,
        "price12" => 18.60,
        "allergens" => ["Gluten", "Eggs", "Butter"],
        "description" => "A chewy cookie bursting with tart raspberries, offering a sweet and tangy flavor in every bite."
    ],
    "CaramelLotus" => [
        "id" => 5,
        "name" => "Caramel Lotus Cookie",
        "price7" => 11.90,
        "price12" => 20.40,
        "allergens" => ["Gluten", "Eggs", "Butter"],
        "description" => "Crisp and spiced, infused with the sweet, caramelized flavor of Lotus Biscoff for an irresistible treat."
    ],
    "PeanutButter" => [
        "id" => 6,
        "name" => "Peanut Butter Cookie",
        "price7" => 9.80,
        "price12" => 16.80,
        "allergens" => ["Gluten", "Eggs", "Butter", "Peanuts"],
        "description" => "A soft and chewy cookie made with creamy peanut butter and a hint of vanilla."
    ],

];


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Inria Serif' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header">

            <img src="images/logo.png">
            <ul>
                <li><a width="64px">Menu</a></li>
                <li><a width="135px">Custom Box</a></li>
                <li><a>Reviews</a></li>
                <li><a>About Us</a></li>
                <li><a>Contact</a></li>
                <li id="hIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#B78D5E" d="M21 9h-1.42l-3.712-6.496l-1.736.992L17.277 9H6.723l3.146-5.504l-1.737-.992L4.42 9H3a1 1 0 0 0-.965 1.263l2.799 10.264A2.005 2.005 0 0 0 6.764 22h10.473c.898 0 1.692-.605 1.93-1.475l2.799-10.263A.998.998 0 0 0 21 9m-3.764 11v1zH6.764L4.31 11h15.38z" stroke-width="0.5" stroke="#432E22"/><path fill="#B78D5E" d="M9 13h2v5H9zm4 0h2v5h-2z" stroke-width="0.5" stroke="#432E22"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#B78D5E" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2M7.35 18.5C8.66 17.56 10.26 17 12 17s3.34.56 4.65 1.5c-1.31.94-2.91 1.5-4.65 1.5s-3.34-.56-4.65-1.5m10.79-1.38a9.95 9.95 0 0 0-12.28 0A7.96 7.96 0 0 1 4 12c0-4.42 3.58-8 8-8s8 3.58 8 8c0 1.95-.7 3.73-1.86 5.12" stroke-width="0.5" stroke="#432E22"/><path fill="#B78D5E" d="M12 6c-1.93 0-3.5 1.57-3.5 3.5S10.07 13 12 13s3.5-1.57 3.5-3.5S13.93 6 12 6m0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11" stroke-width="0.5" stroke="#432E22"/></svg>

                </li>
            </ul>
        </div>
    </header>

    <main>
        <section id="hero">
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
        </section>
        <section id="avatar">

        </section>
            
        <section id="menu">
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
                    <img class="ignoreCookie" src="images/cookie<?php echo (string) $dictCookie["Brownie"]["id"]; ?>.png">
                    <h4><?php echo($dictCookie["Brownie"]["name"]) ?></h4>
                    <div class="price">
                        <p class="from">From:</p>
                        <p><?php echo($dictCookie["Brownie"]["price7"]) ?>€</p>
                    </div>
                    <button class="buttonWhite">Buy</button>
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
        </section>


        <section id="mix">
            <img src="images/cookieBox.png"  class="ignoreMix">
            <div id="mixText">
                <h3>Can’t decide?</h3>
                <h4>Your Box, Your Rules—Customize Your Perfect Cookie Mix!</h4>
                <button class="buttonBrown">Start Building</button>
            </div>
        </section>
    </main>
    
</body>
</html>