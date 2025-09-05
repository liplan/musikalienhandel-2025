<?php get_header(); ?>

<div id="content">
  <div class="sidebar-background col-xs-3"></div>

  <div id="inhalt" class="col-xs-12 col-sm-9">
    <?php if (have_posts()): ?>
      <div class="col-xs-12">
        <div class="alignleft">
  	      <h3 class="pagetitle">Suchergebnisse für "<?php the_search_query(); ?>":</h3>
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

    <?php else: ?>

      <div class="col-xs-12">
        <h3>Es wurden keine Treffer für "<?php the_search_query(); ?>" gefunden.</h3>
        <br>
      </div>

      <div class="col-xs-12">
        <h4>Vielleicht finden Sie hier wonach Sie suchen:</h4>
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
      </div>

      <div class="col-xs-6">
        <h4>Kategorien</h4>
        <ul>
        <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
      </div>

      <div class="col-xs-6">
        <h4>Jahresarchiv</h4>
        <ul>
        <?php wp_get_archives('type=yearly'); ?>
        </ul>
      </div>

   <?php endif; ?>

  </div>
</div> <!-- km -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
