<?php

class Dashboard extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        $data['judul'] = 'Dashboard';
        $data['kepala_lab'] = $this->model('Sumber_Daya_Model')->getAllSumberDayaKepalaLab();
        $data['laboran'] = $this->model('Sumber_Daya_Model')->getAllSumberDayaLaboran();
        $data['asisten'] = $this->model('Sumber_Daya_Model')->getAllSumberDayaAsisten();
        $data['countSumberDaya'] = $this->model('Sumber_Daya_Model')->getTotalSumberDaya();
        $data['countKepLab'] = $this->model('Sumber_Daya_Model')->getTotalKepalaLab();
        $data['countLaboran'] = $this->model('Sumber_Daya_Model')->getTotalLaboran();
        $data['countAsisten'] = $this->model('Sumber_Daya_Model')->getTotalAsisten();
        $this->view('templates/header_admin', $data);
        $this->view('templates/top_navbar_admin');
        $this->view('templates/sidebar');
        $this->view('admin/index', $data);
        $this->view('templates/footer_admin');
    }

    public function data_kepala_lab()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        $data['judul'] = 'Data Kepala Lab';
        $data['kepala_lab'] = $this->model('Sumber_Daya_Model')->getAllSumberDayaKepalaLab();
        $this->view('templates/header_admin', $data);
        $this->view('templates/top_navbar_admin');
        $this->view('templates/sidebar');
        $this->view('admin/data_kepala_lab', $data);
        $this->view('templates/footer_admin');
    }

    

    public function deleteDataKeplab($id)
    {
        $this->model('Sumber_Daya_Model')->deleteDataKepLabById($id);
        header("Location: " . BASEURL . "/Dashboard/data_kepala_lab");
        Flasher::setFlash('Data Kepala Lab Berhasil', 'Dihapus', 'success');
        exit();
    }

    public function data_laboran()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        $data['judul'] = 'Data Laboran';
        $data['laboran'] = $this->model('Sumber_Daya_Model')->getAllSumberDayaLaboran();
        $this->view('templates/header_admin', $data);
        $this->view('templates/top_navbar_admin');
        $this->view('templates/sidebar');
        $this->view('admin/data_laboran', $data);
        $this->view('templates/footer_admin');
    }

    public function deleteDataLaboran($id)
    {
        $this->model('Sumber_Daya_Model')->deleteDataLaboranById($id);
        header("Location: " . BASEURL . "/Dashboard/data_laboran");
        Flasher::setFlash('Data Laboran Berhasil', 'Dihapus', 'success');
        exit();
    }

    public function data_asisten()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        $data['judul'] = 'Dashboard';
        $data['asisten'] = $this->model('Sumber_Daya_Model')->getAllSumberDayaAsisten();
        $this->view('templates/header_admin', $data);
        $this->view('templates/top_navbar_admin');
        $this->view('templates/sidebar');
        $this->view('admin/data_asisten', $data);
        $this->view('templates/footer_admin');
    }
    
    public function deleteDataAsisten($id)
    {
        $this->model('Sumber_Daya_Model')->deleteDataAsistenById($id);
        header("Location: " . BASEURL . "/Dashboard/data_asisten");
        Flasher::setFlash('Data Asisten Berhasil', 'Dihapus', 'success');
        exit();
    }
}
