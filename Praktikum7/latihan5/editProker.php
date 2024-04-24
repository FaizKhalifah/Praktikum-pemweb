<!DOCTYPE html>
<html>
<head>
    <title>Edit Program Kerja</title>
</head>
<body>
    <h2>Edit Program Kerja</h2>
    <?php     
    include 'c_programKerja.php';
    $nomorProgram = $_GET["id"]; // Mengambil nomor program dari parameter URL
    ?>
    <form action="prosesEdit.php" method="post">
        <input type="hidden" name="nomorProgram" value="<?php echo $nomorProgram; ?>"> <!-- Mengirim nomor program secara tersembunyi -->
        <label for="namaProgram">Nama Program</label>
        <input type="text" name="namaProgram" id="namaProgram"><br>
        <label for="SuratKeterangan">Surat Keterangan</label> <!-- Ubah menjadi huruf kapital pada "Surat Keterangan" -->
        <input type="text" name="suratKeterangan" id="suratKeterangan"><br> <!-- Sesuaikan dengan nama yang digunakan di prosesEdit.php -->
        <button type="submit">Submit</button> <!-- Mengubah "button" menjadi "type="submit" -->
    </form>
</body>
</html>
