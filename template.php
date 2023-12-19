<?php
include("db_connection.php");
//session_start();
$isAdmin = false;

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    
    $stmt = $pdo->prepare("SELECT isadmin FROM users WHERE username = :username");
    $stmt->bindParam(':username', $_SESSION['username']);
    $stmt->execute();
    
    // Check if the user is an admin
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $isAdmin = ($result && $result['isadmin'] == 1);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Main Page</title>
</head>

<body>
    <header>
        <nav>
            <div class="links">
                <a href="welcome.php" class="logo">Company Name</a>
                <div class="links_right">
                    <a href="contact.php">Contact</a>
                    <a href="about.php">About</a>

                    <?php
                        // Check if the user is logged in and is an admin
                        if ($isAdmin) {
                            echo '<a href="manage_users.php">Manage Users</a>';
                        }
    
                        if (isset($_SESSION['username']) || isset($_SESSION['isadmin'])) {
                            echo '<a href="signout.php">Sign out</a>';
                        }
                        ?>

                </div>
            </div>



        </nav>
    </header>


</body>

</html>