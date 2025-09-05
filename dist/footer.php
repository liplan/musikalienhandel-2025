  </div><!-- Row from header.php -->

  <?php //if (have_posts()): ?>
  <?php
  $nav = get_next_posts_link() . get_previous_posts_link();

  if(strlen($nav) > 0): ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="pagination clearfix">
        <div class="col-xs-6 text-left"><?php next_posts_link('&laquo; Vorherige Eintr&auml;ge') ?></div>
        <div class="col-xs-6 text-right"><?php previous_posts_link('N&auml;chste Eintr&auml;ge &raquo;') ?></div>
      </div>
    </div>
  </div>
  <?php endif; ?>

	<footer class="infotextunten">
    <div class="row">
      <div class="col-xs-12">
  			<div class="col-xs-12 col-sm-6">
  				<p>Haben Sie Anregungen zu unserer Website?<br />
  				<a href="//musikalienhandel.de/bug" target="_blank">www.musikalienhandel.de/bug</a></p>
  			</div>

  			<div class="col-xs-12 col-sm-6">
  			<p><a href="//www.musikalienhandel.de/impressum">Impressum</a>&nbsp;<a href="//www.musikalienhandel.de/datenschutz">Datenschutz</a>&nbsp;<a href="#" onclick="CCM.openWidget();return false;">Cookie-Einstellungen öffnen.</a></p>
  				<p>Unsere Hotline 0800-00-68745 ist immer erreichbar - 365 Tage im Jahr.</p>
  				<p>Wir sind 24 Stunden am Tag und 7 Tage in der Woche f&uuml;r Sie da. <a href="//musikalienhandel.de/noten" target="_blank">Noten</a>, <a href="//musikalienhandel.de/instrumente" target="_blank">Instrumente</a>, <a href="//musikalienhandel.de/zubehoer" target="_blank">Zubehör</a></p>
  			</div>
      </div>
    </div>
	</footer>

  <script src="<?= get_template_directory_uri(); ?>/struktur/lib/jquery-3.1.1.slim.min.js"></script>
  <script async src="<?= get_template_directory_uri(); ?>/struktur/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
