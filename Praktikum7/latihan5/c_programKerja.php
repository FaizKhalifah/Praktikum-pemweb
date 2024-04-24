<?php
include_once("m_programKerja.php");

class c_programKerja {
    public $model; 

    public function __construct($nomorProgram = "", $namaProgram = "", $suratKeterangan = ""){ 
        $this->model = new m_programKerja($nomorProgram, $namaProgram, $suratKeterangan);
    } 

    public function tambahProgramKerja($nomorProgram, $namaProgram, $suratKeterangan){
        $this->model->tambahProgramKerja($nomorProgram, $namaProgram, $suratKeterangan);
    }

    public function hapusProgramKerja($nomorProgram){
        $this->model->hapusProgramKerja($nomorProgram);
        $this->invoke();
    }

    public function editProgramKerja($nomorProgram){
        $program = $this->model->getProgramKerjaByNomor($nomorProgram);
        // Load halaman edit dengan data program yang ingin diedit
        include 'prosesEdit.php';
    }

    public function prosesEditProgramKerja($nomorProgram, $namaProgram, $suratKeterangan){
        $this->model->editProgramKerja($nomorProgram, $namaProgram, $suratKeterangan);
        
    }

    public function invoke(){  
        $proker = $this->model->getSemuaPogramKerja(); 
        include 'v_programKerja.php'; 
    } 

   
}
?>
