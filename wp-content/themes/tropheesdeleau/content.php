<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<article>
	<h2>Catégorie</h2>
	<img src="http://placehold.it/555x155">
	<h1>Lorem ipsum dolor sit amet</h1>
	<p>
		Le Lorem Ipsum est simplement
		du faux texte employé dans la composition
		et la mise en page avant impression.
		Le Lorem Ipsum est le faux texte
		standard de l'imprimerie depuis les années
		1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker. <a href="#">Lire la suite</a>
	</p>
	<ul class="social_media">
		<li><img src="http://placehold.it/18x18"></li>
		<li><img src="http://placehold.it/18x18"></li>
		<li><img src="http://placehold.it/18x18"></li>
	</ul>
</article>
<?php /*
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	ICI CONTENU normal !!!!
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>
*/
