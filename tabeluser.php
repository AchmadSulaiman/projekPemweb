<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #eaf0fb;
        }

        tr:first-child {
            background-color: purple;
            color: white;
        }
    </style>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <h2>DATA MAHASISWA</h2>

    <table border="1">
        <tbody>
            <tr>
            <th><strong style="color: black;">No</strong></th>
    <th><strong style="color: black;">NIM</strong></th>
    <th><strong style="color: black;">Nama</strong></th>
    <th><strong style="color: black;">Program Studi</strong></th>
    <th><strong style="color: black;">Email</strong></th>
            </tr>
            <?php
            include "koneksi MVC.php";
            $rs = $mysqli->query("SELECT * FROM datamahasiswa");
            while ($datamahasiswa = mysqli_fetch_array($rs)) {
                echo
                    "<tr>
<td>$datamahasiswa[No]</td>
<td>$datamahasiswa[NIM]</td>
<td>$datamahasiswa[Nama]</td>
<td>$datamahasiswa[ProgramStudi]</td>
<td>$datamahasiswa[Email]</td>
</tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <form action="keluar.php" method="POST">
        <input type="submit" name="keluar" value="keluar">
    </form>

</body>

</html>