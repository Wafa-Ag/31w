<!-- modele index.php représente le modele par défaut  -->
<?php get_header(); ?><!-- Il va récuperer le header -->
<main>
    <code>front-page.php</code>

    <section class="blocflex">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();

            if (in_category('galerie'))
            {
                get_template_part ("template-parts/categorie", "galerie");
            } else{
                get_template_part ("template-parts/categorie", "note-wp");
            }

        ?>
            <?php endwhile; ?>
        <?php endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>
