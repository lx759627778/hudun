<div class="surpport-cat-list">
    <ul class="wrapper">
        <?php
            $cats = array(
                'help',
                'problems',
                'library'
            );
            $i=0;
            foreach( $cats as $value ){
                $cat = get_category_by_slug($value);
                $cat_id = $cat->term_id;
                $cat_name = $cat->name;
                $cat_slug = $value;
                $cat_link=get_category_link($cat->term_id);
                $i++;
        ?>
        <li class="category-<?php echo $cat_slug;?>"><a href="/<?php echo $cat_slug; ?>/"><i class="i-0<?php echo $i;?>"></i><?php echo $cat_name; ?></a></li>
        <?php }?>
        <?php
            if( is_page() )  {
                $content = $content . get_option('display_copyright_text');
                $post_data = get_post($post->ID, ARRAY_A);
                $currentPageSlug = $post_data['post_name'];
                echo'<script type="text/javascript">$(function(){$(".category-'.$currentPageSlug.'").addClass("current");});</script>';
            }
        ?>
        <div class="clearfix"></div>
    </ul>
</div>
