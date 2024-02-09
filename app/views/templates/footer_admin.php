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
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $('.btn_delete').on('click', function(event) {
                event.preventDefault();
                const href = $(this).attr('href');

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success ms-2",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                    title: "Apakah Anda Yakin?",
                    text: "Data Akan Menghilang Secara Permanent",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Hapus",
                    cancelButtonText: "Batalkan",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = href;
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire({
                            title: "Cancelled",
                            text: "Hapus Data Telah Dibatalkan",
                            icon: "error"
                        });
                    }
                });
            });
</script> -->
</body>

</html>