<?php
require_once '../../../config/Database.php';
require_once '../../../app/users.php';

$database = new Database();
$db = $database->dbConnection();

$users = new users($db);

if(isset($_POST['tambah'])){
    $users->username = $_POST['username'];
    $users->email = $_POST['email'];
    $users->password = $_POST['password'];
    $users->balance = $_POST['balance'];

    $users->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Users</h1>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password" required>
        <br>
        <label for="balnce">Balance:</label>
        <input type="text" name="balnce" required>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>