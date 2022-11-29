<?php get_template_part( 'template-parts/section/section', 'form' ); ?>
<footer id="footer">
    <div class="container">
        <div class="row ">
            <div class="col-sm-6">
                <div class="footer__copyright">
                    <p>All Rights Reserved Stolmar Suchodolscy</p>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="footer__design">
                    <p>Projekt i realizacja:</p>
                    <a href="https://regalestate.pl/" title="RegalEstate" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-regalestate.png"
                             alt="Regal Estate" width="100" height="34">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script>
setTimeout(function () {
  document.querySelector(".preloader").classList.add("preloader-loaded");
}, 90);
</script>

</body>
</html>