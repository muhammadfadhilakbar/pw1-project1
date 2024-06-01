<?php
require_once '../../../config/Database.php';
require_once '../../../app/topups.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';

$database = new Database();
$db = $database->dbConnection();

$topups = new Topups($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $topups->id = $_GET['id'];

    if($topups->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus produk.";
    }
}

// Tampilkan data dari method index
$data = $topups->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uhuyshop</title>
</head>
<body>
    <ol class="breadcrumd mb-4">
        <h1 class="table text-center mt-4">Top Up</h1>
    </ol>
    <table border="1" class="table table-striped border">
        <thead>
            <tr>
                <th>id</th>
                <th>user</th>
                <th>game</th>
                <th>amount</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['game_id']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['topup_date']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success" >Edit</a>
                        |
                        <a href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="create.php" class="btn btn-outline-info" syle="margin:10px;">Tambah</a>
</body>
</html>

<?php
include_once '../../layouts/footer.php';
?>