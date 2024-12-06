<?php get_header(); ?>

<h1>Search Results for: <?php echo get_search_query(); ?></h1>

<?php if ( have_posts() ) : ?>
    <div class="search-results">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="search-result">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile; ?>
        <?php the_posts_navigation(); ?>
    </div>
<?php else : ?>
    <p>No results found for "<?php echo get_search_query(); ?>"</p>
<?php endif; ?>

<?php get_footer(); ?>
