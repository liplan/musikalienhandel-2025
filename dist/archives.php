<?php
/*
Template Name: Archiv
*/
?>

<?php get_header(); ?>


<div id="relative_inhalt" class="col-xs-12">
			<div id="inhalt">
				<div id="content" class="widecolumn">
					<ul id="blognavigation">
			<?php wp_list_categories('show_count=1&title_li='); ?>
	</ul>

				<?php include (TEMPLATEPATH . '/searchform.php'); ?>

				<h2>Archiv nach Monaten:</h2>
				  <ul>
					<?php wp_get_archives('type=monthly'); ?>
				  </ul>

				<h2>Archiv nach Kategorien:</h2>
				  <ul>
					 <?php wp_list_categories(); ?>
				  </ul>

				</div>
			</div>
</div>

<?php get_footer(); ?>
