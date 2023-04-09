<article class="note-info">

    <?php the_title('<h1>', '</h1>'); ?>
    <div>
        <?php the_content(); ?>
    </div>

    <?php
    $enseignant = get_field('enseignant');
    $domaine = get_field('domaine');
    if ($enseignant || $domaine) {
        echo '<div class="prof-dom">
        <p>Enseignant : ' . $enseignant . '</p>';
        echo '<p>Domaine : ' . $domaine . '</p>
    </div>';
    }
    ?>
</article>