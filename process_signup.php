<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST["new_username"];
    $new_email = $_POST["new_email"];
    $new_password = $_POST["new_password"];
    $new_security_question = $_POST["new_security_question"]; // New security question field

    if (empty($new_username) || empty($new_email) || empty($new_password)) {
        echo "All fields are required.";
        exit();
    }

    // Password complexity requirements
    $uppercase_count = preg_match_all('/[A-Z]/', $new_password);
    $symbol_count = preg_match_all('/[!@#$%^&*()\-_=+{};:,<.>]/', $new_password);

    if (
        strlen($new_password) < 8 ||
        $uppercase_count < 5 ||
        $symbol_count < 2
    ) {
        echo "Password must be at least 8 characters long, contain 5 uppercase letters, and 2 symbols.";
        exit();
    }

    $file = 'userdata.json';
    $user_data = file_get_contents($file);
    $user_data = json_decode($user_data, true);

    foreach ($user_data as $user) {
        if (strcasecmp($user["username"], $new_username) === 0) {
            echo "Username already exists. Please choose a different username.";
            exit();
        }
        if (strcasecmp($user["email"], $new_email) === 0) {
            echo "Email address already exists. Please use a different email.";
            exit();
        }
    }

    // Hash the password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Add the new user to the user data including the security question
    $new_user = array(
        "username" => $new_username,
        "email" => $new_email,
        "password" => $hashed_password,
        "security_question" => $new_security_question // Store the security question
    );

    $user_data[] = $new_user;

    // Save the updated user data back to the file
    file_put_contents($file, json_encode($user_data, JSON_PRETTY_PRINT));

    // Redirect to login page after successful sign-up
    header("Location: index.html");
    exit();
}
?>
