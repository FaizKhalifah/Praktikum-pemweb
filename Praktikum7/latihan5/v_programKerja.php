<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Program Kerja BEM</title>
</head>
<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Program Kerja</th>
                <th>Surat Keterangan</th>
                <?php
                if($_SESSION["session"]=="kepalaDepartemen"){
                
                ?>
                <th>Aksi</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
         
            <?php foreach($proker[0] as $key => $program): ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $program['namaProgram']; ?></td>
                <td><?php echo $program['suratKeterangan']; ?></td>
                <?php
                if($_SESSION["session"]=="kepalaDepartemen"){
                ?>
                <td><a href="hapusProker.php?id=<?php echo $program['nomorProgram']; ?>">Hapus</a>
                <a href="editProker.php?id=<?php echo $program['nomorProgram']; ?>">Edit</a></td>
                </tr>
                <?php } ?>
            <?php endforeach; ?>
        </tbody>
    </table><br>
    <?php if($_SESSION["session"]=="kepalaDepartemen"){

    ?>
    <h2>Tambah proker</h2>
    <form action="tambahProker.php" method="post">
        <label for="nomorProgram">Nomor Program</label>
        <input type="text" name="nomorProgram" id="nomorProgram"><br>
        <label for="namaProgram">Nama Program</label>
        <input type="text" name="namaProgram" id="namaProgram"><br>
        <label for="SuratKeterangan">SuratKeterangan</label>
        <input type="text" name="SuratKeterangan" id="SuratKeterangan"><br>
        <button>Submit </button>
    </form>
    <?php } ?>
</body>
</html>
