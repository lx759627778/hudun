<?php
/**
 * Template name: 迅捷PDF虚拟打印机购买页
 */
get_header();
?>
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/buy-c.css">
    <main class="main-ctt">
      <section class="buy-banner bg4">
            <div class="buy-banner-center w1200">
                <h6><span><span>89</span>元</span>超值套餐组合</h6>
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
                            <div class="Setmeal-table-td height-td1">
                                <p class="setmeal-p-h">套餐内容</p>
                            </div>
                        </div>
                        <div class="Setmeal-table-tr column-4">
                            <i class="hot-setmeal"></i>
                            <div class="Setmeal-table-td td-bg">
                                <p class=" font-24"><span class="icon-Set1">89VIP套餐</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p class="cl-blue">终身</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>¥<span class="font-26">89</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>三台电脑</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>50次</p>
                            </div>
                            <div class="Setmeal-table-td height-td1">
                                <div class="Setmeal-inline">
                                   <p class="Setmeal-lg icon-lg5">迅捷PDF虚拟打印机<br/><span>【3台电脑终身授权】 </span></p>
                                   <p class="Setmeal-lg icon-lg1">迅捷PDF编辑器<br/>【1台电脑一年授权】</p>
                                    <p class="Setmeal-lg icon-lg2">迅捷PDF转换器<br/>【1台电脑一年授权】</p>
                                    <p class="Setmeal-lg icon-lg3">捷速OCR文字识别<br/>【1台电脑一年授权】</p>
                                </div>
                            </div>
                        </div>
                        <div class="Setmeal-table-tr column-4">
                            <div class="Setmeal-table-td td-bg">
                                <p class="font-24"><span class="icon-Set2">88VIP套餐</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p class="cl-blue">终身</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>¥<span class="font-26">88</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>三台电脑</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>50次</p>
                            </div>
                            <div class="Setmeal-table-td height-td1">
                                <div class="Setmeal-inline">
                                    <p class="Setmeal-lg icon-lg5">迅捷PDF虚拟打印机<br/><span>【3台电脑终身授权】 </span></p>
                                </div>
                            </div>
                        </div>
                        <div class="Setmeal-table-tr column-4">
                            <div class="Setmeal-table-td td-bg">
                                <p class="font-24"><span class="icon-Set3">48VIP套餐</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p class="cl-blue">终身</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>¥<span class="font-26">48</span></p>
                            </div>
                            <div class="Setmeal-table-td">
                                <p>一台电脑</p>
                            </div>
                            <div class="Setmeal-table-td td-bg">
                                <p>20次</p>
                            </div>
                            <div class="Setmeal-table-td height-td1">
                                <div class="Setmeal-inline">
                                    <p class="Setmeal-lg icon-lg5">迅捷PDF虚拟打印机<br/><span>【1台电脑终身授权】 </span></p>
                                </div>
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