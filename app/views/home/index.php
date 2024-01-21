<div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center">
        <span class="badge bg-info text-white">KEPALA LAB</span>
    </div>
</div>

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 row-cols-2 g-4 justify-content-center">
        <?php

        // Iterasi melalui data untuk membuat card
        foreach ($data['kepalaLab'] as $kepalaLab) {
            echo '
        <div class="col">
          <div class="card">
            <img src="' . $kepalaLab['foto'] . '" class="card-img-top" alt="Card Image">
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
                    </span><br>
                    
                </div>
            </div>
          </div>
        </div>
      ';
        }
        ?>
    </div>
</div>