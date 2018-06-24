<!-- div container closing, look at header.php -->
</div>
<!-- PopperJs, Bootstrap 4 depedency -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('nav a[href^="/ynote/' + location.pathname.split("/")[2] + '"]').addClass('active');
    });
</script>
</body>

</html>