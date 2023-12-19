
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
?>