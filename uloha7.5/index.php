<?php

function itExist($data)
{
    return isset($data) && !empty($data);
}
function checkInput($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(itExist($_POST["username"]) && itExist($_POST["mail"]) && itExist($_POST["password1"]) && itExist($_POST["password2"])&& itExist($_POST["gender"]))
    {
        $name = checkInput($_POST["username"]);
        $email = checkInput($_POST["mail"]);
        $password1 = checkInput($_POST["password1"]);
        $password2 = checkInput($_POST["password2"]);
        $gender = checkInput($_POST["gender"]);
        $dataset = true;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
         {             
            $error[] = "Incorrect email format"; 
        }
        if($password1 != $password2)
        {
            $error[] = "Passwords do not match";
        }

    }
    else{
        $error[] = "Missing input";
        $dataset = false;
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    

</head>
<body>
    <section id="container">
        <div id="left">
            <div class="image">
                <img src="bond.png" id="bond"/>
            </div>
            <div id="content">
                <div id="logo">
                    <img src="logo.png">
                    <p>SPŠIT</p>
                </div>
                <div id="title">
                    <h1>Welcom to SPŠIT.</h1>
                    <h2>Are you ready to join the elite?</h2>
                </div>
                <div id="links">
                    <a><i class="fa fa-globe icon" aria-hidden="true"></i></a>
                    <a><i class="fa fa-behance icon" aria-hidden="true"></i></a>
                    <a><i class="fa fa-github icon" aria-hidden="true"></i></a>
                    <a><i class="fa fa-twitter icon" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <form action="#" method="POST">

            <ul id="formular">
                <li class="idk">
                    <label for="username">username</label>
                    <input type="text" id="username" name="username" placeholder="james.bond" required>
                </li>
                <li class="idk">
                    <label for="mail">email</label>
                    <input type="email" id="mail" name="mail" placeholder="james.bond@spectre.com" required>
                </li>
                <li class="idk">
                    <label for="password1">password</label>
                    <input type="password" id="password1" name="password1" placeholder="********" required>
                </li>
                <li class="idk">
                    <label for="password2">repeat password</label>
                    <input type="password" id="password2" name="password2" placeholder="********" required>
                </li>
                <li class="idk">
                    <label for="gender">gender</label>
                    <div id="radio">
                        <div class="gender">
                            <input type="radio" name="gender" id="gender" value="male" required/>
                            <label for="male" class="idkk">Male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" name="gender" id="gender" value="female" required/>
                            <label for="female" class="idkk">Female</label>
                        </div>

                    </div>
                    <div id="brbr">
                        <?php
                            if(isset($error))
                            {
                                for ($i=0; $i < count($error); $i++) { 
                                    echo("<p style='font-size: 12px; color: red;'>$error[$i]</p>");

                                }
                            }
                        ?>
                    </div>
                </li>

            </ul>

            <div id="buttons">
                <button type="submit">register</button>
                <a href="#">I am already a member</a>
            </div>
        </form>

    </section>
    <section id="mydata"> 
    <?php 
    if (isset($dataset) && !isset($error)) {
        echo("<section id='userData'>
            <p> Username: $name </p>
            <p> E-mail: $email </p>
            <p> Password: $password1 </p>
            <p> Gender: $gender </p>
        </section>");
    }
    ?>
    </section>
</body>
</html>
