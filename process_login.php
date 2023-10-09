<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Custom username and password for redirection
    $custom_username = "4js55";
    $custom_password = "55sj4";

    // Load user data from userdata.json
    $file = 'userdata.json';
    $user_data = file_get_contents($file);
    $user_data = json_decode($user_data, true);

    if ($user_data === null) {
        echo "Error loading user data.";
        exit();
    }

    // Check if the provided username and password match the custom ones
    if ($username === $custom_username && $password === $custom_password) {
        // Redirect to welcome.php or new_index.html
        header("Location: welcome.html"); // Change this to the desired page
        exit();
    }

    // Iterate through user data
    foreach ($user_data as $user) {
        $stored_username = $user["username"];
        $stored_password = $user["password"];

        // Check if provided username matches stored username
        if ($stored_username === $username) {
            // Check if provided password matches stored hashed password
            if (password_verify($password, $stored_password)) {
                $_SESSION['username'] = $username;
                header("Location: user_page.php");
                exit();
            }
        }
    }

    echo "Invalid username or password. Please try again.";
}
?>
