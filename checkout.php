<?php
// Database credentials
$host = 'localhost';
$dbname = 'test';
$username = 'root';
$password = '';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['payment_method']) && $_POST['payment_method'] === 'cod') {
        // Retrieve form data
        $first_name = $_POST['first_name'] ?? null;
        $last_name = $_POST['last_name'] ?? null;
        $phone = $_POST['phone'] ?? null;
        $address = $_POST['address'] ?? null;
        $email = $_POST['email'] ?? null;
        $total_quantity = $_POST['total_quantity'] ?? null;
        $total_price = $_POST['total_price'] ?? null;

        // Check if all required fields are filled
        if ($first_name && $last_name && $phone && $address && $email && $total_quantity && $total_price) {
            // Prepare an SQL statement
            $stmt = $pdo->prepare("INSERT INTO orders (first_name, last_name, phone, address, email, total_quantity, total_price) VALUES (:first_name, :last_name, :phone, :address, :email, :total_quantity, :total_price)");

            // Bind parameters
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':total_quantity', $total_quantity);
            $stmt->bindParam(':total_price', $total_price);

            // Execute the statement
            $stmt->execute();

            // Redirect to success page
            header("Location: success.php");
            exit();
        } else {
            echo "All form fields are required.";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
