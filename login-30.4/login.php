<?php

$inputClass=["good","good","good","good"];

function checkInput($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function itExist($data)
    {
        return isset($data) && !empty($data);
    }

if ($_SERVER["REQUEST_METHOD"] === "POST")
{

    if(itExist($_POST["userName"]) && itExist($_POST["mail"]) && itExist($_POST["subject"]) && itExist($_POST["message"]))
    {
        $name = checkInput($_POST["userName"]);
        $mail = checkInput($_POST["mail"]);
        $subject = checkInput($_POST["subject"]);
        $message = checkInput($_POST["message"]);

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                            
            $error[] = "Incorrect email format.";
            $errorNum[] = 2;

            
        }

        
    }
    else
    {
        $error[] = "All fields are required.";
        if(!itExist($_POST["userName"]))
        {
            $inputClass[0]="error";
        }
        
        if (!itExist($_POST["mail"]))
        {
            $inputClass[1]="error";
        }
        if(!itExist($_POST["subject"]))
        {
            $inputClass[2]="error";
        }
        if(!itExist($_POST["message"]))
        {
            $inputClass[3]="error";
        }
    }

}
?>




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
                <div>
                    <label for="userName">Name:</label><br>
                    <input type="text" id="userName" name="userName" class="inputs <?php echo $inputClass[0]; ?>" placeholder="Enter Name">
                </div>
                <div >
                    <label for="mail">Email:</label><br>
                    <input type="email" id="mail" name="mail" class="inputs <?php echo $inputClass[1]; ?>" placeholder="Enter email">
                </div>
                <div>
                    <label for="subject">Subject:</label><br>
                    <input type="text" id="subject" name="subject" class="inputs <?php echo $inputClass[2]; ?>" placeholder="Enter subject">
                </div>
                <div>
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" class="inputs <?php echo $inputClass[3]; ?>" placeholder="Enter message" rows="7"></textarea>

                    <?php 
                        if(isset($error)){
                            for ($i=0; $i < count($error); $i++) { 
                                echo ("<p style='color: red; font-size: 12px;'>$error[$i]</p>");
                            }
                            
                        }


                    ?>

                </div>
               
            </div>
            
            <input type="submit" value="Submit !!!">
        </form>
    </div>
    
</body>
</html>