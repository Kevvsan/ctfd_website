<?php

session_start();

// ElephantSQL connection parameters
$host = "snuffleupagus.db.elephantsql.com";
$dbname = "omucfhyt";
$user = "omucfhyt";
$password = "3_9mdAZCoYw394rv-ggzmd3HXRPbcpv7";

// Create a PDO connection
try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname;user=$user;password=$password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// User authentication
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve plaintext password from the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $password === $user['password']) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}

// Close the PDO connection
$pdo = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>

</head>

<body>
    <div class="content">

        <p hidden>flag{}</p>
        <h2 class="h2_login">Login</h2>
        <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
        <div class="forms">
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" name="username" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" required><br>

                <input type="submit" value="Login">
            </form>
            <a href="register.php">Register</a>
        </div>

    </div>
</body>

</html>