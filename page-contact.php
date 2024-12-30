<?php
get_header(); 
?>

<main>
    <div class="contact-main">
        <?php
        while ( have_posts() ) : the_post(); 
            the_content();
        endwhile;
        ?>
        
        <!-- Contact Form Shortcode -->
        <div class="contact-form-container">
            <?php echo do_shortcode('[contact-form-7 id="80d6e9d" title="Contact Form 1"]'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>