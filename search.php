<?php get_header() ?>
<h1>results seach:</h1>
<section>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <!-- call the_post method to prevent the infinty loop -->
            <?php the_post(); ?>
            <article>
                <a href="<?php the_permalink() ?>">
                    <h3><?php the_title() ?></h3>
                </a>
                <?php the_excerpt() ?>
                <div>
                    <span>Catgories:<?php the_category(',') ?></span>
                    <?php the_tags('| tags:', ',') ?>
                </div>
                <span>Created By:<?php the_author_posts_link() ?> On:<?php the_date() ?></span>
            </article>
            <br>
        <?php endwhile ?>
    <?php else : ?>
        <h2>Theres no results!!</h2>
    <?php endif ?>
</section>

<?php get_sidebar() ?>
<?php wp_footer() ?>