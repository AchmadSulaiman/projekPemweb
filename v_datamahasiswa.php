<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="styles.css">
    <title>Data Mahasiswa</title>
    <style>
         body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        } 
        th, td {
            padding: 8px;
            text-align: left;
           
        }
        th{
            background-color: 1px solid black;
        }
        

      
    </style>
</head>

<body>
    <h2>DATA MAHASISWA</h2>
    <table border="2">
        <tbody>
            <tr>
            <th><strong>No</strong></th>
    <th><strong>NIM</strong></th>
    <th><strong>Nama</strong></th>
    <th><strong>Program Studi</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>Edit</strong></th>
    <th><strong>Delete</strong></th>
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
<td><a href=\"form.php?No=$datamahasiswa[No]&e=1\">Edit</a></td>
<td><a href=\"delete.php?No=$datamahasiswa[No]\">Delete</a></td>
</tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <form action="form.php" method="POST">
        <input type="submit" name="submit" value="Tambah Data Mahasiswa">
    </form><br>
    <form action="keluar.php" method="POST">
        <input type="submit" name="keluar" value="keluar">
    </form>

</body>

</html>