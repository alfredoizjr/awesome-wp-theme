<form class="searchForm" action="<?php home_url('/') ?>" method="get">
    <input placeholder="Search" type="text" name="s" value="<?php echo the_search_query(); ?>" />
</form>