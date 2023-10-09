<?php
// Load user data from the JSON file
$user_data = file_get_contents('userdata.json');
$user_data = json_decode($user_data, true);

// Calculate the user count
$userCount = count($user_data);

// Return the user count as JSON
echo json_encode(['userCount' => $userCount]);
?>
