<footer class="site-footer">

    <nav class="site-nav">
        <?php $args = array('theme_location' => 'footer'); ?>
        <?php wp_nav_menu($args); ?>
        <!-- Gör att man kan drag 'n drop i menyn så inte alla pages syns-->
    </nav>
    <p>
        <?php bloginfo('name'); ?> - &copy;
        <?php echo date('Y'); ?>
    </p>


</footer>
</div>
<!--/container-->

<?php wp_footer(); ?>
</body>

</html>
