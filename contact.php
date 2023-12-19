<?php
include("template.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>
</head>

<body>
    <div class="content">


        <div class="forms">

            <form method="post" action="mail.php">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">

                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject">

                <label for="message">Write your message below</label>
                <textarea name="message"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>

    </div>
    <footer>
        <div class="footer">
            <h3><?php echo "Welcome, " . $_SESSION['username'] . "!";?></h3>
        </div>
    </footer>

</body>

</html>