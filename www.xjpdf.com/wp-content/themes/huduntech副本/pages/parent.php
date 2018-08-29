<?php
/*
Template Name:家长监护
*/
get_header()?>
<header class="header-wrap">
    <div class="container">
        <div class="row header">
            <a class="logo" href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
            <ul class="right inline nav">
                <li><a href="<?php echo get_option('home'); ?>">首页<span></span></a></li>
                <li><a href="<?php echo get_option('home'); ?>/products.html">产品中心<span></span></a></li>
                <li><a href="<?php echo get_option('home'); ?>/about.html">关于我们<span></span></a></li>
            </ul>
        </div>
        <ul class="banner-wrapper">
            <li class="row banner "></li>
        </ul>
    </div>
</header>
<main class="main-content">
    <div class="container parent-wrapper">
        <fieldset class="text-center parent-title">
            <legend class="parent-title-cxt">
                <span>●</span>家长监护<span>●</span>
            </legend>
        </fieldset>
        <h2>家长监护工程概述</h2>
        <p>“网络游戏未成年人家长监护工程”是一项由多家网络游戏企业共同参与实施，由中华人民共和国文化部指导，旨在加强家长对未成年人参与网络游戏的监护，引导未成年人健康、绿色参与网络游戏，和谐家庭关系的社会性公益行动。它提供了一种切实可行的方法，一种家长实施监控的管道，使家长纠正部分未成年子女沉迷游戏的行为成为可能。</p>
        <p>该项社会公益行动充分反映了中国网络游戏行业高度的社会责任感，对未成年玩家合法权益的关注及对用实际行动营造和谐社会的愿望。</p>
        <h2>监护人提出申请</h2>
        <p>互盾科技提供7×12小时电话热线021-56456318 随时提供家长监护功能申请。</p>
        <p>监护人需通过邮寄、传真、快递或上门的方式，向我司提供有效材料。在收到材料后，我司即开始启动家长监护功能审核流程，首先进入账号身份确认期。</p>
        <p>申请流程：</p>
        <ul class="parent-progress">
            <li class="li-01">
                <label>
                    <input class="input-01" type="button" name="" value="提出申请">
                    <img src="<?php bloginfo('template_directory'); ?>/images/arrow-01.png">
                    <input type="button" name="" value="收到材料">
                    <img src="<?php bloginfo('template_directory'); ?>/images/arrow-01.png">
                    <input type="button" name="" value="回访申请人">
                    <img src="<?php bloginfo('template_directory'); ?>/images/arrow-01.png">
                    <input type="button" name="" value="判断归属">
                </label>
            </li>
            <li class="li-02">
                <img src="<?php bloginfo('template_directory'); ?>/images/arrow-02.png">
                <label class="div-02">
                    <input type="button" name="" value="确认归属">
                    <img src="<?php bloginfo('template_directory'); ?>/images/arrow-01.png">
                    <input type="button" name="" value="申请成功">
                    <br>
                    <br>
                    <input type="button" name="" value="未确认归属">
                    <img src="<?php bloginfo('template_directory'); ?>/images/arrow-01.png">
                    <input type="button" name="" value="申请失败">
                </label>
            </li>
        </ul>
        <h2>账号身份确认期（15个工作日）</h2>
        <p>在判断申请材料完整的情况下，我司将通过官方邮箱联系互盾科技账户归属者，告知其在 15 个工作日内将按照申请人需求对其互盾科技账户进行相关操作，并要求互盾科技账户归属者提供身份材料以便我司判定其与申请人的监护关系；若账号归属者在 15 个工作日内不能提供有效身份证明或逾期提供，则默认为互盾科技账户归属者与被监护人身份相符。我司即按照监护人申请要求，将其淘米妈妈升级至管理权限；若账号归属者在 15 个工作日提供的身份证明与被监护人相符，我司即按照监护人申请要求，将其淘米妈妈升级至管理权限；若账号归属者在 15 个工作日内提供的身份证明与被监护人不符，我司则无法判定其与被监护人的身份关系。在此情况下，为保障用户产品账号安全，我司将通知监护人通过公安机关出具互盾科技账户找回协查证明，由我司协助被监护人找回互盾科技账户号后再进行后续操作。</p>
    </div>
</main>
<?php get_footer()?>