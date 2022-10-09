<div class="footer-copyright teal darken-4">
    <div class="container">
        Made by <a class="brown-text text-lighten-3" href="#">Marcomm - Devs.web.</a>
    </div>
</div>
</footer>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?= base_url('assets/deresto/'); ?>js/materialize.js"></script>
<script src="<?= base_url('assets/deresto/'); ?>js/init.js"></script>
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            duration: 500,
            fullWidth: true,
            noWarp: true
        });
    });
    $(document).ready(function() {
        $('.slider').slider({
            indicators: false,
            height: 700,
            transition: 700,
            duration: 800,
            interval: 4000
        });
    })
</script>
</body>

</html>