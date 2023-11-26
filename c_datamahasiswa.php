<?php
include_once("m_datamahasiswa.php");
class c_datamahasiswa
{
    public $model;
    public function __construct()
    {
        $this->model = new m_datamahasiswa();
    }
    public function invoke()
    {
        $datamahasiswa = $this->model->getDataMahasiswa();
        include 'v_datamahasiswa.php';
    }
    public function tambahdatamahasiswa(
        $No,
        $NIM,
        $Nama,
        $ProgramStudi,
        $Email
    ) {
        $this->model = new m_datamahasiswa();
        $tambahdatamahasiswa= $this->model -> setDataMahasiswa($No, $NIM, $Nama,$ProgramStudi,$Email);
    }
}
?>