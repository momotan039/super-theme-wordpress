<?php get_header() ?>

<div class="banner">
    <h1>هذه الصفحة غير متوفرة!!!</h1>
    <div id="search-container"><?php get_search_form() ?></div>
</div>
<br>

<div class="card">
<h2 class="sub-title"> اخر المقالات المضافة حديثا</h2>
</div>
<div class="posts container">
    <?php
    $query=new WP_Query('posts_per_page=4');
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post()
    ?>
            <div class="post card">
                <?php if (has_post_thumbnail()) :
                ?>
                    <?php the_post_thumbnail('full') ?>
                <?php else : ?>
                    <img src="https://via.placeholder.com/300">
                <?php endif; ?>

                <div>
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
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