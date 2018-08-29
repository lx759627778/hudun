<?php
get_header();
$produtc_list = array(
  'pdf_convertor'=>array(
    'name'=>'迅捷PDF转换器',
    'description'=>'PDF转换器支持多格式与PDF相互转换的软件,新增PDF页面提取,PDF合并功能',
    'slug'=> 'xunjie_pdf_convertor',
    'url'=>array(
      'buy'=>'http://www.xjpdf.com/buy',
      'download'=>'http://www.xjpdf.com/download'
    )
  ),
  'pdf_editor'=>array(
    'name'=>'迅捷PDF编辑器',
    'description'=>'PDF编辑器不仅可以对PDF文件中的文本内容进行编辑，还可以对图片、多媒体等内容进行处理',
    'slug'=> 'xunjie_pdf_edtor',
    'url'=>array(
      'buy'=>'http://bianji.xjpdf.com/buy.html',
      'download'=>'http://bianji.xjpdf.com/download.html'
    )
  ),
  'cad_convertor'=>array(
    'name'=>'迅捷CAD转换器',
    'description'=>'软件支持各种CAD版本转换，还支持将CAD转换为其他办公格式，如PDF、JPG等',
    'slug'=> 'xunjie_cad_convertor',
    'url'=>array(
      'buy'=>'http://www.cadzhuan.com/buy.html',
      'download'=>'http://www.cadzhuan.com/download.html'
    )
  ),
  'cad_editor'=>array(
    'name'=>'迅捷CAD编辑器',
    'description'=>'图纸浏览、编辑、批注、格式转换等复杂处理',
    'slug'=> 'xunjie_cad_editor',
    'url'=>array(
      'buy'=>'http://www.xunjiecad.com/buy.html',
      'download'=>'http://www.xunjiecad.com/'
    )
  ),
  'caj'=>array(
    'name'=>'迅捷CAJ转换器',
    'description'=>'迅捷CAJ转换器是一款可将CAJ转换成Word文档的转换软件。该软件还支持PDF转Word...',
    'slug'=> 'xunjie_caj_convertor',
    'url'=>array(
      'buy'=>'http://caj.xjpdf.com/buy.html',
      'download'=>'http://caj.xjpdf.com/download.html'
    )
  ),
  'ocr'=>array(
    'name'=>'迅捷OCR图片识别',
    'description'=>'高精度图片文字识别，支持多格式文档操作',
    'slug'=> 'xunjie_ocr',
    'url'=>array(
      'buy'=>'http://www.jsocr.com/buy.html',
      'download'=>'http://download.jsocr.com/software/jsocr.exe'
    )
  ),
  'process'=>array(
    'name'=>'迅捷流程图',
    'description'=>'迅捷流程图制作软件是一款体积小巧、功能强大的可用于绘制各种流程图的专业绘图软件...',
    'slug'=> 'xunjie_process',
    'url'=>array(
      'buy'=>'http://www.liuchengtu.com/buy.html',
      'download'=>'http://download.huduntech.com/software/xunjieliuchengtu/xunjieliuchengtu.exe'
    )
  ),
  'mind_map'=>array(
    'name'=>'迅捷思维导图',
    'description'=>'一款实用的思维导图绘制软件，其直观、简洁的用户界面及强大的功能，可以帮助用户快...',
    'slug'=> 'xunjie_mind_map',
    'url'=>array(
      'buy'=>'http://www.siweidaotu.com/buy',
      'download'=>'http://download.huduntech.com/software/siweidaotu/siweidaotu.exe'
    )
  ),
  'online_ocr'=>array(
    'name'=>'在线识别',
    'description'=>'网站提供在线文档格式转换，OCR图片识别，以及制作流程图和思维导图功能',
    'slug'=> 'xunjie_online_ocr',
    'url'=>array(
      'home'=>'http://app.xunjiepdf.com/ocrpart'
    )
  ),
  'paper'=>array(
    'name'=>'论文查重',
    'description'=>'海量资源数据库，涵盖多种学术文献类型，图书、报纸、年鉴、新闻博士论文、硕士论文、本科...',
    'slug'=> 'xunjie_paper',
    'url'=>array(
      'home'=>'http://paper.xunjiepdf.com/'
    )
  ),
  'ppt'=>array(
    'name'=>'PPT模板',
    'description'=>'海量PPT模板提供，办公生活、教学研究应有尽有',
    'slug'=> 'ppt_template',
    'url'=>array(
      'home'=>'http://www.bangongziyuan.com/'
    )
  )
);
$procudt_list_html = '';
?>
  <section class="swiper-container banner-homepage-wrapper">
    <div class="swiper-wrapper">
      <div class="swiper-slide banner-homepage-top banner-homepage-top-1">
        <div class="container cf">
          <div class="banner-slogan">
            <h1><img src="<?php echo mySrc();?>/images/pdoduct_logo/logo_pdf_convertor.png">迅捷PDF转换器</h1>
            <p>一款功能强大、操作简单的PDF转换成word转换器，支持PDF文档和doc、ppt、图片以及txt文档多种格式之间的转换，是目前转换效果最佳，转换质量最好的新一代文件式转换器。</p>
            <a href="<?php echo $produtc_list['pdf_convertor']['url']['download'];?>" target="_blank" class="btn-download"><i class="icon-download"></i><span>免费下载</span></a>
          </div>
          <div class="banner-pic">
            <img src="<?php echo mySrc();?>/images/banner_homepage/icon_cursor.png" alt="" class="pic-cursor">
            <img src="<?php echo mySrc();?>/images/banner_homepage/icon_pdf.png" alt="" class="pic-file">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_1_1.jpg" alt="" class="pic-screen-shot-1">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_1_2.jpg" alt="" class="pic-screen-shot-2">
            <img src="<?php echo mySrc();?>/images/banner_homepage/pc_1.png" alt="" class="pic-pc-frame">
            <img src="<?php echo mySrc();?>/images/banner_homepage/pic_bg.png" alt="" class="pic-pc-bg">
            <div class="pic-file-tumbnail"><span class="icon-word"><i class="icon-success"></i></span><span class="icon-word"><i class="icon-success"></i></span></div>
            <div class="progress-bar"><span>100%</span></div>
          </div>
        </div>
      </div>
      <div class="swiper-slide banner-homepage-top banner-homepage-top-2">
        <div class="container cf">
          <div class="banner-slogan">
            <h1><img src="<?php echo mySrc();?>/images/pdoduct_logo/logo_pdf_editor.png">迅捷PDF编辑器</h1>
            <p>软件不仅仅可以对PDF文件中的文本内容进行编辑，还可以对图片、多媒体等内容进行处理，用户能够根据需求编辑个性化PDF文档。针对不同分辨率显示效果进一步优化，支持PDF文件显示比例调整。</p>
            <a href="<?php echo $produtc_list['pdf_editor']['url']['download'];?>" target="_blank" class="btn-download"><i class="icon-download"></i><span>免费下载</span></a>
          </div>
          <div class="banner-pic">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_2_1.jpg" alt="" class="pic-screen-shot-1">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_2_2.jpg" alt="" class="pic-screen-shot-2">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_2_3.jpg" alt="" class="pic-screen-shot-3">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_2_4.jpg" alt="" class="pic-screen-shot-4">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_2_5.jpg" alt="" class="pic-screen-shot-5">
            <img src="<?php echo mySrc();?>/images/banner_homepage/pc_2.png" alt="" class="pic-pc-frame">
            <img src="<?php echo mySrc();?>/images/banner_homepage/icon_cursor.png" alt="" class="pic-cursor">
            <img src="<?php echo mySrc();?>/images/banner_homepage/icon_pdf.png" alt="" class="pic-file">
            <img src="<?php echo mySrc();?>/images/banner_homepage/icon_success.png" alt="" class="pic-success">
          </div>
        </div>
      </div>
      <div class="swiper-slide banner-homepage-top banner-homepage-top-3">
        <div class="container cf">
          <div class="banner-slogan">
            <h1><img src="<?php echo mySrc();?>/images/pdoduct_logo/logo_ocr.png">捷速OCR文字识别</h1>
            <p>一款超级无敌的文字识别软件，软件的功能非常强大，能支持多国字符喝彩色文件识别，可以识别和转换几乎所有打印的文档类型喝文件格式（如：JPG、GIF、PNG、BMP、TIF和PDF源文件PDF扫描件）</p>
            <a href="<?php echo $produtc_list['ocr']['url']['download'];?>" target="_blank" class="btn-download"><i class="icon-download"></i><span>免费下载</span></a>
          </div>
          <div class="banner-pic">
            <img src="<?php echo mySrc();?>/images/banner_homepage/pc_3.png" alt="" class="pic-pc-frame">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_3_1.jpg" alt="" class="pic-screen-shot-1">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_3_2.jpg" alt="" class="pic-screen-shot-2">
            <img src="<?php echo mySrc();?>/images/banner_homepage/banner_3_3.jpg" alt="" class="pic-screen-shot-3">
            <img src="<?php echo mySrc();?>/images/banner_homepage/icon_pdf_more.png" alt="" class="pic-file">
            <img src="<?php echo mySrc();?>/images/banner_homepage/icon_cursor.png" alt="" class="pic-cursor">
            <div class="pic-search"><em></em></div>
          </div>
        </div>
      </div>
      <div class="swiper-slide banner-homepage-top banner-homepage-top-4">
        <div class="container cf">
          <div class="banner-slogan">
            <h1><img src="<?php echo mySrc();?>/images/pdoduct_logo/logo_ppt.png">办公资源PPT模板网站</h1>
            <p>为您提供专业的PPT模板，PPT教程，图标与素材。海量资源图库，量身打造个人PPT！</p>
            <a href="<?php echo $produtc_list['ppt']['url']['home'];?>" target="_blank" class="btn-download"><span>免费下载</span></a>
          </div>
          <div class="banner-pic">
            <img src="<?php echo mySrc();?>/images/banner_homepage/pc_4.png" alt="">
            <div class="pic-screen-shot-wrapper">
              <div class="pic-screen-shot-mask"><span class="span-1">立即下载</span><span class="span-2">收藏</span></div>
            </div>
            <div class="pic-success"></div>
            <img src="<?php echo mySrc();?>/images/banner_homepage/icon_cursor.png" alt="" class="pic-cursor">
          </div>
        </div>
      </div>
    </div>
    <div class="pagination"></div>
    <div class="btn-prev" id="banner-homepage-btn-prev"></div>
    <div class="btn-next" id="banner-homepage-btn-next"></div>
  </section>
  <section class="products-list-wrapper">
    <ul class="container">
      <li class="item-xunjie_pdf_convertor">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_pdf_convertor.png">
        </div>
        <div class="product-text">
          <h2>迅捷PDF转换器</h2>
          <p>PDF转换器支持多格式与PDF相互转换的软件,新增PDF页面提取,PDF合并功能</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['pdf_convertor']['url']['buy']?>" target="_blank" class="btn-primary-green">购买</a><a href="<?php echo $produtc_list['pdf_convertor']['url']['download']?>" target="_blank" class="btn-primary"><span><i class="icon-download"></i>免费下载</span></a></div>
        </div>
      </li>
      <li class="item-xunjie_pdf_edtor">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_pdf_edtor.png">
        </div>
        <div class="product-text">
          <h2>迅捷PDF编辑器</h2>
          <p>PDF编辑器不仅可以对PDF文件中的文本内容进行编辑，还可以对图片、多媒体等内容进行处理</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['pdf_editor']['url']['buy']?>" target="_blank" class="btn-primary-green">购买</a><a href="<?php echo $produtc_list['pdf_editor']['url']['download']?>" target="_blank" class="btn-primary"><span><i class="icon-download"></i>免费下载</span></a></div>
        </div>
      </li>
    </ul>
    <ul class="container">
      <li class="item-xunjie_cad_convertor">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_cad_convertor.png">
        </div>
        <div class="product-text">
          <h2>迅捷CAD转换器</h2>
          <p>软件支持各种CAD版本转换，还支持将CAD转换为其他办公格式，如PDF、JPG等</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['cad_convertor']['url']['buy']?>" target="_blank" class="btn-primary-green">购买</a><a href="<?php echo $produtc_list['cad_convertor']['url']['download']?>" target="_blank" class="btn-primary"><span><i class="icon-download"></i>免费下载</span></a></div>
        </div>
      </li>
      <li class="item-xunjie_cad_editor">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_cad_editor.png">
        </div>
        <div class="product-text">
          <h2>迅捷CAD编辑器</h2>
          <p>图纸浏览、编辑、批注、格式转换等复杂处理</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['cad_editor']['url']['buy']?>" target="_blank" class="btn-primary-green">购买</a><a href="<?php echo $produtc_list['cad_editor']['url']['download']?>" target="_blank" class="btn-primary"><span><i class="icon-download"></i>免费下载</span></a></div>
        </div>
      </li>
    </ul>
  </section>
  <section class="products-list-wrapper bg-e7e6e6">
    <ul class="container">
      <li class="item-xunjie_caj_convertor">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_caj_convertor.png">
        </div>
        <div class="product-text">
          <h2>迅捷CAJ转换器</h2>
          <p>迅捷CAJ转换器是一款可将CAJ转换成Word文档的转换软件。该软件还支持PDF转Word...</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['caj']['url']['buy']?>" target="_blank" class="btn-primary-green">购买</a><a href="<?php echo $produtc_list['caj']['url']['download']?>" target="_blank" class="btn-primary"><span><i class="icon-download"></i>免费下载</span></a></div>
        </div>
      </li>
      <li class="item-xunjie_ocr">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_ocr.png">
        </div>
        <div class="product-text">
          <h2>迅捷OCR图片识别</h2>
          <p>高精度图片文字识别，支持多格式文档操作</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['ocr']['url']['buy']?>" target="_blank" class="btn-primary-green">购买</a><a href="<?php echo $produtc_list['mind_map']['url']['download']?>" target="_blank" class="btn-primary"><span><i class="icon-download"></i>免费下载</span></a></div>
        </div>
      </li>
    </ul>
    <ul class="container">
      <li class="item-xunjie_process">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_process.png">
        </div>
        <div class="product-text">
          <h2>迅捷流程图</h2>
          <p>迅捷流程图制作软件是一款体积小巧、功能强大的可用于绘制各种流程图的专业绘图软件...</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['process']['url']['buy']?>" target="_blank" class="btn-primary-green">购买</a><a href="<?php echo $produtc_list['mind_map']['url']['download']?>" target="_blank" class="btn-primary"><span><i class="icon-download"></i>免费下载</span></a></div>
        </div>
      </li>
      <li class="item-xunjie_mind_map">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_mind_map.png">
        </div>
        <div class="product-text">
          <h2>迅捷思维导图</h2>
          <p>一款实用的思维导图绘制软件，其直观、简洁的用户界面及强大的功能，可以帮助用户快...</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['mind_map']['url']['buy']?>" target="_blank" class="btn-primary-green">购买</a><a href="<?php echo $produtc_list['mind_map']['url']['download']?>" target="_blank" class="btn-primary"><span><i class="icon-download"></i>免费下载</span></a></div>
        </div>
      </li>
    </ul>
  </section>
  <section class="products-list-wrapper">
    <ul class="container">
      <li class="item-xunjie_online_ocr">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_online_ocr.png">
        </div>
        <div class="product-text">
          <h2>在线识别</h2>
          <p>网站提供在线文档格式转换，OCR图片识别，以及制作流程图和思维导图功能</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['online_ocr']['url']['home']?>" target="_blank" class="btn-primary"><i class="icon-scan"></i>开始识别</a></div>
        </div>
      </li>
      <li class="item-xunjie_paper">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/xunjie_paper.png">
        </div>
        <div class="product-text">
          <h2>论文查重</h2>
          <p>海量资源数据库，涵盖多种学术文献类型，图书、报纸、年鉴、新闻博士论文、硕士论文、本科...</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['paper']['url']['home']?>" target="_blank" class="btn-primary"><i class="icon-search"></i>开始查看</a></div>
        </div>
      </li>
    </ul>
    <ul class="container">
      <li class="item-ppt_template">
        <div class="product-pic">
          <img src="<?php echo mySrc();?>/images/products/ppt_template.png">
        </div>
        <div class="product-text">
          <h2>PPT模板</h2>
          <p>海量PPT模板提供，办公生活、教学研究应有尽有</p>
          <div class="btn-groups"><a href="<?php echo $produtc_list['ppt']['url']['home']?>" target="_blank" class="btn-primary"><i class="icon-view"></i>开始浏览</a></div>
        </div>
      </li>
    </ul>
  </section>
  <section class="nav-bottom product-more">
    <h1><span>其他产品</span><i></i></h1>
    <ul>
      <li><a href="http://www.xunjieshipin.com/" target="_blank"><i class="icon icon-1"></i>迅捷视频转换器</a></li>
      <li><a href="http://www.xunjieshipin.com/buy-heic2jpg/" target="_blank"><i class="icon icon-2"></i>苹果HEIC图片转换器</a></li>
      <li><a href="http://www.xunjieshipin.com/buy-audiorecorder/" target="_blank"><i class="icon icon-3"></i>迅捷录音软件</a></li>
      <li><a href="http://www.xunjieshipin.com/buy-luping/" target="_blank"><i class="icon icon-4"></i>迅捷屏幕录像工具</a></li>
      <li><a href="http://www.xunjieshipin.com/buy-airplayreceiver/" target="_blank"><i class="icon icon-5"></i>迅捷苹果录屏精灵</a></li>

    </ul>
  </section>
<?php
get_footer();