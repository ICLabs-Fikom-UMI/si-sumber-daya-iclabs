<div class="dibawah-topbar-rapat main-content pt-5 px-3">
    <?php Flasher::flashHapusData(); ?>
    <div class="container-fluid d-flex justify-content-between gap-3 mb-4">
        <h4>Data Kepala Lab</h4>
    </div>
    <a href="<?= BASEURL ?>/Dashboard/view_tambah_data_kepala_lab">
        <button type="button" class="btn btn-primary ms-4 mb-4">Tambah Data</button>
    </a>
    <div class="container-fluid overflow-y-auto" style="max-height: 60vh;">
        <table id="example" class="table table-striped mt-4" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIDN</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data['kepala_lab'] as $kepalaLab) :
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $kepalaLab['id_sumber_daya'] ?></td>
                        <td><?= $kepalaLab['nama_kepala_lab'] ?></td>
                        <td><?= $kepalaLab['nidn'] ?></td>
                        <td>Kepala Lab</td>
                        <td>
                            <a href="<?= BASEURL ?>/Dashboard/detail_profile_kepLab/<?= $kepalaLab['id_kepala_lab'] ?>">
                                <img src="<?= BASEURL ?>/asset/image/icon/detail.png" alt="">
                            </a>
                            <a href="<?= BASEURL ?>/Dashboard/deleteDataKeplab/<?= $kepalaLab['id_kepala_lab'] ?>" class="btn_delete" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                <img src="<?= BASEURL ?>/asset/image/icon/delete.png" alt="">
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>