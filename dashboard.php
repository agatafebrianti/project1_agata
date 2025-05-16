<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM peserta");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Peserta</title>
    <style>
        table {border-collapse: collapse; width: 100%;}
        th, td {border: 1px solid #ddd; padding: 8px;}
        th {background-color: #4CAF50; color: white;}
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #2d6a4f;
        }
    </style>
</head>
<body>
    <h2>Daftar Peserta Outdoor Reading Festival</h2>
    <table>
        <tr>
            <th>No</th><th>Nama</th><th>Email</th><th>Telepon</th><th>Usia</th><th>Minat</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>".$no++."</td>
                    <td>".htmlspecialchars($row['nama'])."</td>
                    <td>".htmlspecialchars($row['email'])."</td>
                    <td>".htmlspecialchars($row['telepon'])."</td>
                    <td>".htmlspecialchars($row['usia'])."</td>
                    <td>".htmlspecialchars($row['minat'])."</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>
