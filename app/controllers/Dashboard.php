<?php

class Dashboard extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
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
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }

        $data['judul'] = 'Dashboard';
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
        header("Location: http://localhost:8080/tubesmvc/public/Dashboard/data_kepala_lab");
        exit();
    }

    public function data_laboran()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }

        $data['judul'] = 'Dashboard';
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
        header("Location: http://localhost:8080/tubesmvc/public/Dashboard/data_laboran");
        exit();
    }

    public function data_asisten()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
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
        header("Location: http://localhost:8080/tubesmvc/public/Dashboard/data_asisten");
        exit();
    }
}
