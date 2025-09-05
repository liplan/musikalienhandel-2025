<form class="form-inline" method="get" id="searchform" action="<?php site_url(); ?>/">
  <div class="input-group">
    <input type="text" class="form-control input-sm" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Suche...">
    <label class="sr-only" for="searchsubmit">Sucheingabe</label>

    <span class="input-group-btn">
      <button type="submit" id="searchsubmit" value="Suche" class="btn btn-default input-sm">finden</button>
    </span>
  </div>
</form>
