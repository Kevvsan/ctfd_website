<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign out</title>
</head>

<body>
    <?php
include('template.php');
$_SESSION = array();
session_destroy();
header("Location:index.php");
?>
</body>

</html>