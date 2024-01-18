@vite('resources/js/app.js')

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/velocity.min.js"></script>
<script src="assets/js/velocity.ui.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>

<script>
    $(document).ready(function() {
        $('[data-toggle="modal"]').on('click', function() {
            var imageSrc = $(this).data('image-src');
            var imageAlt = $(this).data('image-alt');

            console.log(imageAlt);

            $('#imageModal .modal-title').text(imageAlt);
            $('#imageModal #modalImage').attr('src', imageSrc);
            $('#imageModal #modalImage').attr('alt', imageAlt);

            $('#imageModal').modal('show');
        });
    });
</script>
