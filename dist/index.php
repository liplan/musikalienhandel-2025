<?php get_header(); ?>

<div id="content" class="narrowcolumn">
  <div class="sidebar-background col-xs-3"></div>

  <div id="inhalt" class="col-xs-12 col-sm-9">
    <?php if (have_posts()) : ?>
  		<?php while (have_posts()) : the_post(); ?>
          <div class="post -has-horizontal-line col-xs-12" id="post-<?php the_ID(); ?>">
  				  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_time('j. F Y') ?></p>
  				  <div class="entry">
              <?php the_content('Den ganzen Beitrag lesen &#187;'); ?>
            </div>
  				  <p class="postmetadata">Kategorie <?php the_category(', ') ?> <strong>|</strong> <?php comments_popup_link('0 Kommentare &#187;', '1 Kommentar &#187;', '% Kommentare &#187;'); ?> <?php edit_post_link('Bearbeiten','<strong>|</strong> ',''); ?> </p>
  			  </div>
  		<?php endwhile; ?>
	  <?php else: ?>
    	<h2 class="center">Nicht gefunden</h2>
    	<p class="center">Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
    	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
    <?php endif; ?>
  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
