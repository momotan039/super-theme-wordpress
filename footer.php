<footer>
    <div class="container">
        <div class="col">
            <?php
                if ( is_active_sidebar( 'footer-1' ) ) {
                    dynamic_sidebar( 'footer-1' );
                }
            ?>
        </div>
        <div class="col">
            <?php 
                    dynamic_sidebar( 'footer-2' );
            ?>
        </div>
        <div class="col">
        <?php 
                    dynamic_sidebar( 'footer-3' );
            ?>
        </div>
    </div>
</footer>
<?php wp_footer()?>
</body>
</html>