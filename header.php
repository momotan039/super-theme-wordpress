<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title><?php bloginfo('title') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <h1 class="logo"><a href=<?php echo site_url()?>><?php bloginfo('title')?></a></h1>
            <nav>
                <?php wp_nav_menu()?>
            </nav>
        </div>
    </header>