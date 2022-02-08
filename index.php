<?php get_header(); ?>
<div class="bg-white my-8 mx-auto">
    <div class="container mx-auto my-8">
        <div class='flex w-full py-20'>
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) :
                    the_post();
                ?>

                    <?php get_template_part('template-parts/content', get_post_format()); ?>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
