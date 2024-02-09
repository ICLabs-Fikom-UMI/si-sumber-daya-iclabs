<div class="dibawah-topbar-rapat main-content pt-5 px-3">
    <div class="container-fluid d-flex justify-content-between gap-3 mb-4">
        <div class="kotak-dashboard shadow p-3 rounded">
            <div class="d-flex justify-content-between gap-4">
                <h5 class="fw-bold">Total<br>Sumber Daya</h5>
                <img class="person-image" src="<?= BASEURL ?>/asset/image/icon/person-blue.png" alt="efdf">
            </div>
            <h5 class="fw-bold mt-4"><?= $data['countSumberDaya']['total_sumberDaya'] ?></h5>
        </div>
        <div class="kotak-dashboard shadow p-3">
            <div class="d-flex justify-content-between gap-4">
                <h5 class="fw-bold">Jumlah<br>Kepala Lab</h5>
                <img class="person-image" src="<?= BASEURL ?>/asset/image/icon/person-blue.png" alt="efdf">
            </div>
            <h5 class="fw-bold mt-4"><?= $data['countKepLab']['total_keplab'] ?></h5>
        </div>
        <div class="kotak-dashboard shadow p-3">
            <div class="d-flex justify-content-between gap-3">
                <h5 class="fw-bold">Jumlah<br>Laboran</h5>
                <img class="person-image" src="<?= BASEURL ?>/asset/image/icon/person-blue.png" alt="efdf">
            </div>
            <h5 class="fw-bold mt-4"><?= $data['countLaboran']['total_laboran'] ?></h5>
        </div>
        <div class="kotak-dashboard shadow p-3">
            <div class="d-flex justify-content-between gap-3">
                <h5 class="fw-bold">Jumlah<br>Asisten Lab</h5>
                <img class="person-image" src="<?= BASEURL ?>/asset/image/icon/person-blue.png" alt="efdf">
            </div>
            <h5 class="fw-bold mt-4"><?= $data['countAsisten']['total_asisten'] ?></h5>
        </div>
    </div>
    <div class="container-fluid overflow-y-auto" style="max-height: 60vh;">
        <table id="example" class="table table-striped mt-4" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM/NIDN</th>
                    <th>Jabatan</th>
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
                    </tr>
                <?php endforeach; ?>
                <?php foreach ($data['laboran'] as $laboran) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $laboran['id_sumber_daya'] ?></td>
                        <td><?= $laboran['nama_laboran'] ?></td>
                        <td> - </td>
                        <td>Laboran</td>
                    </tr>
                <?php endforeach; ?>
                <?php foreach ($data['asisten'] as $asisten) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $asisten['id_sumber_daya'] ?></td>
                        <td><?= $asisten['nama_asisten'] ?></td>
                        <td><?= $asisten['nim'] ?></td>
                        <td>Asisten Lab</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>