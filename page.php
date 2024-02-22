<?php get_header() ?>

<div id="single-page" class="container">
    <div class="post card">
        <div class="header">
            <h2><?php the_title() ?></h2>
            <small>
                <?php echo get_the_date()?>
                <?php echo the_author()?>
            </small>
           <?php the_category() ?>
        </div>
        <div class="content">
            <?php the_content() ?>
        </div>
    </div>
   <?php get_sidebar()?>
</div>
<?php get_footer() ?>