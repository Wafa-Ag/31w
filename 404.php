

<?php
/**
 * Modèle 404.php représente le modèle pour les pages introuvables
 */

get_header();
?>

<main>
    <h1>Page introuvable</h1>
    <p> Page introuvable , vous pouvez tenter une Recherche </p>

    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></span>
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Recherche', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        </label>
        <button type="submit" class="search-submit"><?php echo esc_html_x( 'Rechercher', 'submit button' ); ?></button>
    </form>
</main>

<?php get_footer(); ?>