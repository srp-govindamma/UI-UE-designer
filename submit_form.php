<!-- submit_form.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Simple validation and output (for demonstration purposes)
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message;
}
?>
