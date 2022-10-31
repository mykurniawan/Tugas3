<?php
include "navbar.php";
include "css.php";
include "koneksi.php";
$qry_get_mahasiswa = mysqli_query($conn, "SELECT * FROM t_mahasiswa WHERE id_mahasiswa = '" . $_GET['id_mahasiswa'] . "'");
$data_mahasiswa = mysqli_fetch_array($qry_get_mahasiswa);
?>

<div class="container">
    <h3 style="text-align: center; padding-top: 20px;">Edit Data Mahasiswa</h3> <br>
    <form action="prosesEditMhs.php" method="POST">
        <input type="hidden" name="id_mahasiswa" value="<?= $data_mahasiswa['id_mahasiswa'] ?>" class="form-control"> <br>

        Nama :
        <input type="text" name="nama" value="<?= $data_mahasiswa['nama'] ?>" class="form-control"> <br>
        NIM :
        <input type="text" name="nim" value="<?= $data_mahasiswa['nim'] ?>" class="form-control"> <br>
        Alamat :
        <input type="text" name="alamat" value="<?= $data_mahasiswa['alamat'] ?>" class="form-control"> <br>
        Username :
        <input type="text" name="username" value="<?= $data_mahasiswa['username'] ?>" class="form-control"> <br>
        Password :
        <input type="password" name="password" value="<?= $data_mahasiswa['password'] ?>" class="form-control"> <br>
       
        Jurusan :
        <select name="id_jurusan" value="<?= $data_mahasiswa['id_jurusan'] ?>" class="form-select form-control" aria-label=".form-select-sm example">
         <option> Pilih Jurusan</option>
            <?php
            include "koneksi.php";
            $qry_jurusan = mysqli_query($conn, "SELECT * FROM t_jurusan");
            while ($data_jurusan = mysqli_fetch_array($qry_jurusan)) {
                echo '<option value="' . $data_jurusan['id_jurusan'] . '">' . $data_jurusan['nama_jurusan'] . '</option>';
            };
            ?>
        </select>

        <br><br>
        <!-- button  -->
        <input type="submit" name="simpan" value="Ubah Mahasiswa" class="btn btn-primary">
        <!-- kembali  -->
        <a href="dataMhs.php" style="float: right;" class="btn btn-success">Kembali</a>
        <!-- kembali  -->
        <!-- button  -->
        <br><br>
    </form>
</div>
<?php 
include"footer.php";
?>
