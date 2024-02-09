<div class="dibawah-topbar-rapat main-content pt-5 px-3">
    <?php Flasher::flashHapusData(); ?>
    <div class="container-fluid d-flex justify-content-between gap-3 mb-4">
        <h4>Data Asisten Lab</h4>
    </div>
    <a href="<?= BASEURL ?>/Dashboard/view_tambah_data_asisten">
        <button type="button" class="btn btn-primary ms-4 mb-4">Tambah Data</button>
    </a>
    <div class="container-fluid overflow-y-auto" style="max-height: 60vh;">
        <table id="example" class="table table-striped mt-4" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data['asisten'] as $asisten) :
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $asisten['id_sumber_daya'] ?></td>
                        <td><?= $asisten['nama_asisten'] ?></td>
                        <td><?= $asisten['nim'] ?></td>
                        <td>Asisten Lab</td>
                        <td>
                            <a href="<?= BASEURL ?>/Dashboard/detail_profile_asisten/<?= $asisten['id_user'] ?>">
                                <img src="<?= BASEURL ?>/asset/image/icon/detail.png" alt="">
                            </a>
                            <a href="<?= BASEURL ?>/Dashboard/deleteDataAsisten/<?= $asisten['id_asisten'] ?>" class="btn_delete" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                <img src="" . BASEURL . "/asset/image/icon/delete.png" alt="">
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>