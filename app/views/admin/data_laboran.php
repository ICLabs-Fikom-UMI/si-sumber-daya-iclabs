<div class="dibawah-topbar-rapat main-content pt-5 px-3">
    <?php Flasher::flash(); ?>
    <div class="container-fluid d-flex justify-content-between gap-3 mb-4">
        <h4>Data Laboran</h4>
    </div>
    <a href="<?= BASEURL ?>/Profile_Laboran">
        <button type="button" class="btn btn-primary ms-4 mb-4">Tambah Data</button>
    </a>
    <div class="container-fluid overflow-y-auto" style="max-height: 60vh;">
        <table id="example" class="table table-striped mt-4" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data['laboran'] as $laboran) :
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $laboran['id_sumber_daya'] ?></td>
                        <td class="kolom-nama"><?= $laboran['nama_laboran'] ?></td>
                        <td>Laboran</td>
                        <td>
                            <a href="<?= BASEURL ?>/Profile_Laboran/detail_profile/<?= $laboran['id_user'] ?>">
                                <img src="<?= BASEURL ?>/asset/image/icon/detail.png" alt="">
                            </a> <br>
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalHapus">
                                <img src="<?= BASEURL ?>/asset/image/icon/delete.png" alt="" class="mt-1">
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="text-center">Anda Yakin Menghapus Data Laboran Ini?</h6>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <a href="<?= BASEURL ?>/Dashboard/deleteDataLaboran/<?= $laboran['id_laboran'] ?>" role="button" class="btn btn-success">Yakin</a>
            </div>
        </div>
          
    </div>
</div>