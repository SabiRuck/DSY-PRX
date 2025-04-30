<?php

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(itExist($_POST["password"]) && itExist($_POST["password2"]) && itExist($_POST["mail"]))
    {
            return 0;
    }

}
>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div id="container">
        <h1>Feedback Form</h1>
        <form action="#" method="post">
            <div id="data">
                <div id="name">
                    <label for="userName">Name:</label><br>
                    <input type="text" id="userName" name="userName" class="inputs" placeholder="Enter Name">
                </div>
                <div id="email">
                    <label for="mail">Email:</label><br>
                    <input type="email" id="mail" name="mail" class="inputs" placeholder="Enter email">
                </div>
                <div id="title">
                    <label for="subject">Subject:</label><br>
                    <input type="text" id="subject" name="subject" class="inputs" placeholder="Enter subject">
                </div>
                <div id="text">
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" class="inputs" placeholder="Enter message" rows="7"></textarea>
                </div>
            </div>
            
            <input type="submit" value="Submit !!!">
        </form>
    </div>
    
</body>
</html>