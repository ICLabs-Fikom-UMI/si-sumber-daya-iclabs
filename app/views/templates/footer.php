<div class="footer mt-5">
    <p>&copy; 2024 IcLabs FIKOM UMI. All rights reserved. | Designed by <a href="https://wa.me/qr/HCTOHXBQMPIMD1" target="_blank">Muhammad Dani Arya Putra</a></p>
</div>
<script src="<?= BASEURL ?>/asset/js/bootstrap.js"></script>
<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchText = this.value.toLowerCase().trim();
        const searchableElements = document.querySelectorAll('.searchable');

        searchableElements.forEach(function(element) {
            const elementText = element.textContent.toLowerCase();
            const regex = new RegExp('\\b' + searchText + '\\b', 'g'); // Gunakan regular expression

            if (elementText.match(regex)) {
                element.style.backgroundColor = 'yellow';
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: "end"
                });
            } else {
                element.style.color = '';
            }
        });

        if (!searchText) {
            searchableElements.forEach(function(element) {
                element.style.backgroundColor = '';
            });
        }
    });

    document.getElementById('searchInput').addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
        }
    });
</script>
<script>
    function previewImage(input) {
        const preview = document.getElementById('previewFoto');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    function maxInputNim(id) {
        var input = document.getElementById(id);
        if (input.value.length > 11) {
            input.value = input.value.slice(0, 11);
        }
    }
</script>
<script>
    function maxInputKelas(id) {
        var input = document.getElementById(id);
        if (input.value.length > 2) {
            input.value = input.value.slice(0, 2);
        }
    }
</script>
<script>
    function maxInputTahun(id) {
        var input = document.getElementById(id);
        if (input.value.length > 4) {
            input.value = input.value.slice(0, 4);
        }
    }
</script>
<script>
    function validatePassword() {
        var password = document.getElementById("floatingPassword").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        if (password !== confirmPassword) {
            alert("Password yang Anda masukkan tidak sama. Silakan periksa kembali.");
            document.getElementById("floatingPassword").value = "";
            document.getElementById("confirmPassword").value = "";
            return false;
        }

        return true;
    }
</script>
</body>

</html>