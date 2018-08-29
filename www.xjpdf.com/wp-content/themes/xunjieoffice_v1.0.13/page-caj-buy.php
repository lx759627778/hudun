<?php
/**
 * Template name: 迅捷转换器购买页
 */
get_header();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/buy-c.css">
    <main class="main-ctt">
      <section class="buy-banner bg5">
            <div class="buy-banner-center w1200">
                <h6><span><span>88</span>元</span>终生授权</h6>
            </div>
        </section>
        <!-- 表单-->
        <?php get_template_part( 'buy','from'); ?>
        <section class="line-buy bg-f6fafc">
            <div class="line-buy-center w1200">
                <h6><span>套餐介绍</span></h6>
                <div class="line-buy-ctt">
                    <div class="Setmeal-table clearfix">
                        <div class="Setmeal-table-th setmeal-th column-4">
                            <div class="Setmeal-table-td td-bg">
                                <p class="font-24">套餐类型</p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>授权时间</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>套餐价格</p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>文档限制</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>人工服务</p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>记录漫游</p>
                            </div>
                        </div>
                        <div class="Setmeal-table-tr column-4">
                            <i class="hot-setmeal"></i>
                            <div class="Setmeal-table-td td-bg">
                                <p class=" font-24"><span class="icon-Set1">88VIP套餐</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p class="cl-blue">终身</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>¥<span class="font-26">88</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>不限（单个文件50M）</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>20次</p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>不限</p>
                            </div>
                        </div>
                        <div class="Setmeal-table-tr column-4">
                            <div class="Setmeal-table-td td-bg">
                                <p class="font-24"><span class="icon-Set2">68VIP套餐</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p class="cl-blue">一年</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>¥<span class="font-26">68</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>不限（单个文件50M)</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>20次</p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>漫游半年</p>
                            </div>
                        </div>
                        <div class="Setmeal-table-tr column-4">
                            <div class="Setmeal-table-td td-bg">
                                <p class="font-24"><span class="icon-Set3">48VIP套餐</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p class="cl-blue">半年</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>¥<span class="font-26">48</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>不限（单个文件50M)</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>10次</p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>漫游三个月</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!-- 注意事项-->
        <?php get_template_part( 'buy','pub'); ?>
    </main>
        <!-- buy弹窗 -->
    <?php get_template_part( 'pop','buy'); ?>
    <?php
get_footer();