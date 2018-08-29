<ul  class="quick-entrance">
    <p class="sidebar-tags-title"><img src="<?php mySrc();?>/assets/images/quick_48.jpg" alt="">快捷入口</p>
    <?php
        global $mySRC;
        $tags = get_tags ();
        foreach($tags as $tag) {
            $tag_id = $tag->term_id;
            $tag_name = $tag->name;
            $tag_slug = $tag->slug;
            $tag_link = get_category_link( $tag->term_id );
            echo '<li><a href="'.$tag_link.'" title="'.$tag_name.'"><i class="icon-side-list '.$tag_slug.'"><img src="'.$mySRC.'/assets/images/icons/'.$tag_slug.'.png"></i><span>'.$tag_name.'<span></a></li>';
        }
    ?>
</ul>