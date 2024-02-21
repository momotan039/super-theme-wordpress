<?php get_header() ?>
    <div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <!-- call the_post method to prevent the infinty loop -->
                <?php the_post( );?>
                <article>
                    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                    <?php the_content()?>
                    <div>
                    <span>Catgories:<?php the_category(',')?></span>
                    <?php the_tags('| tags:',',')?>
                    </div>
                    <span>Created By:<?php the_author()?> On:<?php the_date()?></span>
                </article>
                <br>
            <?php endwhile?>
        <?php endif?>
    </div>

    <?php get_sidebar() ?>
    <?php wp_footer() ?>

