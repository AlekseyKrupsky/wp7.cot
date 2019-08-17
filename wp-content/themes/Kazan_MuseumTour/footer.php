</div>
<footer id="footer">
    <div class="wrapper">
        <div id="copyright">
        &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        </div>
        <div class="soc"></div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="<?=get_template_directory_uri()?>/script.js"></script>
</body>
</html>