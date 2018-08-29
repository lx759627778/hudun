<p class="sidebar-tags-title"><img src="<?php mySrc();?>/assets/images/quick_48.jpg" alt="">分类索引</p>
<ul class="l-sidebar-categories">
	<?php
		$cats = array(
			'tutorial',
			'tips',
			'problems',
			'defense',
		);
		foreach( $cats as $value ){
			$cat = get_category_by_slug($value);
			$cat_id = $cat->term_id;
			$cat_name = $cat->name;
			$cat_slug = $value;
			$cat_link=get_category_link($cat->term_id);
	?>
	<li><a href="<?php echo $cat_link; ?>" class="btn bg-grad-grey"><span><?php echo $cat_name; ?></span></a></li>
	<?php }?>
</ul>