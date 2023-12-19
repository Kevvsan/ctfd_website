<?php
include("template.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="download">
        <h2>Download...</h2>
        <a href="path/to/your/file.zip" download="your-filename.zip">Download Zip File</a>
    </div>
    
    <footer>
        <div class="footer">
            <h3><?php echo "Welcome, " . $_SESSION['username'] . "!";?></h3>
        </div>
    </footer>
</body>

</html>