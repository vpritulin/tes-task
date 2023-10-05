<?php
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

echo "<h1>The user list is empty or corrupted.</h1>";
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
foreach ($existingUsers as $user) {
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . $user['name'] . "</td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
