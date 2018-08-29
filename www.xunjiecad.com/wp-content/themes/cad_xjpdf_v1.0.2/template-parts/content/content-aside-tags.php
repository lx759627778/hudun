<ul class="sidebar-post container_box">
    <h4>热门标签</h4>
    <div class="article-relate-tags clearfix">
        <?php
            $tags = get_tags ();
            foreach($tags as $tag) {

                $tag_id   = $tag->term_id;
                $tag_name = $tag->name;
                $tag_slug = $tag->slug;
                $tag_link = get_tag_link( $tag->term_id );
                echo '<a href="'.$tag_link.'" title="'.$tag_name.'">'.$tag_name.'</a>';
            }
        ?>
    </div>
</ul>