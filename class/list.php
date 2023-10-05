<?php
$usersData = file_get_contents('users.json');
$users = json_decode($usersData, true);

if ($users === null) {
    echo "<p>The user list is empty or corrupted.</p>";
} else {
    echo "<h1>List of users</h1>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th></tr>";

    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td>" . $user['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}