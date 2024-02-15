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
</body>

</html>