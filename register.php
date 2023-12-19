<?php
include("db_connection.php");

$reg_message = "";
try {
    // Check if the required keys exist in the $_POST array
    if (isset($_POST["username"]) && isset($_POST["password"])) {
       
        $sql_query = "INSERT INTO users(username, password, isadmin) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "', 0)";
        
    
        $stmt = $pdo->prepare($sql_query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $reg_message = "User registered successfully.";
            header("Location: index.php");
            exit(); 
        } else {
            $reg_message = "User registration failed.";
        }
    } 

} catch (PDOException $e) {
    $reg_message = "Error: " . $e->getMessage();
}


$pdo = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>

<body>
    <div class="content">

        <h2 class="h2_register">Register</h2>
        <div class="forms">

            <form action="register.php" method="post">

                <label for="username">Username:</label>
                <input type="text" name="username" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" required><br>

                <input type="submit" value="Register">
                <a href="index.php">Back</a>

            </form>
        </div>
    </div>

    <!-- Code for js alert when registration happens-->

    <script>
    var reg_message = "<?php echo $reg_message; ?>";
    if (reg_message !== "") {
        alert(reg_message);
    }
    </script>
</body>

</html>