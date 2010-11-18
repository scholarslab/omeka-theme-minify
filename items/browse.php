<?php head(array('title'=>'Browse Items')); ?>

<div class="pagination bottom"><?php echo pagination_links(); ?></div>

<?php echo plugin_append_to_items_browse(); ?>

<?php foot(); ?>