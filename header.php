<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">

        <?php do_action('tailpress_header'); ?>

        <?php if (is_front_page()) : ?>
            <header data-headertype='home' class='stickyHeader mt-0 fixed w-full z-50 top-0 md:transition md:duration-300 md:ease-in-out bg-transparent text-gray-50'>
            <?php else : ?>
                <header data-headertype='secondary' class='stickyHeader mt-0 fixed w-full z-50 top-0 md:transition md:duration-300 md:ease-in-out bg-jcblue text-gray-50'>
                <?php endif; ?>

                <div class="mx-auto container py-3">
                    <div class="lg:flex lg:justify-between lg:items-center">
                        <div class="flex justify-between items-center">
                            <div>
                                <?php if (has_custom_logo()) { ?>
                                    <?php the_custom_logo(); ?>
                                <?php } else { ?>
                                    <div class="text-lg uppercase">
                                        <a href="<?php echo get_bloginfo('url'); ?>" class="font-bold tracking-normal font-jcLogo text-4xl">
                                            <?php echo get_bloginfo('name'); ?>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="lg:hidden">
                                <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                                    <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                            <g id="icon-shape">
                                                <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div class='flex flex-row items-center justify-center'>

                            <?php
                            wp_nav_menu(
                                array(
                                    'container_id'    => 'primary-menu',
                                    'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                                    'menu_class'      => 'lg:flex lg:-mx-4 font-semibold',
                                    'theme_location'  => 'primary',
                                    'li_class'        => 'lg:mx-4',
                                    'fallback_cb'     => false,
                                )
                            );
                            ?>


                            <ul class='hidden lg:flex lg:flex-row lg:list-none'>
                                <li class='mx-4 md:ml-8'>
                                    <a href='https://www.facebook.com/JacobCreativeCA'><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class='mx-4 md:ml-4'>
                                    <a href='https://twitter.com/JacobCreativeCA'><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class='mx-4 md:ml-4'>
                                    <a href='https://www.instagram.com/jacobcreativeca/'><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                </header>

                <div id="content" class="site-content flex-grow">

                    <!-- Start introduction -->
                    <?php if (is_front_page()) : ?>
                        <div class='bg-no-repeat bg-cover bg-center bg-jcbluedark bg-blend-multiply' style="background-image: url('/wp-content/themes/tailpress/resources/img/homepage_bg_2.jpg');">
                            <div class='container mx-auto py-96'>
                                <div class='grid grid-cols-1 md:grid-cols-3 text-center md:text-left'>
                                    <div class='col-span-2'>
                                        <h2 class='mb-8 text-gray-50 font-jcHeading font-bold tracking-tight text-5xl'>
                                            We're a web design and development studio &#8212; focusing on
                                            bringing businesses online and increasing their online presence
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="container mx-auto my-12 border-b pb-12">
                    <h1 class="font-bold text-lg text-secondary uppercase">TailPress</h1>
                    <h2 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4">Rapidly build your WordPress theme
                        with <a href="https://tailwindcss.com" class="text-primary">Tailwind CSS</a>.</h2>
                    <p class="max-w-screen-lg text-gray-700 text-lg font-medium mb-10">TailPress is your go-to starting
                        point for developing WordPress themes with TailwindCSS and comes with basic block-editor support out
                        of the box.</p>
                    <a href="https://github.com/jeffreyvr/tailpress" class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
                        on Github</a>
                </div> -->

                    <?php endif; ?>
                    <!-- End introduction -->

                    <?php do_action('tailpress_content_start'); ?>

                    <main>