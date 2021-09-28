<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

?>










<article class="container">
  
  <div class="content">
  <?php the_post_thumbnail('category-thumb'); ?>
      <div class="content-overlay"><h3 class="content-title"><a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?>    
      </a></h3> <p> <?php echo get_the_content();?> </p></div>
      <div class="content-imageHover">
      <div class="content-details fadeIn-bottom">
      
    </div>
  </div>
</div>
</article>
