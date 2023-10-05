<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];

$existingUsers = [
    [
        'id' => 1,
        'email' => 'test@example.com',
        'name' => 'Test User',
        'password' => 'password123'
    ],
    [
        'id' => 2,
        'email' => 'test2@example.com',
        'name' => 'Test User2',
        'password' => 'password123'
    ]
];
// Checking if a user with this email exists
foreach ($existingUsers as $user) {
    if ($user['email'] === $email) {
        echo "Email is already in use!";
        exit;
    }
}
// Create new user and save in array
$newUser = [
    'id' => count($existingUsers) + 1,
    'email' => $email,
    'name' => $name . ' ' . $surname,
    'password' => $password
];

$existingUsers[] = $newUser;

// Log the result
$logMessage = "New user registered: " . $newUser['email'];
if (file_put_contents('log.txt', $logMessage . PHP_EOL, FILE_APPEND)) {
    echo "The data has been successfully saved in the log file.";
} else {
    echo "An error occurred when saving data to the log file.";
}


echo "success";