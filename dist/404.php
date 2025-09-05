<?php get_header(); ?>

<div id="content">
  <div class="sidebar-background col-xs-3"></div>

  <div id="inhalt" class="col-xs-12 col-sm-9">

    <div class="col-xs-12">
      <h3>Diese Seite wurde nicht gefunden.</h3>

      <p>Haben Sie Anregungen zu unserer Website?<br />
      <a href="/bug" target="_blank">www.musikalienhandel.de/bug</a></p>
    </div>

    <div class="col-xs-12">
      <h3>Vielleicht finden Sie hier wonach Sie suchen:</h3>
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

  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
