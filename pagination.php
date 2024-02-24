<div id="pagination">
    <?php if (is_single()) : ?>
        <div class="next">
            <?php echo get_next_post_link() ?>
        </div>
        <div class="before">
            <?php echo get_previous_post_link() ?>
        </div>
    <?php else : ?>
        <div class="row">
            <?php
            if ($newer_posts_link=get_next_posts_link('السابقة'))
                echo '<div class="next"><i class="fa-solid fa-arrow-right"></i>' . $newer_posts_link . '</div>';

            if ($older_posts_link=get_previous_posts_link('التالية'))
                echo '<div class="next">' . $older_posts_link . '<i class="fa-solid fa-arrow-left"></i></div>';
            ?>
        </div>
    <?php endif ?>
</div>