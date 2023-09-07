<?php
session_start(); // Start the session (if not already started)

include('includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $generate_password = ucfirst($first_name).'@'.date('Y');
    // exit($generate_password);
    $password = password_hash($generate_password, PASSWORD_DEFAULT); // Hash the password

    // Connect to the database (update database credentials)
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Check if the email already exists in the database
    $check_email_query = "SELECT id FROM user WHERE email = ?";
    $check_stmt = $conn->prepare($check_email_query);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        // Email already exists; display an error message
        $_SESSION['errorMessage'] = "Email already registered.";
    } else {
        // Insert user data into the database
        $sql = "INSERT INTO user (first_name, last_name, email, password, role) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $first_name, $last_name, $email, $password, $role);

        if ($stmt->execute()) {
            // echo "User added successful!";
            $_SESSION['successMessage'] = "User added successful!";
        } else {
            // echo "Error: " . $stmt->error;
            $_SESSION['errorMessage'] = $stmt->error;
        }

        // Close the database connection
        $stmt->close();
    }
    $check_stmt->close();
    $conn->close();

    // Redirect to the view file with the success message
    header('Location: add_user.php');
    exit; // Ensure script execution stops after redirection
}
?>
