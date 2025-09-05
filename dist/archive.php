<?php get_header(); ?>

<div id="content">
  <div class="sidebar-background col-xs-3"></div>

  <div id="inhalt" class="col-xs-12 col-sm-9">
    <div class="col-xs-12">
  		<div class="alignleft">
  	    <?php if (have_posts()) : ?>
  	    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
  	    <?php /* If this is a category archive */ if (is_category()) { ?>

    		<h3 class="pagetitle" style="text-align:left;">Archiv der Kategorie &#8216;<?php echo single_cat_title(); ?>&#8216; </h3>

     	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    		<h3 class="pagetitle">Tagesarchiv f&uuml;r den <?php the_time('j. F Y'); ?></h3>

    	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    		<div class="alignleft"><h3 class="pagetitle">Monatsarchiv f&uuml;r <?php the_time('F Y'); ?></h3></div>

    		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    		<h3 class="pagetitle">Jahresarchiv f&uuml;r <?php the_time('Y'); ?></h3>

    	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    		<h3 class="pagetitle">Autoren Archiv</h3>

    		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    		<h3 class="pagetitle">Blog Archiv</h3>

        <?php } ?>
  	  </div>
  	</div>

    <?php if (have_posts()): ?>
    <div class="row">
      <div class="col-xs-12">
        <div class="clearfix">
          <div class="col-xs-6 text-left"><?php next_posts_link('&laquo; Vorherige Eintr&auml;ge') ?></div>
          <div class="col-xs-6 text-right"><?php previous_posts_link('N&auml;chste Eintr&auml;ge &raquo;') ?></div>
        </div>
      </div>
    </div>
    <?php endif; ?>

		<?php while (have_posts()) : the_post(); ?>
      <div class="post -has-horizontal-line col-xs-12" id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_time('j. F Y') ?></p>
        <div class="entry">
          <?php the_excerpt() ?>
        </div>
        <p class="postmetadata">Kategorie <?php the_category(', ') ?> <strong>|</strong> <?php comments_popup_link('0 Kommentare &#187;', '1 Kommentar &#187;', '% Kommentare &#187;'); ?> <?php edit_post_link('Bearbeiten','<strong>|</strong> ',''); ?> </p>
      </div>
		<?php endwhile; ?>

	 <?php else : ?>

		<h2 class="center">Nichts gefunden.</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
