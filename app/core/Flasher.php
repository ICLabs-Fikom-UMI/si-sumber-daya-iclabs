<?php

class Flasher
{

    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flashLoginSignup()
    {
        if (isset($_SESSION['flash'])) {
            echo
            '<div class="flash-container">
                <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    ' . $_SESSION['flash']['pesan'] . ' <strong>' . $_SESSION['flash']['aksi'] . '</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>';
            unset($_SESSION['flash']);
        }
    }

    public static function flashHapusData()
    {
        if (isset($_SESSION['flash'])) {
            echo
            '<div class="container-fluid">
                <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    ' . $_SESSION['flash']['pesan'] . ' <strong>' . $_SESSION['flash']['aksi'] . '</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>';
            unset($_SESSION['flash']);
        }
    }
}
