<?php
/*
Template Name:联系我们
*/
get_header();
?>
<header class="header-wrap header-wrap-about">
    <div class="container">
        <ul class="banner-wrapper">
            <li class="row banner banner-about">
                <h1 class="col-8 right">我们提供天空 未来路有你描绘</h1>
            </li>
        </ul>
    </div>
</header>
<main class="main-content">
    <section class="container">
        <ul class="row">
            <li class="col-3">
                <div class="side-menu-wrap">
                    <h3>关于我们<br>Contact Us</h3>
                    <dl class="side-menu">
                        <dd class="current">
                            <span class="arrow arrow-l"></span>
                            <a>公司简介</a>
                            <span class="arrow  arrow-r"></span>
                        </dd>
                        <dd>
                            <span class="arrow arrow-l"></span>
                            <a>企业文化</a>
                            <span class="arrow  arrow-r"></span>
                        </dd>
                        <dd>
                            <span class="arrow arrow-l"></span>
                            <a>招贤纳士</a>
                            <span class="arrow  arrow-r"></span>
                        </dd>
                        <dd>
                            <span class="arrow arrow-l"></span>
                            <a>企业合作</a>
                            <span class="arrow  arrow-r"></span>
                        </dd>
                    </dl>
                </div>
            </li>
            <li class="col-9">
                <section class="about-content">
                    <div class="wrap current">
                        <h3 class="text-center block-title">公司简介<br><img src="<?php echo mySrc();?>/images/icon-arrow-01.png"></h3>
                        <h4 class="text-center text-primary">上海互盾信息科技有限公司</h4>
                        <p>上海互盾信息科技有限公司成立于2013年，是一家专业的软件自主研发企业。依托互联网和大数据优势，以及持续投入以及对用户需求的不断挖掘，公司为超过千万用户提供了强大的数据恢复和办公应用服务，是目前国内数据恢复领域专业内，少数拥有自主核心技术和全国运营团队的企业之一。</p>
                        <p>在数据恢复领域，互盾科技凭借着强大的技术研发实力和成熟的技术研发团队，面向普通消费者和企业用户提供了全方位的数据恢复专业服务和解决方案，旗下顶尖系列，互盾系列、迅捷系列数据软件均是国内数据恢复软件当中的领先品牌，累计服务用户过千万，服务范围覆盖全国，在国内拥有良好的口碑。</p>
                        <p>互盾科技创建了真正意义上的全方位的数据恢复服务。经过近几年的飞速发展，互盾科技为用户提供了一支面向全国的，专业的技术客服和工程师团队。针对用户不同应用场景和故障类型，团队为用户提供了贴心的技术咨询服务、数据恢复方案以及现场故障勘察服务，全天候帮助用户解决数据恢复难题，为无数个人、中小企业和政府部门用户挽回了大量的经济损失。</p>
                        <p>在应用办公领域，秉持一贯为用户创造价值的理念，公司投入大量人力研发了包括PDF文件编辑，PDF文件格式转换在内的办公软件，帮助企业用户不断地提升办公效率。依托强大的云端互联网技术，公司面向全球用户提供了免费的在线文件转换平台，由于具备较为强大的自主研发和创新技术实力，产品面世以来就获得大量用户的使用和支持，累计帮助超过百万以上用户解决文档格式转换的难题。</p>
                        <p>互盾科技坚持技术创新和可持续发展的战略，通过在技术、服务和渠道的不断投入，公司坚定不移地将技术作为第一生产力，同时不断地提高企业在中国乃至全球的技术和服务影响力。未来，互盾科技还将继续秉持为用户创造价值的理念，以技术和服务来赢得市场，将公司打造成为具备国际水平的领先的软件行业标杆之一。</p>
                    </div>
                    <div class="wrap">
                        <h3 class="text-center block-title">企业文化<br><img src="<?php echo mySrc();?>/images/icon-arrow-01.png"></h3>
                        <ul class="row text-center about-culture">
                            <li class="col-3 text-primary">
                                <img src="<?php echo mySrc();?>/images/about-culture-01.png"><h4>允许犯错</h4>
                            </li>
                            <li class="col-3 text-primary">
                                <img src="<?php echo mySrc();?>/images/about-culture-02.png"><h4>敢于决策</h4>
                            </li>
                            <li class="col-3 text-primary">
                                <img src="<?php echo mySrc();?>/images/about-culture-03.png"><h4>天道酬勤</h4>
                            </li>
                            <li class="col-3 text-primary">
                                <img src="<?php echo mySrc();?>/images/about-culture-04.png"><h4>马上去做</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="wrap">
                        <h3 class="text-center block-title">招贤纳士<br><img src="<?php echo mySrc();?>/images/icon-arrow-01.png"></h3>
                        <ul class="row recruit">
                            <?php
                                $link = 'http://www.lagou.com/gongsi/121646.html';
                                $friend_links = json_encode(
                                    array(
                                        array(
                                            'title' => 'SEO优化推广/外链',
                                            'slug' => 'seo',
                                        ),
                                        array(
                                            'title' => '网站编辑/文案编辑',
                                            'slug' => 'edit',
                                        ),
                                        array(
                                            'title' => '高级PHP后端开发工程师',
                                            'slug' => 'php',
                                        ),
                                        array(
                                            'title' => 'Cocos2d-x游戏主程开发',
                                            'slug' => 'cocos',
                                        ),
                                        array(
                                            'title' => '高级C++算法工程师',
                                            'slug' => 'cpp',
                                        ),
                                        array(
                                            'title' => 'C++客户端开发',
                                            'slug' => 'cpp-ui',
                                        ),
                                        array(
                                            'title' => 'MAC/OSX研发工程师',
                                            'slug' => 'mac',
                                        ),
                                        array(
                                            'title' => '更多招聘信息详细请见：<span>'.$link.'</span>',
                                            'slug' => 'lagou',
                                        ),
                                    )
                                );
                                if( !empty( $friend_links ) ):
                                    $friend_links_decoded = json_decode($friend_links);
                                    if( !empty($friend_links_decoded) ):
                                        foreach($friend_links_decoded as $value):
                                            $title = $value->title;
                                            $slug = $value->slug;
                            ?>
                            <li>
                                <div>
                                    <h4><a href="<?php echo $link;?>" target="_blank" title="<?php echo $title;?>" ><?php echo $title;?></a></h4>
                                    <a href="<?php echo $link;?>" target="_blank" title="<?php echo $title;?>" ><img src="<?php echo mySrc();?>/images/recruit-pic-<?php echo $slug;?>.png"></a>
                                </div>
                            </li>
                            <?php endforeach;endif;endif;?>
                        </ul>
                    </div>
                    <div class="wrap">
                        <h3 class="text-center block-title">企业合作<br><img src="<?php echo mySrc();?>/images/icon-arrow-01.png"></h3>
                        <h4 class="text-center text-primary">上海互盾信息科技有限公司</h4>
                        <p>     上海互盾信息科技有限公司（简称“互盾科技”）拥有多项专利核心技术，先后涉及数据恢复、办公应用以及移动互联网等专业领域，累计为超过千万以上用户提供全方位的服务，客服涵盖个人、企业与政府部门等。作为国内领先的具备自主核心技术的软件企业，互盾科技秉持为客户创造价值的服务理念，在多个领域协同合作伙伴展开相关合作，包括：</p>
                        <p>软件代理与引进：互盾科技提供专业的软件代理和运营服务，帮助国内外优秀的产品得到快速传播。互盾科技积累了丰富的行业经验，搭建了基于互联网的全国软件营销和推广渠道，拥有丰富的软件推广运营经验，凭借着优秀的技术实力和服务理念，更为广大消费者提供了全天候不间断的服务体系。</p>
                        <p>软件定制与开发：互盾科技提供顶级软件定制与开发服务，凭借强大的技术优势深入分析客户需求，结合互联网与大数据基础，帮助用户进行软件快速开发。互盾科技拥有稳定的技术研发团队和一流的技术开发经验，先后开发了包括顶尖、互盾、迅捷等针对不同应用环境的桌面软件，累计用户过千万，在国内拥有良好的口碑。</p>
                        <h4 class="text-center text-primary">商务合作邮箱：bd@huduntech.com</h4>
                    </div>
                </section>
            </li>
        </ul>
    </section>
</main>
<?php get_footer()?>