<?php
require_once '../../../config/Database.php';
require_once '../../../app/topups.php';

$database = new topups();
$db = $database->dbConnection();

$topups = new topups($db);

if(isset($_POST['tambah'])){
    $topups->user_id = $_POST['user_id'];
    $topups->game_id = $_POST['game_id'];
    $topups->amount = $_POST['amount'];
    $topups->topup_date = $_POST['topup_date'];

    $topups->store(); 
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
        <label for="user_id">User:</label>
        <input type="text" name="user_id" required>
        <br>
        <label for="game_id">Game:</label>
        <input type="text" name="game_id" required>
        <br>
        <label for="amount">Amount:</label>
        <input type="text" name="amount" required>
        <br>
        <label for="topup_date">Date:</label>
        <input type="text" name="topup_date" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>