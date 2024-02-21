<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title><?php bloginfo('title') ?></title>
</head>

<body>
    <section>
        <a style="text-decoration:none" href="<?php bloginfo('url') ?>">
            <div style="display:flex;align-items:center">
                <?php if(is_home()):?>
                    <h1 style="color:teal;"><?php bloginfo('title') ?></h1>:
                <?php else:?>
                    <h3 style="color:teal;"><?php bloginfo('title') ?></h3>:
                <?php endif;?>
                <h3><?php bloginfo('description') ?></h3>
            </div>
        </a>

        <?php get_search_form() ?>
        <br>
    </section>