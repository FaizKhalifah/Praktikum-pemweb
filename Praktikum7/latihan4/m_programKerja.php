<?php
require "koneksiMVC.php";

class m_programKerja{
    private $nomorProgram;
    private $namaProgram;
    private $suratKeterangan;
    public $hasil = array();

    public function __construct($nomorProgram = "", $namaProgram = "", $suratKeterangan = "") {
        $this->nomorProgram = $nomorProgram;
        $this->namaProgram = $namaProgram;
        $this->suratKeterangan = $suratKeterangan;
    }

    public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan){
        $connection = connectDatabase();
        $connection->query("INSERT INTO proker VALUES ('$nomorProgram', '$namaProgram', '$suratKeterangan')");
    }

    public function getSemuaPogramKerja(){
        $connection = connectDatabase();
        $rs = $connection->query("SELECT nomorProgram, namaProgram, suratKeterangan FROM proker");
        $rows = array();

        while($row = $rs->fetch_assoc()) { 
            $rows[] = $row; 
        } 

        $this->hasil[] = $rows; 
        return $this->hasil; 
    }

    public function tambahProgramKerja($nomorProgram, $namaProgram, $suratKeterangan){
        $connection = connectDatabase();
        $connection->query("INSERT INTO proker (nomorProgram, namaProgram, suratKeterangan) VALUES ('$nomorProgram', '$namaProgram', '$suratKeterangan')");
    }

    public function hapusProgramKerja($nomorProgram){
        $connection = connectDatabase();
        $connection->query("DELETE FROM proker WHERE nomorProgram='$nomorProgram'");
    }

    public function getProgramKerjaByNomor($nomorProgram){
        $connection = connectDatabase();
        $result = $connection->query("SELECT * FROM proker WHERE nomorProgram='$nomorProgram'");
        return $result->fetch_assoc();
    }
    
    public function editProgramKerja($nomorProgram, $namaProgram, $suratKeterangan){
        $connection = connectDatabase();
        $connection->query("UPDATE proker SET namaProgram='$namaProgram', suratKeterangan='$suratKeterangan' WHERE nomorProgram='$nomorProgram'");
    }
    
    
    
}
?>
