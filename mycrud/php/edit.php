<?php
include "db_conn.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `crud` SET `nama`='$nama',`nim`='$nim',`email`='$email',`jurusan`='$jurusan', `alamat`='$alamat',`gender`='$gender' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Data berhasil diedit!");
    } else {
        echo "Koneksi gagal: " . mysqli_error($conn);
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Himaja Unsri</title>
    <link rel="shortcut icon" type="image/x-icon" href="himaja-logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://kit.fontawesome.com/c3c0a1e67b.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <div class="container">
        <h1 class="text-light text-center mt-3 mb-0">
            Form Mahasiswa
        </h1>
        <figure class="text-center mt-0">
            <blockquote class="blockquote">
                <p>Database Mahasiswa</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
    </div>

    <div class="container mt-5">
        <?php

        $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        ?>
        <form action="" method="post">
        <div class="mb-3 row text-light align-item-center justify-content-center">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Ex: Peter Parker"
                value="<?php echo $row['nama'] ?>">
            </div>
        </div>
        <div class="mb-3 row text-light align-item-center justify-content-center">
            <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Ex: 09031382227165"
                value="<?php echo $row['nim'] ?>">
            </div>
        </div>
        <div class="mb-3 row text-light align-item-center justify-content-center">
            <label for="inputJurusan" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="email" name="email" placeholder="Ex: zuckerberg@gmail.com"
                value="<?php echo $row['email'] ?>">
            </div>
        </div>
        <div class="mb-3 row text-light align-item-center justify-content-center">
            <label for="inputJurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Ex: Kedokteran"
                value="<?php echo $row['jurusan'] ?>">
            </div>
        </div>
        <div class="mb-3 row text-light align-item-center justify-content-center">
            <label for="inputJurusan" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Ex: Jalan Rawamangun No. 2"
                value="<?php echo $row['alamat'] ?>">
            </div>
        </div>
        <div class="mb-3 row text-light align-item-center justify-content-center">
            <label for="inputJKel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3 justify-content-center align-item-center">
                <input type="radio" class="form-check-input" name="gender" value="Laki-laki" id="Laki-laki"
                <?php echo ($row['gender']=='Laki-laki')? "checked":""; ?>>
                <label for="Laki-laki" class="form-input-label">Laki-laki</label>

                </br>

                <input type="radio" class="form-check-input" name="gender" value="Perempuan" id="Perempuan"
                <?php echo ($row['gender']=='Perempuan')? "checked":""; ?>>
                <label for="Perempuan" class="form-input-label">Perempuan</label>

                <!-- <select class="form-select" aria-label="Default select example" id="gender" name="gender">
                    <option selected>--</option>
                    <option value="Laki-laki" <?php echo ($row['gender']=='Laki-laki')? "selected":""; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php echo ($row['gender']=='Perempuan')? "selected":""; ?>>Perempuan</option>
                </select> -->
            </div>
        </div>
        
        <div class="container d-inline-flex justify-content-center align-item-center">
            <button type="submit" class="btn btn-primary col-sm-1 m-2" name="submit"> <i class="fa fa-floppy-disk"></i> Simpan</button>
            <a href="index.php" type="button" class="btn btn-danger col-sm-1 m-2"> <i class="fa fa-reply"></i> Batal</a>
        </div>
        </form>
    </div>
</body>

</html>