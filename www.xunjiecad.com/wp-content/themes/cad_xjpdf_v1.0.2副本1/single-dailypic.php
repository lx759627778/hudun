<?php
get_header();
get_template_part('template-parts/content/content','banner-help');
global $myDownloadTimes; $myDownloadTimes = get_post_meta($post->ID,'daily_pic_download_times',true);
?>
<main class="single-main single-main-dailypic clearfix">
    <section class="content">
        <div class="main-content">
            <?php cmp_breadcrumbs(); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="l-artile-content">
                    
                    <h2 class="l-artile-tile">
                        <?php the_title_attribute(); ?>
                    </h2>
                    <div class="post-content"><?php the_content(); ?></div>
                </div>
            <?php endwhile; else : endif;?>
            <ul class="single-nav">
                <li>上一篇：<?php previous_post_link('%link'); ?></li>
                <li>下一篇：<?php next_post_link('%link'); ?></li>
            </ul>
        </div>
        <?php get_sidebar('dailypic-single'); ?>
    </section>
</main>
<script type="text/javascript">
    $.fn.downloadTimesCount = function() {
        var id = $(this).find('input[name="postId"]').val(),
        action = $(this).find('input[name="postAction"]').val(),
        rateHolder = $('.count');
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
</script>
<?php
get_footer();