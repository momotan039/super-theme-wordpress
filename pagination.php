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
        <div class="next">
            <?php echo next_posts_link('التالي') ?>
        </div>
        <div class="before">
            <?php echo previous_posts_link('السابق') ?>
        </div>
        </div>
    <?php endif ?>
</div>