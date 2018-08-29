<?php
/**
 * Template name: Page Dailypic
 */
get_header();
$showposts1 =9;
?>
<?php get_template_part('template-parts/content/content','banner-help'); ?>
<main class="site-main sideber-at-right">
    <section class="content clearfix">
        <div class="main-content">
            <?php get_template_part('template-parts/content/content','main-tags'); ?>
            <div class="l-content">
                    <?php
                        function get_dailypic_lists($orderby){
                            global $wp_query, $wp_rewrite, $mySRC;
                            $per_page = 9;
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            if ($orderby ==='hot'){
                                $args = array(
                                    'post_type' => 'dailypic',
                                    'showposts' => $limit,
                                    'paged'     => $paged,
                                    'meta_key'  => 'post_views_count',
                                    'orderby'   => 'meta_value_num',
                                    'order'     => 'DESC',
                                    'posts_per_page' => $per_page
                                );
                            }elseif($orderby ==='new'){
                                $args = array(
                                    'post_type' => 'dailypic',
                                    'showposts' => $limit,
                                    'paged'     => $paged,
                                    'orderby'   => 'modified',
                                    'order'     => 'DESC',
                                    'posts_per_page' => $per_page
                                );
                            }else{
                                $args = array(
                                    'post_type' => 'dailypic',
                                    'showposts' => $limit,
                                    'paged'     => $paged,
                                    'orderby'   => 'date',
                                    'order'     => 'DESC',
                                    'posts_per_page' => $per_page
                                );
                            }
                            $limit = get_option('posts_per_page');
                            query_posts( $args );
                            if ( have_posts() ) :
                                while (have_posts() ) : the_post();
                        ?>
                            <li href="<?php the_permalink() ?>" class="post-list">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="container">
                                    <div class="post-img-btn">
                                        <?php 
                                            echo '<img src='.catch_that_image().' class="post-img pic" />';
                                         ?>
                                    </div>
                                        <h3><?php the_title(); ?></h3>
                                        <p class="excerpt"><?php echo mb_strimwidth(get_the_excerpt(), 0, 90, '...'); ?></p>
                                    <p class="post_data">
                                        <span class="public_date"><?php the_time('Y-m-d'); ?></span>
                                        <span class="view_count"><?php echo esc_html( get_post_meta( get_the_ID(), 'post_views_count', true ) ); ?></span>
                                        
                                        
                                    </p>
                                </a>
                                <a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'daily_pic_download_link', true ) ); ?>" rel="bookmark" title="<?php the_title(); ?>" target="_blank" class="fileDownloadTimes"><span class="count"><?php echo esc_html( get_post_meta( get_the_ID(), 'daily_pic_download_times', true ) ); ?></span><input type="hidden" name="postAction" value="download"><input type="hidden" name="postId" value="<?php $postid=get_the_ID(); echo $postid; ?>"></a>
                            </li>
                            <?php
                                endwhile; else:
                                endif;
                            }
                        ?>

                <ul  class="dailypic-cat-list cat-list help">
                    <?php get_dailypic_lists('new'); ?>
                </ul>
                <ul  class="dailypic-cat-list cat-list help active">
                    <?php get_dailypic_lists('hot'); ?>
                </ul>
                <p class="post-count1 post-counts"><?php $count_posts = wp_count_posts('dailypic'); echo $published_posts = $count_posts->publish;?></p>
                <div class="M-box M-box1"></div>
            </div>
        </div>

        <?php get_sidebar('dailypic') ?>
    </section>
</main>
<script type="text/javascript">
    $(document).ready(function(){
        paginationInit('.M-box1','.post-count1',9);
        paginationStyle('.M-box1','.post-count1',9);
    });
    $(".dailypic_post .more").click(function(event) {
        if ($(this).attr('orderby')=='modified') {
            $('.site-main .cat-list').eq(0).addClass('active').siblings().removeClass('active');
        }else if($(this).attr('orderby')=='meta_value_num'){
            $('.site-main .cat-list').eq(1).addClass('active').siblings().removeClass('active');
        };
        
    });
    $.fn.downloadTimesCount = function() {
        var id = $(this).parents('li').find('input[name="postId"]').val(),
        action = $(this).parents('li').find('input[name="postAction"]').val(),
        rateHolder = $(this).parents('li').find('.count');
        var ajax_data = {
            action: "dailypic_download_times",
            um_id: id,
            um_action: action
        };
        $.post("/wp-admin/admin-ajax.php", ajax_data,
        function(data) {
            $(rateHolder).html(data);
        });
        return false;
    };
    $(document).on(
        "click",
        ".fileDownloadTimes",
        function() {
            $(this).downloadTimesCount();
    });
    $(document).on(
        "click",
        ".post-img-btn",
        function() {
            $(this).downloadTimesCount();
    });
</script>
<?php get_footer();