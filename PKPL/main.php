<?php
include 'koneksi.php';

class Main
{
    function isNotConnectedToDB($koneksi)
    {
        if ($koneksi) {
            return true;
        }
    }

    function hasRows($numOfRows)
    {
        if ($numOfRows > 0) {
            return true;
        }
    }

    function create()
    {
        $koneksiDB = new KoneksiDatabase;
        $koneksiDB->namaServer = 'localhost';
        $koneksiDB->namaDB = 'latihan2';
        $koneksiDB->namaUser = 'root';
        $koneksiDB->passwordInPlaintext = '';

        if ($this->isNotConnectedToDB($koneksiDB->konekKeDatabase()->connect_error)) {
            die('koneksi ke DB gagal');
        }


        if (isset($_POST['ttambah'])) { //['ttambah'] merupakan name dari button di form tambah
            $item    = $_POST['item'];
            $item_price    = $_POST['item_price'];
            $sql    = 'insert into produk (item, item_price) values ("' . $item . '","' . $item_price . '")';
            $query    =  $koneksiDB->konekKeDatabase()->query($sql);

            if ($query) {
                header('location: main.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
            } else {
                echo 'Gagal';
            }
        }
    }


    function getAllItem()
    {
        $koneksiDB = new KoneksiDatabase;
        $koneksiDB->namaServer = 'localhost';
        $koneksiDB->namaDB = 'latihan2';
        $koneksiDB->namaUser = 'root';
        $koneksiDB->passwordInPlaintext = '';

        if ($this->isNotConnectedToDB($koneksiDB->konekKeDatabase()->connect_error)) {
            die('koneksi ke DB gagal');
        }

        $sql = "SELECT kode, item, item_price, item_picture FROM produk";
        $listOfProduct = $koneksiDB->konekKeDatabase()->query($sql);
        if ($this->hasRows($listOfProduct->num_rows)) {
            while ($row = $listOfProduct->fetch_assoc()) {
                echo "Kode:" . $row["kode"] . ' Item: ' . $row['item'] . ' Harga: ' . $row['item_price'] . '<br>';
                //echo "<img src='img/" . $row['item_picture'] . "'style='width:200px; height:100px;'><br>";
            }
        } else {
            echo "0 results.";
        }
    }
}

$main = new Main;
$main->create();
$main->getAllItem();
