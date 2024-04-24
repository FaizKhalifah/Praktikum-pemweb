<?php
class pengurusBEM {
    private $nama;
    private $nim;
    private $angkatan;
    private $jabatan;
    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function getNama() {
        echo $this->nama;
    }
    private function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }
    public function getJabatan() {
        echo $this->jabatan;
    }

    public function setnim($nim){
        $this->nim=$nim;
    }

    public function getnim(){
        echo $this->nim;
    }

    public function setAngkatan($angkatan){
        $this->angkatan=$angkatan;
    }

    public function getAngkatan(){
        echo $this->angkatan;
    }
}