<?php
require_once 'db_connection.php';

$sql = "SELECT * FROM notes ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* ... (styles remain unchanged) ... */
    </style>
</head>

<body class="p-5">
    <div class="container">
        <h2>Daftar Catatan</h2>
        <a class="btn btn-primary mb-3" href="pages/create.php">Tambah Catatan Baru</a>
        <a class="btn btn-info mb-3" href="about.me.php">Lihat About Me</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi Catatan</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row['judul'] . "</td>";
                        echo "<td>" . $row['isi'] . "</td>";
                        echo "<td>" . date('d-m-Y H:i', strtotime($row['created_at'])) . "</td>";
                        echo "<td>";
                        echo "<a href='./pages/edit.php?id=" . $row['id'] . "' class='btn btn-edit btn-sm'>Edit</a> ";
                        echo "<a href='./actions/delete.php?id=" . $row['id'] . "' class='btn btn-delete btn-sm' onclick='return confirm(\"Apakah anda yakin ingin menghapus catatan ini?\");'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Belum ada catatan.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php
$conn->