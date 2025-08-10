<?php
// Simple test file to check what's working
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Testing Portfolio Setup</h2>";

// Test 1: Check if config.php exists and loads
echo "<h3>1. Testing config.php</h3>";
try {
    require_once 'config.php';
    echo "✅ config.php loaded successfully<br>";
    echo "DB_HOST: " . DB_HOST . "<br>";
    echo "DB_NAME: " . DB_NAME . "<br>";
    echo "DB_USER: " . DB_USER . "<br>";
} catch (Exception $e) {
    echo "❌ Error loading config.php: " . $e->getMessage() . "<br>";
}

// Test 2: Check database connection
echo "<h3>2. Testing Database Connection</h3>";
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    echo "✅ Database connection successful<br>";
    
    // Test query
    $stmt = $pdo->query("SELECT COUNT(*) FROM contact_messages");
    $count = $stmt->fetchColumn();
    echo "✅ contact_messages table accessible, contains $count records<br>";
    
} catch (Exception $e) {
    echo "❌ Database error: " . $e->getMessage() . "<br>";
}

// Test 3: Check if functions exist
echo "<h3>3. Testing Functions</h3>";
if (function_exists('sanitize_input')) {
    echo "✅ sanitize_input function exists<br>";
} else {
    echo "❌ sanitize_input function missing<br>";
}

// Test 4: Test JSON response
echo "<h3>4. Testing JSON Response</h3>";
header('Content-Type: application/json');
$testResponse = json_encode(['status' => 'success', 'message' => 'Test successful']);
if ($testResponse) {
    echo "✅ JSON encoding works<br>";
    echo "Sample JSON: " . $testResponse . "<br>";
} else {
    echo "❌ JSON encoding failed<br>";
}
?>
