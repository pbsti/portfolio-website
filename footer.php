    <footer>
    <?php
    $footerCopyright = get_field("footer_copyright");
    ?>

        <div class="container-fluid-social-media">
            <a href="https://www.linkedin.com/in/paulina-stiuj-180699"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/pbsti"><i class="fa-brands fa-github"></i></a>
        </div>

        <p><?php echo esc_html($footerCopyright)?></p>
    </footer>
<?php wp_footer()?>
</body>
</html>