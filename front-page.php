<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main>
    <code><frond-page class="php"></frond-page> </code>
    <h3>index.php</h3>
 <session class="blocflex"> 
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        //the_title('<h1>','</h1>');
       // the_permalink();?>
       <article> 
       <h3> <a href ="<?php the_permalink();?>"> <?= get_the_title(); ?></a> </h3>
        </article>
        <?php 
        //the_content();
        // the_content(); 
        //the_excerpt();
    echo wp_trim_words(get_the_excerpt(), 4);
    endwhile;
endif;
?>  
</session> 
</main> 
<?php get_footer(); ?>

