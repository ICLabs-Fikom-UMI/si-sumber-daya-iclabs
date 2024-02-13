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

    <!-- card Kepala Lab -->
    <?php foreach ($data['kepalaLab'] as $kepalaLab) : ?>
      <div class="col">
        <a href="<?= BASEURL ?>/home/detail_kepalaLab/<?= $kepalaLab['id_kepala_lab']; ?>" class="text-decoration-none">
          <div class="card overflow-hidden">
            <img src="<?= $kepalaLab['foto']; ?>" class="card-img object-fit-cover" alt="Card Image">
            <div class="card-body overflow-hidden">
              <p class="card-name text-center fw-bold searchable"><?= $kepalaLab['nama_kepala_lab'] ?></p>
            </div>
            <div class="card-info-box overflow-hidden d-none d-md-block">
              <div class="fs-6">
                <span class="fs-6">
                  <img src="<?= BASEURL ?>/asset/image/icon/univ.png" class="me-1">
                  <?= $kepalaLab['lulusan'] ?>
                </span><br>
                <span>
                  <img src="<?= BASEURL ?>/asset/image/icon/nidn.png" class="me-1">
                  <?= $kepalaLab["nidn"] ?>
                </span><br>
                <span>
                  <img src="<?= BASEURL ?>/asset/image/icon/prodi.png" class="me-1">
                  <?= $kepalaLab["dosen_prodi"] ?>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
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

    <!-- card laboran -->
    <?php foreach ($data['laboran'] as $laboran) : ?>
      <div class="col">
        <a href="<?= BASEURL ?>/home/detail_laboran/<?= $laboran['id_laboran']; ?>" class="text-decoration-none">
          <div class="card">
            <img src="<?= $laboran['foto']; ?>" class="card-img object-fit-cover" alt="Card Image">
            <div class="card-body overflow-hidden">
              <p class="card-name text-center fw-bold searchable"><?= $laboran['nama_laboran'] ?></p>
            </div>
            <div class="card-info-box overflow-hidden d-none d-md-block">
              <div class="center ms-0 fs-6">
                <span>
                  <img src="<?= BASEURL ?>/asset/image/icon/univ.png" class="me-1">
                  <?= $laboran['lulusan'] ?>
                </span><br>
                <span>
                  <img src="<?= BASEURL ?>/asset/image/icon/calendar.png" class="me-1">
                  <?= $laboran['mulai_menjabat'] . ' - ' . $laboran['selesai_menjabat'] ?>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- end of laboran -->


<!-- Asisten Lab -->
<section id="asisten">
  <div class=" container mt-5 pt-5">
    <div class="d-flex justify-content-center align-items-center">
      <span class="badge bg-info text-white">ASISTEN LABORATORIUM</span>
    </div>
  </div>
</section>


<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-4 row-cols-2 g-4 justify-content-center">

    <?php foreach ($data['asisten'] as $asisten) : ?>
      <div class="col">
        <a href="<?= BASEURL ?>/home/detail_asisten/<?= $asisten['id_asisten']; ?>" class="text-decoration-none">
          <div class="card">
            <div class="rounded-image overflow-hidden">
              <img src="<?= $asisten['foto']; ?>" class="card-img object-fit-cover" alt="Card Image">
            </div>
            <div class="card-body">
              <p class="card-name text-center fw-bold searchable"><?= $asisten['nama_asisten']; ?></p>
            </div>
            <div class="card-info-box overflow-hidden d-none d-md-block">
              <div class="center ms-2 fs-6">
                <span>
                  <img src="<?= BASEURL ?>/asset/image/icon/univ.png" class="me-1">
                  <?= $asisten['prodi']; ?>
                </span><br>
                <span>
                  <i class="bi bi-card-text"></i>
                  <?= $asisten['kelas']; ?>
                </span><br>
                <span>
                  <img src="<?= BASEURL ?>/asset/image/icon/nidn.png" class="me-1">
                  <?= $asisten['nim']; ?>
                </span><br>
                <span>
                  <img src="<?= BASEURL ?>/asset/image/icon/calendar.png" class="me-1">
                  <?= $asisten['angkatan']; ?>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>


  </div>
</div>

<!-- end of asisten -->