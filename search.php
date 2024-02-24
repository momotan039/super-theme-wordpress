<?php get_header() ?>

<div class="banner">
    <h1>بحثت عن:<?php echo get_search_query() ?></h1>
    <div id="search-container"><?php get_search_form() ?></div>
</div>

<div class="posts container">
        <?php if (have_posts()) : while (have_posts()) :
                the_post()
        ?>
                <div class="post card">
                    <?php if (has_post_thumbnail()) :
                    ?>
                        <?php the_post_thumbnail('full')?>
                    <?php else : ?>
                        <img src="https://via.placeholder.com/300">
                    <?php endif; ?>

                    <div>
                        <h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
                        <p><?php the_excerpt() ?></p>
                        <?php the_category() ?>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>

    </div>
<?php get_footer() ?>