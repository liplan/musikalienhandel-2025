<?php get_header(); ?>

<div id="content">
  <div class="sidebar-background col-xs-3"></div>

  <div id="inhalt" class="col-xs-12 col-sm-9">
    <?php
    if(have_posts()):
      while(have_posts()):

        the_post();

        ?>
        <div class="row">
          <div class="col-xs-12 -has-horizontal-line">
            <div class="pagination -borderless clearfix">
              <div class="col-xs-6 text-left"><?php next_post_link('&laquo; %link') ?></div>
              <div class="col-xs-6 text-right"><?php previous_post_link('%link &raquo;') ?></div>
            </div>
          </div>
        </div>

    		<div class="post col-xs-12" id="post-<?php the_ID(); ?>">
    			<h1><a href="<?= get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h1>
          <p><?php the_time('j. F Y') ?></p>
          <? include("social_icons.php"); ?>
    			<div class="entry">
    				<?php the_content('<p class="serif">Den ganzen Beitrag lesen  &#187;</p>'); ?>
    					<?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

    						<p class="postmetadata alt fussnote">
    					<small>
    						Der Beitrag wurde
    						<?php /* This is commented, because it requires a little adjusting sometimes.
    							You'll need to download this plugin, and follow the instructions:
    							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
    							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
    						am <?php the_time('l,') ?> den <?php the_time('j. F Y') ?> um <?php the_time('H:i') ?> Uhr ver&ouml;ffentlicht
    						und wurde unter <?php the_category(', ') ?> abgelegt.
    						Du kannst die Kommentare zu diesem Eintrag durch den <?php post_comments_feed_link('RSS 2.0'); ?> Feed verfolgen.

    						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
    							// Both Comments and Pings are open ?>
    							Du kannst einen <a href="#respond">Kommentar schreiben</a> oder einen <a href="<?php trackback_url(true); ?>" rel="trackback">Trackback</a> auf deiner Website einrichten.

    						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
    							// Only Pings are Open ?>
    							Kommentare sind derzeit geschlossen, aber du kannst dennoch einen <a href="<?php trackback_url(true); ?> " rel="trackback">Trackback</a> auf deiner Seite einrichten.

    						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
    							// Comments are open, Pings are not ?>
    							du kannst zum Ende springen und einen Kommentar hinterlassen. Pingen ist im Augenblick nicht erlaubt.

    						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
    							// Neither Comments, nor Pings are open ?>
    							Kommentare und Pings sind derzeit nicht erlaubt.

    						<?php } edit_post_link('Beitrag bearbeiten.','<strong>|</strong> ',''); ?>

    					</small>
    				</p>
    			</div>
      </div>

    	<?php comments_template(); ?>

    	<?php
      endwhile;
    else:
    ?>
  		<div class="col-xs-12">
        <p>Es gibt leider keine Beitr&auml;ge, die deinen Kriterien entsprechen.</p>
      </div>
  	<?php endif; ?>

  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
