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
            </tr>
        </thead>
        <tbody>
            <?php foreach($proker[0] as $key => $program): ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $program['namaProgram']; ?></td>
                <td><?php echo $program['suratKeterangan']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
