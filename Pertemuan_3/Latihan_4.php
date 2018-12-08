<html>
    <head>
        <title>Pengolahan Data - Form Metode GET</title>
    </head>
    <body>
        <h3>Informasi Biodata</h3>
            <table width="600px">
            <tr>
                <td width="30%">Nama</td>
                <td width="2%">:</td>
                <td><?php echo $_GET['txtNama']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $_GET['txtAlamat']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $_GET['rdJenisKelamin']; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?php
                        if($_GET['cbAgama']=="is"){
                            echo "Islam";
                        } else if($_GET['cbAgama']=="kk"){
                            echo "Kristen Katolik";
                        } else if($_GET['cbAgama']=="kp"){
                            echo "Kristen Protestan";
                        } else if($_GET['cbAgama']=="hd"){
                            echo "Hindu";
                        } else if($_GET['cbAgama']=="bd"){
                            echo "Budha";
                        } else {
                            echo "Tidak ditentukan";
                        }
                    ?>
                </td>
            </tr>
            </table>
    </body>
</html>