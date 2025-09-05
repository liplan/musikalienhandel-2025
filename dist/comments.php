<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Bitte diese Seite nicht direkt aufrufen. Danke!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">Auch die Kommentare sind durch das Passwort gesch&uuml;tzt.<p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<div class="col-xs-12">

<?php if ($comments) : ?>
   <h3 id="comments"><?php comments_number('Keine Reaktion', 'Eine Reaktion', '% Reaktionen' );?> zu &#8220;<?php the_title(); ?>&#8221;</h3>

    <ol class="commentlist">
    <?php foreach ($comments as $comment) : ?>

  		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
  			<cite><?php comment_author_link() ?></cite>
  			<?php if ($comment->comment_approved == '0') : ?>
  			<br /><br /><strong>Achtung: Der Kommentar mu&szlig; erst noch freigegeben werden.</strong>
  			<?php endif; ?>
  			<br />
  			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title="#comment-<?php comment_ID() ?>">Am <?php comment_date('j. F Y') ?> um <?php comment_time('H:i') ?> Uhr</a> <?php edit_comment_link('Bearbeiten','<strong>&#124;</strong>',''); ?></small>
  			<?php comment_text() ?>
  		</li>

    	<?php /* Changes every other comment to a different class */
    		if ('alt' == $oddcomment) $oddcomment = '';
    		else $oddcomment = 'alt';
    	?>
    <?php endforeach; /* end for each comment */ ?>
    </ol>
<?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Kommentarfunktion ist deaktiviert</p>

	<?php endif; ?>
  
<?php endif; ?>
</div>

<div class="col-xs-12">

<?php if ('open' == $post->comment_status) : ?>

  <h3 id="respond">Einen Kommentar schreiben</h3>
  <br>

  <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
  <p>du mu&szlig;t <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">angemeldet</a> sein, um kommentieren zu k&ouml;nnen.</p>
  <?php else : ?>

<!-- BEGIN FORM -->
  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <div class="row">
      <?php if ($user_ID): ?>
        <div class="form-group col-xs-12 col-md-8">
          <p class="help-block">Angemeldet als: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="von diesem Account abmelden">Abmelden &raquo;</a></p>
        </div>
      <?php else: ?>

      <div class="form-group col-xs-12 col-md-8">
        <label for="author">Name <?php if ($req) echo "*"; ?></label>
        <input type="text" name="author" class="form-control" id="author" placeholder="Dein Name" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
      </div>

      <div class="form-group col-xs-12 col-md-8">
        <label for="email">E-Mail <?php if ($req) echo "* (wird nicht ver&ouml;ffentlicht)"; ?></label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Deine E-Mail" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
      </div>

      <div class="form-group col-xs-12 col-md-8">
        <label for="url">Webseite</label>
        <input type="url" name="url" class="form-control" id="url" placeholder="www.example.com" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
      </div>

      <div class="form-group">
        <input type="text" name="urlopulrlo" id="urlopulrlo" value="" size="22" />
      </div>

    <?php endif; ?>

    <!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

    <div class="form-group col-xs-12 col-md-8">
      <label for="comment">Kommentar <?php if ($req) echo "*"; ?></label>
      <textarea class="form-control" name="comment" id="comment" rows="10"></textarea>
    </div>

    <div class="form-group col-xs-12 col-md-8">
      <p class="help-block">mit * gekenntzeichnete Felder müssen ausgefüllt werden.</p>
    </div>

    <div class="form-group col-xs-12 col-md-8">
      <button type="submit" name="submit" class="btn btn-default" id="submit" tabindex="5" value="senden" />Senden</button>
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
    </div>

    <?php do_action('comment_form', $post->ID); ?>
    </div>
  </form>
  <?php endif; // If registration required and not logged in ?>

<!-- END FORM -->
  <br>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
