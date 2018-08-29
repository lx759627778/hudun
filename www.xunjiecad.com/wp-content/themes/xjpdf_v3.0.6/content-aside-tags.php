<div class="hero-aside-content">
    <h3 class="article-relate">快速访问</h3>
    <div class="article-relate-tags">
        <ul class="wp-cat-items">
            <?php wp_list_categories("hide_empty=1&title_li="); ?>
        </ul>
        <?php wp_tag_cloud('smallest=8&largest=8&unit=px&number=10&format=list');?>
    </div>
</div>