<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even X</title>
    <?php wp_head();?>
</head>
<body>
    <div class="head">
        <div class="left-header">
            <div class="sidebar">
                <div class="bar-btn">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="side-bar" id="sidebar"></div>
            </div>
            <div class="logo">
                <img id="logo" src="<?php echo get_theme_file_uri('/img/logo.png')?>" alt="Event X">
            </div>
        </div>
        <div class="right-header">
            <div class="header-menu">
                <?php
                    wp_nav_menu('header-menu')
                ?>
                <div class="header-menu-access">
                    <a class="access-btn signin" href="<?php echo wp_registration_url()?>">Sign In</a>
                    <a class="access-btn login" href="<?php echo wp_login_url();?>">Login</a>
                </div>
            </div>
        </div>
    </div>