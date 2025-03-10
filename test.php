<?php
$servername = "193.203.184.45"; // Change if your database is hosted elsewhere
$username = "u558841402_metronarc"; // Replace with your database username
$password = "2468g0a7A7B7*"; // Replace with your database password
$database = "u558841402_ronstanDB"; // Replace with your database name

// Set connection timeout
ini_set('default_socket_timeout', 5);

try {
    // Create connection with timeout
    $conn = new mysqli($servername, $username, $password, $database);
    $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected successfully";
    
    // Test query
    $result = $conn->query("SELECT 1");
    if ($result) {
        echo "<br>Query test successful";
    } else {
        echo "<br>Query test failed: " . $conn->error;
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    echo "<br>Error code: " . $conn->connect_errno;
    echo "<br>Error message: " . $conn->connect_error;
} finally {
    // Close the connection if it exists
    if (isset($conn) && $conn instanceof mysqli) {
        $conn->close();
    }
}
?>
