</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer class='bg-jcfooter text-jctextlight w-full'>
    <?php do_action('tailpress_footer'); ?>
    <div class=''>

        <div class='container'>
            <div class='grid grid-cols-4 gap-y-8 py-12'>

                <?php dynamic_sidebar('footer_nav'); ?>

                <!-- <div class=''>
                    <h4 class='font-jcHeading font-medium mb-4 text-white'>Company</h4>
                    <ul class='font-jcSubHeading text-base font-normal leading-2 space-y-2'>
                        <li class=''>
                            <a href='/about'>About</a>
                        </li>
                        <li class=''>
                            <a href='/services'>Services</a>
                        </li>
                        <li class=''>
                            <a href='/blog'>Blog</a>
                        </li>
                        <li class=''>
                            <a href='/contact'>Contact</a>
                        </li>
                    </ul>
                </div> -->
                <div class=''>
                    <h4 class='font-jcHeading font-medium mb-4 text-white'>Customer</h4>
                    <p class=''>Client support and information <br />coming soon</p>
                </div>
                <div class=''>
                    <h4 class='font-jcHeading font-medium mb-4 text-white'>Get in touch</h4>
                    <p class='mb-4'>Based in New Dundee,<br /> Ontario, Canada</p>
                    <div class='flex '>
                        <i data-feather='phone-call' class='h-4 w-4 my-auto mr-3 text-white'></i> +1 234 567 8910
                    </div>
                    <div class='flex'>
                        <i data-feather='mail' class='h-4 w-4 my-auto mr-3 text-white'></i> josh@jacobcreative.ca
                    </div>
                </div>
                <div class=''>
                    <h4 class='font-jcHeading font-medium mb-4 text-white'>Subscribe to our newsletter</h4>
                    <p>Coming soon...</p>
                </div>


            </div>
        </div>

        <div class='border-t border-white border-opacity-30'>
            <div class='container'>
                <div class='flex justify-between pt-10 pb-6'>
                    <a href='/' class={`font-jcLogo font-bold tracking-normal text-4xl flex items-center text-white my-auto`}>Jacob Creative</a>

                    <p class='flex my-auto'>&copy; 2021 JacobCreative. Made with
                        <i class="fas fa-heart text-jcblue mt-1 mx-2"></i> in Ontario.
                    </p>

                    <ul class='flex flex-row list-none'>
                        <li class='mx-4 md:ml-8 hover:text-jcblue'>
                            <a href='https://www.facebook.com/JacobCreativeCA'><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class='mx-4 md:ml-4 hover:text-jcblue'>
                            <a href='https://twitter.com/JacobCreativeCA'><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class='mx-4 md:ml-4 hover:text-jcblue'>
                            <a href='https://www.instagram.com/jacobcreativeca/'><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- <footer id="colophon" class="site-footer bg-gray-50 py-12" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>

	<div class="container mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer> -->

</div>

<?php wp_footer(); ?>
<script>
    feather.replace()
</script>
</body>

</html>