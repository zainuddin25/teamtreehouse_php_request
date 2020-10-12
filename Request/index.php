<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <div class="container">
        <div class="row mt-5">
            <div class="col-3">
                <h2>Registrasi Siswa</h2>
                <form class="border rounded p-4" method="POST" action="index.php">
                    <label for="exampleInputEmail1">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Lengkap">
                    <label for="exampleInputPassword1">Asal Sekolah</label>
                    <input type="text"class="form-control" name="sekolah"  placeholder="Sekolah">
                    <input type="submit" name="action" value="Daftar" class="btn btn-primary mt-2">
                </form>

                <form class="border rounded p-4 mt-4" method="POST" action="index.php">
                    <label for="exampleInputEmail1">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Lengkap">
                    <label for="exampleInputPassword1">Asal Sekolah</label>
                    <input type="text"class="form-control" name="sekolah"  placeholder="Sekolah">
                    <input type="submit" name="action" value="cari " class="btn btn-primary mt-2">
                </form>
            </div>

            <div class="col-3">
                <h2>Tambah Tim</h2>
                <form class="border rounded p-4" method="GET" action="index.php">
                    <label for="exampleInputEmail1">Nama Tim</label>
                    <input type="text" name="nama_tim" class="form-control" placeholder="Nama Tim">
                    <input type="submit" name="action" value="Tambah" class="mt-2 btn btn-primary">
                </form>
            </div>
        </div>
    </div>


    <?php

    if ($_POST)
    {
        echo "Nama: " . $_POST["nama_siswa"];
        echo "<br>";
        echo "alamat: " . $_POST["sekolah"];

    } elseif ($_GET)
    {
        echo "Nama Tim: " . $_GET["nama_tim"];
    }
    ?>  



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>