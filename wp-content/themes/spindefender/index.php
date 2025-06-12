<?php get_header(); ?>
<main id="main-content">
    <section class="hero">
        <h1>Welcome to Spin Defender</h1>
        <p>Modern, clean, and interactive WordPress theme inspired by the best in web design.</p>
    </section>
    <section class="content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_title( '<h2>', '</h2>' );
                the_content();
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>
