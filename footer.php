<?php
/**
 * Template footer.php
 */
?>
<footer class = "site__footer">
    
    <section class="footer__widget">
        <div>
            <?php dynamic_sidebar('pied-page-1') ?>
        </div>
        <div>
            <?php dynamic_sidebar('pied-page-2') ?>
        </div>
        <div>
            <?php dynamic_sidebar('pied-page-3') ?>
        </div>
    </section>

    <section class="footer__lien">
        <div>
            <?php wp_nav_menu(array('menu' => 'externe1')); ?>
        </div>
        
        <div>
            
        </div>
    </section>
<h5>Tous droits réservés 2023 © Introduction a un gestionnaire de contenu</h5>
</footer>
<?php wp_footer(); ?> 
</body>
</html>
