<?php get_header(); ?>
<main id="main-content">
    <section class="content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_title( '<h1>', '</h1>' );
                the_content();
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>
