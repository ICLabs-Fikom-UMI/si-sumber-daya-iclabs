</div>
<div class="footer">
    <p>&copy; 2024 IcLabs FIKOM UMI. All rights reserved. | Designed by <a href="https://wa.me/qr/HCTOHXBQMPIMD1" target="_blank">Muhammad Dani Arya Putra</a></p>
</div>
<script src="<?= BASEURL ?>/asset/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
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
    // Function to set side-diklik class on clicked link and store it in local storage
    function setActive(event) {
        // Remove 'side-diklik' class from all links
        var links = document.querySelectorAll('.dashboard-link');
        links.forEach(function(link) {
            link.classList.remove('side-diklik');
        });

        // Add 'side-diklik' class to the clicked link
        event.currentTarget.classList.add('side-diklik');

        // Store the ID of the side-diklik link in local storage
        localStorage.setItem('activeLinkId', event.currentTarget.id);
    }

    // Add event listeners to each link to handle click
    document.getElementById('dashboard-link').addEventListener('click', setActive);
    document.getElementById('kepala-lab-link').addEventListener('click', setActive);
    document.getElementById('laboran-link').addEventListener('click', setActive);
    document.getElementById('asisten-link').addEventListener('click', setActive);

    // Check if there is an side-diklik link in local storage and add 'side-diklik' class
    var activeLinkId = localStorage.getItem('activeLinkId');
    if (activeLinkId) {
        document.getElementById(activeLinkId).classList.add('side-diklik');
        document.getElementById(activeLinkId).classList.remove('text-black');
    }
</script>
<script>
    function validatePassword() {
        var password = document.getElementById("floatingPassword").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        if (password !== confirmPassword) {
            alert("Password yang Anda masukkan tidak sama. Silakan periksa kembali.");
            return false;
        }

        return true;
    }
</script>


</body>

</html>