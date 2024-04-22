<?php
include_once("m_programKerja");
class c_programKerja {
    public $model; 
    public function __construct($nama){ 
        $this->model = new m_programKerja();
    } 
    public function invoke(){  
        $proker = $this->model->getSemuaPogramKerja(); 
        include 'v_programKerja.php'; 
    } 
   
}
    