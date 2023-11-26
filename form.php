<?php
include "koneksi MVC.php";
if (empty($_GET['e']))
    $title = "Tambah Data Mahasiswa";
else {
    $title = "Edit Data Mahasaiwa";
    $q = $mysqli->query("SELECT * FROM datamahasiswa WHERE No ='$_GET[No]'");
    $data = mysqli_fetch_array($q);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title>
        <?php echo $title ?>
    </title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            text-align: center;
        }

        .submit-button {

            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>
        <?php echo $title ?>
    </h1>
    <form method="POST" action="edit.php">
        <input type="hidden" name="e" value="<?php if (isset($data))
            echo $data['No']; ?>" />
        <table border="1">
            <tr>
                <td>No</td>
                <td>
                    <input name="No" type="text" v alue="<?php if (isset($data))
                        echo $data['No']; ?>" />
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>
                    <input name="NIM" type="text" value="<?php if (isset($data))
                        echo $data['NIM']
                            ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input name="Nama" type="text" value="<?php if (isset($data))
                        echo $data['Nama'] ?>" />
                    </td>
                </tr>

                <tr>
                <td>Program Studi</td>
                <td>
                    <input name="ProgramStudi" type="text" v alue="<?php if (isset($data))
                        echo $data['ProgramStudi']; ?>" />
                </td>
            </tr><tr>
                <td>Email</td>
                <td>
                    <input name="Email" type="text" v alue="<?php if (isset($data))
                        echo $data['Email']; ?>" />
                </td>
            </tr>
            </table><br>
            
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>

    </html>