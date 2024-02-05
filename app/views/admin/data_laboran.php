<div class="dibawah-topbar-rapat main-content pt-5 px-3">
    <div class="container-fluid d-flex justify-content-between gap-3 mb-4">
        <h4>Data Laboran</h4>
    </div>
    <a href="">
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
                        <td><?= $laboran['nama_laboran'] ?></td>
                        <td>Laboran</td>
                        <td>
                            <a href="">
                                <img src="http://localhost:8080/tubesmvc/public/asset/image/icon/detail.png" alt="">
                            </a>
                            <a href="http://localhost:8080/tubesmvc/public/Dashboard/deleteDataLaboran/<?= $laboran['id_laboran'] ?>" class="btn_delete" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                <img src="http://localhost:8080/tubesmvc/public/asset/image/icon/delete.png" alt="">
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>