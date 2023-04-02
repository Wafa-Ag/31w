<?php
/**
 * templat-part qui permettra d'affichier un article provenat d'un conteneur de classe  blocflex 
 * pour un article de catégoriz note-wp
 */
$titre = get_the_title();

$titreNet = substr(str_replace("-", " ", get_the_title()), 3);
?>
<article class="blocflex__articles">

    <h5><a href=<?php the_permalink(); ?>> <?= $titreNet ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article> 