<!-- Kepala Lab -->
<section id="kepala_lab">
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-center align-items-center">
      <span class="badge bg-info text-white">KEPALA LAB</span>
    </div>
  </div>
</section>


<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-4 row-cols-2 g-4 justify-content-center">
    <?php

    // card Kepala Lab
    foreach ($data['kepalaLab'] as $kepalaLab) {
      echo '
        <div class="col">
          <div class="card">
            <img src="asset/image/' . $kepalaLab['foto'] . '" class="card-img-top object-fit-cover " style="object-position: center; widht:330.333px; height: 330.333px;" alt="Card Image">
            <div class="card-body overflow-hidden">
              <p class="card-name text-center">' . $kepalaLab['nama_kepala_lab'] . '</p>
            </div>
            <div class="card-info-box">
                <div class="center ms-0 fs-6">
                    <span>
                    <img src="asset/image/icon/univ.png" class="me-1">
                    ' . $kepalaLab['lulusan'] . '
                    </span><br>
                    <span>
                    <img src="asset/image/icon/nidn.png" class="me-1">
                    ' . $kepalaLab["nidn"] . '
                    </span><br>
                    <span>
                    <img src="asset/image/icon/prodi.png" class="me-1">
                    ' . $kepalaLab["dosen_prodi"] . '
                    </span>
                </div>
            </div>
          </div>
        </div>
      ';
    }
    ?>
  </div>
</div>
<!-- end of kepala lab -->


<!-- Laboran -->
<section id="laboran">
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-center align-items-center">
      <span class="badge bg-info text-white">LABORAN</span>
    </div>
  </div>
</section>


<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-4 row-cols-2 g-4 justify-content-center">
    <?php

    // card Kepala Lab
    foreach ($data['laboran'] as $laboran) {
      echo '
        <div class="col">
          <div class="card">
            <img src="asset/image/' . $laboran['foto'] . '" class="card-img-top object-fit-cover" style="object-position: center; widht:330.333px; height: 330.333px;" alt="Card Image">
            <div class="card-body overflow-hidden">
              <p class="card-name text-center">' . $laboran['nama_laboran'] . '</p>
            </div>
            <div class="card-info-box">
                <div class="center ms-0 fs-6">
                    <span>
                    <img src="asset/image/icon/univ.png" class="me-1">
                    ' . $laboran['lulusan'] . '
                    </span><br>
                    <span>
                      <img src="asset/image/icon/calendar.png" class="me-1">
                      ' . $laboran['mulai_menjabat'] . ' - ' . $laboran['selesai_menjabat'] . '
                    </span>
                </div>
            </div>
          </div>
        </div>
      ';
    }
    ?>
  </div>
</div>
<!-- end of laboran -->


<!-- Asisten Lab -->
<section id="asisten" >
  <div class=" container mt-5 pt-5">
    <div class="d-flex justify-content-center align-items-center">
      <span class="badge bg-info text-white">ASISTEN LABORATORIUM</span>
    </div>
  </div>
</section>


<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-4 row-cols-2 g-4 justify-content-center">

    <?php foreach ($data['asisten'] as $asisten) : ?>
      <a href="/tubesmvc/public/home/detail_asisten/<?= $asisten['id_asisten']; ?>" class="text-decoration-none">
        <div class="col">
          <div class="card">
            <img src="asset/image/<?= $asisten['foto_home']; ?>" class="card-img-top object-fit-cover" style="object-position: center; height: 330.333px;" alt="Card Image">
            <div class="card-body overflow-hidden">
              <p class="card-name text-center mt-n1"><?= $asisten['nama_asisten']; ?></p>
            </div>
            <div class="card-info-box">
              <div class="center ms-2 fs-6">
                <span>
                  <img src="asset/image/icon/univ.png" class="me-1">
                  <?= $asisten['prodi']; ?>
                </span><br>
                <span>
                  <i class="bi bi-card-text"></i>
                  <?= $asisten['kelas']; ?>
                </span><br>
                <span>
                  <img src="asset/image/icon/nidn.png" class="me-1">
                  <?= $asisten['nim']; ?>
                </span><br>
                <span>
                  <img src="asset/image/icon/calendar.png" class="me-1">
                  <?= $asisten['angkatan']; ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </a>
    <?php endforeach; ?>

  </div>
</div>

<!-- end of asisten -->