<?php

/**
 * Created by PhpStorm.
 * User: marina
 * Date: 4/2/17
 * Time: 12:29 PM
 */

?>

<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	<input type="search" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="Search" />
</form> 