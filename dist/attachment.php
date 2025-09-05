<?php get_header(); ?>

	<div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft">&nbsp;</div>
			<div class="alignright">&nbsp;</div>
		</div>
<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br /><?php echo basename($post->guid); ?></p>

				<?php the_content('<p class="serif">Den ganzen Beitrag lesen &#187;</p>'); ?>

        <?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        
        
				<p class="postmetadata alt">
					<small>
						Der Beitrag wurde
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						am <?php the_time('l,') ?> den <?php the_time('j. F Y') ?> um <?php the_time('H:i') ?> Uhr ver&ouml;ffentlicht
						und wurde unter <?php the_category(', ') ?> abgelegt.
						du kannst die Kommentare zu diesen Eintrag durch den <?php comments_rss_link('RSS 2.0'); ?> Feed verfolgen.
						
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							du kannst einen <a href="#respond">Kommentar schreiben</a>, oder einen <a href="<?php trackback_url(true); ?>" rel="trackback">Trackback</a> auf deiner Seite einrichten.
						
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

	<?php endwhile; else: ?>

		<p>Es gibt leider keine Beitr&auml;ge, die deinen Kriterien entsprechen.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
