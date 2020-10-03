<?php
include('koneksi.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Level 3 - Tugas 10</title>
</head>

<body>

    <!-- LAYOUT -->
    <div class="container" style="margin: 0 auto;">
        <div class="row">
            <div class="col-8">
                <form method="post" action="save.php" name="">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="keterangan" name="keterangan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
                    </div>
                    <input type="submit" name="simpan" id="simpan" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" id="reset" class="btn btn-primary" value="Reset">
                </form>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Produk</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    include('koneksi.php');
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from produk");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo $d['nama_produk']; ?></td>
                                <td><?php echo $d['keterangan']; ?></td>
                                <td><?php echo $d['harga']; ?></td>
                                <td><?php echo $d['jumlah']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a> |
                                    <a href="delete.php?id=<?php echo $d['id']; ?>">Hapus</a>
                                </td>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>