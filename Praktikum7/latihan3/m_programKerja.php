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
}
?>
