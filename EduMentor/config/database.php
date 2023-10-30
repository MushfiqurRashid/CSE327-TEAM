<?php

$databaseConfig = array(
    'host' => 'localhost',    // Database host (usually 'localhost')
    'dbname' => 'edumentor',  // Database name
    'username' => 'root', // Your database username
    'password' => '', // Your database password
);

try {
    $db = new PDO(
        "mysql:host={$databaseConfig['host']};dbname={$databaseConfig['dbname']}",
        $databaseConfig['username'],
        $databaseConfig['password']
    );

    // Set PDO attributes for error handling
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>
