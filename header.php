<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body <?= body_class(); ?>>
    <?= wp_body_open(); ?>