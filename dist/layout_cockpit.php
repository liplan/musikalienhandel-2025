<nav id="kopf">

  <div class="col-xs-12 col-md-6">
	  <a href="https://www.musikalienhandel.de"><img src="<?= get_template_directory_uri(); ?>/struktur/images/musikalienhandel.de-logo.svg" class="logo" border="0" alt="Haus der Musik Logo"></a>
  </div>

  <div class="col-xs-12 col-md-5 col-md-push-1">
	  <div id="cockpit">
			<ul id="reiter">
				<li class="cockpit_noten aktiv"><a href="/blog">Blogsuche</a></li>
				<li class="cockpit_noten "><a href="https://www.musikalienhandel.de/instrumente">Instrumente</a></li>
				<li class="cockpit_noten "><a href="https://www.musikalienhandel.de/noten">Noten</a></li>
				<li class="cockpit_noten "><a href="https://www.musikalienhandel.de/zubehoer">Zubeh&ouml;r</a></li>
			</ul>

			<form id="searchform" class="form-horizontal" method="get" action="<?php echo home_url() ?>/">
        <div class="header-searchform row">
            <div class="col-xs-12 col-md-9">
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Im Blog suchen...">
                <label class="sr-only" for="searchsubmit">Sucheingabe</label>
                <span class="input-group-btn">
                  <button type="submit" id="searchsubmit" value="finden" class="btn btn-default input-sm">finden</button>
                </span>
            </div>
          </div>
        </div>
			</form>
		</div>
    <!-- Ende Cockpit -->
  </div>

  <!--<a href="/blog/2015/03/08/anleitung-zum-mentalen-ueben/"><div id="neuXXX"></div></a>-->
  <div class="col-xs-12">
    <div id="graue_leiste">
  	   <!--<div id="meinkontohilfe"><a href="/faq" target="_blank">Hilfe</a></div>-->
    </div>
  </div>

  <div class="col-xs-12" id="navidrumherum">
    <ul id="blognavigation">
      <?php wp_list_categories('show_count=1&title_li='); ?>
    </ul>
  </div>

	<!-- Ende Kopf -->
</nav>

<!--<div class="col-xs-2 col-xs-only">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>-->
