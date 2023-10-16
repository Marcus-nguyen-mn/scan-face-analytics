<?php
/**
 * template name: Home Page
 */
get_header();
?>
<section class="mc_main">
<?php
    get_template_part('sections/home/sec-1'); 
    get_template_part('sections/home/sec-2'); 
    get_template_part('sections/home/sec-3'); 
    get_template_part('sections/home/sec-4'); 
    get_template_part('sections/home/sec-5'); 
    get_template_part('sections/footer-custom'); 
?>
</section>
<?php get_footer();?>