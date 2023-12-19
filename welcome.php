<?php

include("template.php");

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <footer>
        <div class="footer">
            <h3><?php echo "Welcome, " . $_SESSION['username'] . "!";?></h3>
        </div>
    </footer>
</body>
<script>
alert("flag{password}");
</script>

</html>