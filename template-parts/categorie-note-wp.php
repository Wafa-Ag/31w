<?php
/**
 * templat-part qui permettra d'affichier un article provenat d'un conteneur de classe  blocflex 
 * pour un article de catégoriz note-wp
 */
$titre = get_the_title();

?>
<article class="blocflex__article">
               <h5><a href="<?php the_permalink(); ?>"></a></h5>
               <h6> <?= $titre ?> </h6> 
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>
            