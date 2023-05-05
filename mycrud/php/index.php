<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/avatarme5.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c3c0a1e67b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src=''></script>
</head>

<body class="bg-dark">
    <!-- JUDUL BAGIAN ATAS MULAI -->
    <div class="container mb-4">
        <h1 class="text-light text-center mt-3 mb-0 fw-bold">
            Form Mahasiswa
        </h1>
        <figure class="text-center">
            <blockquote class="blockquote text-light fw-semibold">
                <p>Database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
    </div>
    <!-- JUDUL BAGIAN ATAS BERAKHIR -->

    <!-- CRUD MULAI -->
    <div class="container mt-4">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>

        <a href="tambah.php" type="button" class="btn btn-primary mb-4"> 
            <i class="fa fa-plus"></i> 
            Tambah Data
        </a>

        <div class="table-responsive text-light">
            <table class="table align-middle table-dark table-bordered table-hover text-light">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Aksi</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        include "config.php";

                        $sql = "SELECT * FROM `crud`";
                        $result = mysqli_query($conn, $sql);
                        $naik = 1;
                        // var_dump(mysqli_fetch_assoc($result));
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            
                            <tr>
                                <td class= "text-center">
                                    <?php echo $naik++, "." ?? '-' ?>
                                </td>
                                <td>
                                    <?php echo $row['nim'] ?? '-' ?>
                                </td>
                                <td>
                                    <?php echo $row['nama'] ?? '-' ?>
                                </td>
                                <td>
                                    <?php echo $row['email'] ?? '-' ?>
                                </td>
                                <td>
                                    <?php echo $row['jurusan'] ?? '-' ?>
                                </td>
                                <td>
                                    <?php echo $row['alamat'] ?? '-' ?>
                                </td>
                                <td>
                                    <?php echo $row['gender'] ?? '-' ?>
                                </td>
                                <td class="text-center">
                                    <a href="edit.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-primary"><i
                                            class="fa fa-pencil">
                                            <title>Edit</title>
                                        </i></a>
                                    <a href="hapus.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">
                                        <i
                                            class="fa fa-trash">
                                            <title>Delete</title>
                                        </i></a>

                                    <!-- Modal HTML -->
                                    <div id="myModal" class="modal fade">
                                        <div class="modal-dialog modal-confirm">
                                            <div class="modal-content">
                                                <div class="modal-header flex-column">
                                                    <div class="icon-box">
                                                        <i class="fa fa-trash"></i>
                                                    </div>
                                                    <h4 class="modal-title w-100 text-dark">Are you sure?</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-dark">
                                                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- MODAL AKHIR -->
                                </td>
                                
                            </tr>
                            <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- CRUD BERAKHIR -->

    <!-- FOOTER MULAI -->
    <div class="container">
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3988.2304288140804!2d103.54774757461553!3d-1.6165378983684175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMzYnNTkuNSJTIDEwM8KwMzMnMDEuMiJF!5e0!3m2!1sid!2sid!4v1683081018365!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <p id="bawah">Copyright
                <script>document.write(new Date().getFullYear())</script> &copy; <a
                    href="https://www.instagram.com/rzkynaga" target="_blank">Muhammad Rizky Sinaga</a>
        </p>
    </div>
    <!-- FOOTER SELESAI -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">
    </script>
</body>
</html>