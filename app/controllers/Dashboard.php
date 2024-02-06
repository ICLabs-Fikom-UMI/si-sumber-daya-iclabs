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

    public function detail_profile_kepLab($id)
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }

        $data['judul'] = 'Edit Profile';
        $data['kepala_lab'] = $this->model('KepalaLab_model')->getDataKepalaLabByUserId($id);
        $this->view('templates/header_admin', $data);
        $this->view('templates/top_navbar_admin');
        $this->view('admin/detail_kepala_lab', $data);
        $this->view('templates/footer_admin');
    }

    public function edit_data_kepala_lab()
    {
        try {
            $this->model('KepalaLab_model')->tambah_data_kepLab($_POST);
            header("Location: " . BASEURL . "/Dashboard/data_kepala_lab");
            Flasher::setFlash('Data Kepala Lab Berhasil', 'Diubah', 'success');
            exit();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function deleteDataKeplab($id)
    {
        $this->model('Sumber_Daya_Model')->deleteDataKepLabById($id);
        header("Location: http://localhost:8080/tubesmvc/public/Dashboard/data_kepala_lab");
        Flasher::setFlash('Data Kepala Lab Berhasil', 'Dihapus', 'success');
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

    public function detail_profile_laboran($id)
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }

        $data['judul'] = 'Edit Profile';
        $data['laboran'] = $this->model('Laboran_model')->getDataLaboranByUserId($id);
        $this->view('templates/header_admin', $data);
        $this->view('templates/top_navbar_admin');
        $this->view('admin/detail_laboran', $data);
        $this->view('templates/footer_admin');
    }

    public function edit_data_laboran()
    {
        try {
            $this->model('Laboran_model')->tambah_data_laboran($_POST);
            header("Location: " . BASEURL . "/Dashboard/data_laboran");
            Flasher::setFlash('Data Laboran Berhasil', 'Diubah', 'success');
            exit();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function deleteDataLaboran($id)
    {
        $this->model('Sumber_Daya_Model')->deleteDataLaboranById($id);
        header("Location: http://localhost:8080/tubesmvc/public/Dashboard/data_laboran");
        Flasher::setFlash('Data Laboran Berhasil', 'Dihapus', 'success');
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

    public function detail_profile_asisten($id)
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: http://localhost:8080/tubesmvc/public/Login");
            exit();
        }

        $data['judul'] = 'Edit Profile';
        $data['asisten'] = $this->model('Asisten_model')->getDataAsistenByUserId($id);
        $this->view('templates/header_admin', $data);
        $this->view('templates/top_navbar_admin');
        $this->view('admin/detail_asisten', $data);
        $this->view('templates/footer_admin');
    }

    public function edit_data_asisten()
    {
        try {
            $this->model('Asisten_model')->tambah_data_asisten($_POST);
            header("Location: " . BASEURL . "/Dashboard/data_asisten");
            Flasher::setFlash('Data Asisten Berhasil', 'Diubah', 'success');
            exit();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function deleteDataAsisten($id)
    {
        $this->model('Sumber_Daya_Model')->deleteDataAsistenById($id);
        header("Location: http://localhost:8080/tubesmvc/public/Dashboard/data_asisten");
        Flasher::setFlash('Data Asisten Berhasil', 'Dihapus', 'success');
        exit();
    }
}
