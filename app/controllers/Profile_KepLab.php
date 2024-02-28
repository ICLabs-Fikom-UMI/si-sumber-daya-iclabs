<?php

class Profile_KepLab extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        $id_user = $_SESSION['id_user'];
        $dataProfilKepalaLab = $this->model('KepalaLab_model')->getDataKepalaLabByUserId($id_user);

        if ($dataProfilKepalaLab && $_SESSION['role'] != 'Admin') {
            // Jika data profil kepala lab sudah ada, arahkan ke header lain
            header("Location: " . BASEURL . "/Profile_KepLab/detail_profile/" . $id_user);
            exit();
        }

        if ($_SESSION['role'] == 'Admin') {
            $data['judul'] = 'Edit Profile Kepala Lab ';
            $this->view('templates/header_admin', $data);
            $this->view('templates/top_navbar_admin');
            $this->view('profile/lengkapi_profile/keplab/index');
            $this->view('templates/footer_admin');
        } else {
            $data['judul'] = 'Lengkapi Profile Kepala Lab';
            $this->view('templates/header', $data);
            $this->view('templates/top_navbar_profile');
            $this->view('profile/lengkapi_profile/keplab/index');
            $this->view('templates/footer');
        }
    }

    public function detail_profile($id)
    {
        session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        if ($_SESSION['role'] == 'Admin') {
            $data['judul'] = 'Edit Profile Kepala Lab';
            $data['kepala_lab'] = $this->model('KepalaLab_model')->getDataKepalaLabByUserId($id);
            $this->view('templates/header_admin', $data);
            $this->view('templates/top_navbar_admin');
            $this->view('profile/profile_saya/kepala_lab/index', $data);
            $this->view('templates/footer_admin');
        } else {
            $data['judul'] = 'Profile Saya';
            $data['kepala_lab'] = $this->model('KepalaLab_model')->getDataKepalaLabByUserId($id);
            $this->view('templates/header', $data);
            $this->view('templates/top_navbar_profile');
            $this->view('profile/profile_saya/kepala_lab/index', $data);
            $this->view('templates/footer');
        }
    }

    public function tambah($id_user = '')
    {
        session_start();

        // Pemeriksaan login
        if (!isset($_SESSION['id_user'])) {
            header("Location: " . BASEURL . "/Login");
            exit();
        }

        try {
            if (($_SESSION['role'] === 'Admin')) {
                $this->model('User_model')->buatKepLabOlehAdmin($_POST['email'], '#iclabs21', $_POST['role'], $_POST);
                header("Location: " . BASEURL . "/Dashboard/data_kepala_lab");
                exit();
                //success
            } else {

                if ($this->model('KepalaLab_model')->createDataKepalaLab($_POST) > 0) {
                    header("Location: " . BASEURL . "/Profile_KepLab/detail_profile/" . $id_user);
                    exit();
                }
            }
        } catch (Exception $e) {
            echo  $e;
        }
    }

    public function edit_profile($data)
    {
        try {
            $this->model('KepalaLab_model')->update_detail_data_kepLab($_POST);
            header("Location: " . BASEURL . "/Profile_KepLab/detail_profile/" . $data . "");
            Flasher::setFlash('Profile Anda Berhasil', 'Diubah', 'success');
            exit();
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function ubah_password($id)
    {

        try {
            $data['judul'] = 'Ubah Password';
            $data['id_user'] = $this->model('KepalaLab_model')->checkIdUser($id);

            if ($_SESSION['role'] == 'Admin') {
                $this->view('templates/header_admin');
            } else {
                $this->view('templates/header', $data);
            }

            if ($_SESSION['role'] == 'Admin') {
                $this->view('templates/top_navbar_admin');
            } else {
                $this->view('templates/top_navbar_home');
            }

            $this->view('profile/profile_saya/kepala_lab/ubah_password', $data);

            if ($_SESSION['role'] == 'Admin') {
                $this->view('templates/footer_admin', $data);
            } else {
                $this->view('templates/footer');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function process_password($data)
    {
        try {
            $this->model('User_model')->ubah_pass_kepala_lab($_POST);
            header("Location: " . BASEURL . "/Profile_KepLab/detail_profile/" . $data . "");
            Flasher::setFlash('Password Anda Berhasil', 'Diubah', 'success');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
