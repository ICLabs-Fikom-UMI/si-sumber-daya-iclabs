<div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center">
        <span class="badge bg-info text-white">KEPALA LAB</span>
    </div>
</div>

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 row-cols-2 g-4">
        <?php
        // Data contoh untuk card
        $cards = array(
            array("image" => "https://fikom.umi.ac.id/wp-content/uploads/2023/04/D31-705x705.png", "name" => "John Doe", "university" => "Example University", "nidn" => "1234567890", "prodi" => "Computer Science", "masa_jabatan" => "2020-2021"),
            array("image" => "path/to/image2.jpg", "name" => "Jane Doe", "university" => "Another University", "nidn" => "0987654321", "prodi" => "Engineering", "masa_jabatan" => "2019-2022"),
            array("image" => "path/to/image3.jpg", "name" => "Bob Smith", "university" => "University XYZ", "nidn" => "5555555555", "prodi" => "Mathematics", "masa_jabatan" => "2021-2023"),
            array("image" => "path/to/image4.jpg", "name" => "Alice Johnson", "university" => "Test University", "nidn" => "1111111111", "prodi" => "Physics", "masa_jabatan" => "2022-2024")
            // Anda dapat menambahkan data card di sini
        );

        // Iterasi melalui data untuk membuat card
        foreach ($cards as $card) {
            echo '
        <div class="col">
          <div class="card">
            <img src="' . $card["image"] . '" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <p class="card-name text-center">' . $card["name"] . '</p>
            </div>
            <div class="card-info-box">
              <span>' . $card["university"] . '</span><br>
              <span>No. NIDN: ' . $card["nidn"] . '</span><br>
              <span>Prodi: ' . $card["prodi"] . '</span><br>
              <span>Masa Jabatan: ' . $card["masa_jabatan"] . '</span>
            </div>
          </div>
        </div>
      ';
        }
        ?>
    </div>
</div>