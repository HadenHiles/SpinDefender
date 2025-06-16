<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage singleland
 * @since singleland 1.0
 */

$opt = get_option( 'singleland_opt' );
$post_title_length = isset($opt['post_title_length']) ? $opt['post_title_length'] : '';
$post_author = isset($opt['is_post_author']) ? $opt['is_post_author'] : '';



?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog_post_item zoom_in_effect'); ?>>

    <?php 
        get_template_part( 'template-parts/header/excerpt-header', get_post_format() );
    ?>

	<div class="entry-content media_blog_content mt-0">
        <?php
            if(is_sticky()) {
                printf('<span class="featured_post">%s</span>', esc_html__('Featured', 'singleland'));
            }
        ?>
        <div class="post-title entry-title">
            <div class="post-meta">
            <?php
            singleland_posted_on();
            singleland_posted_by();
            ?>
            </div>
            <h2 class="entry-title blog_title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), $post_title_length); ?></a></h2>

            <?php   //the_title( sprintf( ' <h2 class="entry-title blog_title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </div>


		<?php get_template_part( 'template-parts/blog/excerpt/excerpt', get_post_format() ); ?>
            <div class="post-footer">
        <?php singleland_entry_meta_footer(); ?>  
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-${ID} -->