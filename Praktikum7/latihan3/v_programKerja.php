<html> 
<head></head> 
<body> 
    <h2>Daftar Program Kerja BEM</h2> 
    <table> 
    <tbody> 
        <tr> 
        <td>No</td> 
        <td>Nama Program Kerja</td> 
        <td>Surat Keterangan</td> 
        </tr> 
    </tbody> 
        <?php 
           echo '<tr>',
           '<td>' . $proker["nomorProgram"] . '</td>',
           '<td>' . $proker["namaProgram"] . '</td>',
           '<td>' . $proker["suratKeterangan"] . '</td>',
           '</tr>';
        ?> 
</body> 
</html>
