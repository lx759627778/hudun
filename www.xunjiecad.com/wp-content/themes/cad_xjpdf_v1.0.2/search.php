<?php
/**
 * Template name: search
 */
get_header();
$page1 =3;
$showposts1 =9;
?>
<?php get_template_part('template-parts/content/content','banner-help'); ?>
<main class="site-main sideber-at-right">
	<section class="content clearfix">
        <div class="main-content">
            <?php get_template_part('template-parts/content/content','main-tags'); ?>
            <div class="l-content">
                <ul class="cat-list help" id="itemContainer">
	              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	              		<li class="post-list">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="container">
                                <div class="post-img-btn">
                                    <?php 
                                        echo '<img src='.catch_that_image().' class="post-img pic" />';
                                     ?>
                                </div>
                                    <h3><?php the_title(); ?></h3>
                                    <p class="excerpt"><?php echo mb_strimwidth(get_the_excerpt(), 0, 90, '...'); ?></p>
                                <span class="more">查看详情</span>
                            </a>
                        </li>
	                <?php endwhile; else: ?>
	                	<div class="search-none">
	                		<img src="<?php mySrc()?>/assets/images/search-none.png" alt="" />
	                		<p>当前您查找的问题暂无答案！</p>
							<p>请通过以下联系方式联系我们的客服人员，我们将尽快为您解答！</p>
							<div class="connect">
								<p>联系电话：<?php myTelNum();?></p>
								<p>技术邮箱：support@huduntech.com</p>
							</div>
	                	</div>
	                <?php endif; ?>
                </ul>
                <p class="post-count3 post-counts"><?php
                    global $wp_query;
                    echo  $wp_query->found_posts;
                ?></p>
                <div class="M-box3 M-box"></div>
            </div>
        </div>

        <?php get_sidebar() ?>
	</section>
</main>
<script type="text/javascript">
    $(document).ready(function(){
    	var siteHost = window.location.host;
        var str = window.location.href;
        var indexNum = str.match(/\/([^\?\/]*)\?/)[1];
        var indexTagNum = str.lastIndexOf("\?");
        var indexTag =  str.substring(indexTagNum+1,str.length);

        $('.M-box3').pagination({
            pageCount:Math.ceil($('.post-count3').text()/10),
            jump:true,
            coping:true,
            homePage:'1',
            endPage:Math.ceil($('.post-count3').text()/10),
            prevContent:'上一页',
            nextContent:'下一页',
            count:2,
            keepShowPN:true,
            current:indexNum==''?1:indexNum,
            jumpBtn:'确定',
            callback:function(){
                var currentPage=$('.M-box3 .active').text();
                var newStr2='/page/'+currentPage+'?'+indexTag;
                    window.location.href=newStr2;
            }
        });
    });
    $(document).ready(function(){
        paginationStyle('.M-box3','.post-count3',10);
    });
</script>
<?php get_footer();