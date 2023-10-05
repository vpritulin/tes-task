<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'User.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];

$users = [];
if (file_exists('users.json')) {
    $users = json_decode(file_get_contents('users.json'), true);
}

// Checking if a user with this email exists
$emailExists = false;
foreach ($users as $user) {
    if ($user['email'] === $email) {
        $emailExists = true;
        break;
    }
}

if ($emailExists) {
    echo "Email is already in use!";
    exit;
}

// Create new user and save in array
$newUser = [
    'name' => $name . ' ' . $surname,
    'email' => $email,
    'password' => $password
];
$users[] = $newUser;

// Save users in a file
file_put_contents('users.json', json_encode($users));

// // Log the result
$logMessage = "New user registered: " . $newUser['email'];
file_put_contents('log.txt', $logMessage . PHP_EOL, FILE_APPEND);

echo "success";

