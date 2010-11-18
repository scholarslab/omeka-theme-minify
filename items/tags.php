<?php head(array('title' => 'Browse by Tag')); ?>

<div id="tagcloud">
    <?php echo tag_cloud($tags, uri('items/browse')); ?>
</div>

<?php foot(); ?>