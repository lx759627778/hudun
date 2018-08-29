<!-- 搜索 -->
<form action="<?php bloginfo('home'); ?>" method="get">
    <div class="search_input container_box">
        <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="text" placeholder="输入您要查找的问题"/>
        <!-- <input type="hidden" name="category_name" value="all-template" /> -->
        <input type="submit" id="searchsubmit" value="Search" class="search_btn" />
    </div>
</form>