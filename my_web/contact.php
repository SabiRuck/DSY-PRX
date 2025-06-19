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
            $inputClass[1] = "error";

            
        }

        
    }
    else
    {
        $error[] = "All fields are required.";
        if(!itExist($_POST["userName"]))
        {
            $inputClass[0]="error";
        }
        

        if (itExist($_POST["mail"]))
        {
            if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
                            
                $error[] = "Incorrect email format.";
                $inputClass[1] = "error";
            }
        }
        else{
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




<?php include("header.php")?>
    <main id="contactMain">
    <div id="contacCont">
        <div id="contactTitle">
        <h1>Contact Us</h1>
        <p>Questions? Something Not Quite Right? Let Us Know!</p>
        </div>
        <form action="#" method="post">
            <div id="data">
                <div class="contactLabels">
                    <label for="userName">Name:</label><br>
                    <input type="text" id="userName" name="userName" class="inputs <?php echo $inputClass[0]; ?>" placeholder="Enter Name" value="<?php echo ($inputClass[0] === 'good' && in_array("error", $inputClass) ) ? $_POST['userName'] : '';?>">
                </div>
                <div class="contactLabels" >
                    <label for="mail">Email:</label><br>
                    <input type="email" id="mail" name="mail" class="inputs <?php echo $inputClass[1]; ?>" placeholder="Enter email" value="<?php echo ($inputClass[1] === 'good' && in_array("error", $inputClass) ) ? $_POST['mail'] : '';?>">
                </div>
                <div class="contactLabels">
                    <label for="subject">Subject:</label><br>
                    <input type="text" id="subject" name="subject" class="inputs <?php echo $inputClass[2]; ?>" placeholder="Enter subject" value="<?php echo ($inputClass[2] === 'good' && in_array("error", $inputClass) ) ? $_POST['subject'] : '';?>">
                </div>
                <div >
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" class="inputs <?php echo $inputClass[3]; ?>" placeholder="Enter message" rows="7"><?php echo ($inputClass[3] === 'good' && in_array("error", $inputClass) ) ? $_POST['message'] : '';?></textarea>

                    <?php 
                        if(isset($error)){
                            for ($i=0; $i < count($error); $i++) { 
                                echo ("<p style='color: red; font-size: 12px;'>$error[$i]</p>");
                            }
                            
                        }


                    ?>

                </div>
               
            </div>
            
            <button type="submit">Submit<i class="fa fa-arrow-right" aria-hidden="true"></i>
	
	    </button>
        </form>
    </div>
    </main>

    <footer>
    <img src="images/vector5.png" id="productVector">
    <?php include("footer.php") ?>
</footer>
</body>
</html>