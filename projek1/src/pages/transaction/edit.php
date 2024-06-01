<?php
require_once '../../../config/Database.php';
require_once '../../../app/transactions.php';

$database = new Database();
$db = $database->dbConnection();

$transactions = new Transactions($db);

if(isset($_POST['tambah'])){
    $transactions->nama = $_POST['nama'];

    $transactions->store(); 
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
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <label for="user">User:</label>
        <input type="text" name="user" required>
        <br>
        <label for="game">Game:</label>
        <input type="text" name="game   " required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>