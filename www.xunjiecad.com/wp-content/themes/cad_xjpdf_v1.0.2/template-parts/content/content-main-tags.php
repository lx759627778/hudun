<dl class="site-tags clearfix">
    <?php 
        // 得到所有标签列表（57为标签id，想获取某个标签只需添加进去用逗号隔开，如'include' => '13，57'）
        $args=array(
            'include' => '6,7,8,9,10,11,12,20,21,22,23,29,30,31,33,38'
        ); 
        $tags = get_tags($args);
        // 循环所有标签 
        foreach ($tags as $tag) { 
        // 得到标签ID 
        $tagid = $tag->term_id; 
        // 得到标签下所有文章 
        // query_posts("showposts=-1&tag_id=$tagid"); 
    ?>
        <!-- 输出标签标题及链接 --> 
        <dd style="font-weight:400;"><a href="<?php echo get_tag_link($tagid);?>" title="<?php echo $tag->name?>"><?php echo $tag->name; ?></a></dd>
        
    <?php } ?>
    <?php 
        if(is_page('problems')){
            echo '<dd style="font-weight:400;"><a href="/help.html" title="使用教程" class="problems">使用教程</a></dd>';
        }elseif (is_page('dailypic') || is_archive('dailypics')) {
            echo '';
        }else{
            echo '<dd style="font-weight:400;"><a href="/problems.html" title="常见问题" class="problems">常见问题</a></dd>';
        }
     ?>
</dl>