<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package Starter_Theme
 */
?>



    </div><!-- #main -->

</div><!-- #page -->

<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>



<footer id="colophon" role="contentinfo">
    <div id="copyright">
        <!-- copyright goes here -->
        <a href="http://ughnett.com" rel="nofollow">theme by Annette Ruchala.</a>
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?> 
</body>
</html>
