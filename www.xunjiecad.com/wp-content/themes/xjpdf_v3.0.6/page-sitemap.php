<?php
/**
 * Template Name: 站点地图
 */
get_header();
require 'inc/no-category.php';
?>
<hr>
<main class="wrapper page-sitemap">
    <?php cmp_breadcrumbs(); ?>
    <dl class="content">
        <dd class="nav-pages">
            <div>
                <?php
                    $exclude_id = get_page_id_by_slug("软件卸载");
                    wp_page_menu(
                        array(
                        'depth'       => 0,
                        'sort_column' => 'menu_order, post_title',
                        'menu_class'  => 'menu',
                        'include'     => '',
                        'exclude'     => $exclude_id,
                        'echo'        => true,
                        'show_home'   => false,
                        'link_before' => '<h3>',
                        'link_after'  => '</h3>'
                    ));
                ?>
            </div>
        </dd>
        <dd>
            <?php
                global $cat;
                $cats = get_categories(array(
                    'child_of' => $cat,
                    'parent' => $cat,
                    'hide_empty' => 0
                ));
                $c = get_category($cat);
                if(!empty($cats)){
                    foreach($cats as $the_cat){
                        $posts = get_posts(array(
                            'category' => $the_cat->cat_ID,
                            'numberposts' => 10,
                        ));
                        if(!empty($posts)){
                            echo '<div class="sitemap-article-list"><h3 class="title"><a title="'.$the_cat->name.'" href="'.get_category_link($the_cat).'">'.$the_cat->name.'</a><span class="btn-accordion">点击展开</span></h3>
                                <ul class="item">';
                            foreach($posts as $post){
                                echo '<li>
                                <a title="'.$post->post_title.'" href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
                            }
                            echo '</ul></div>';
                        }
                    }
                }
            ?>
        </dd>
    </dl>
</main>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".btn-accordion").on({
            click:function(){
                $(this).parent().siblings(".sitemap-article-list > ul").toggleClass("on");
                $(this).toggleClass("active")
                if($(this).hasClass('active')){
                    $(this).html('点击收起');
                }else{
                    $(this).html('点击展开');
                }
                return false;
            }
        });
    });
</script>
<?php
get_footer();