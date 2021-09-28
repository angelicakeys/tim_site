<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<article class="slide__conteneur">
			<div class="slide">
			<?php the_post_thumbnail( 'thumbnail' ); ?>
				<div class="slide__info">
					<p><?php echo $tPropriété['sigle'] . " - " . $tPropriété['typeCours'] . " - " . $tPropriété['nbHeure'] ; ?></p>
					<a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['titrePartiel']; ?></a>
					<p>Session : <?php echo $tPropriété['session']; ?></p>
				</div>
			</div>
</article> 
