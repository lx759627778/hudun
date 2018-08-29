<?php
$aioseop_options             = get_option('aioseop_options');
$aiosp_home_title_text       = $aioseop_options['aiosp_home_title'];
$aiosp_home_description_text = $aioseop_options['aiosp_home_description'];
$aiosp_home_keywords_text    = $aioseop_options['aiosp_home_keywords'];
$title_text                  = (get_option('mytheme_title')) ? stripslashes(get_option('mytheme_title')) : stripslashes($aiosp_home_title_text);
$description_text            = (get_option('mytheme_description')) ? stripslashes(get_option('mytheme_description')) : stripslashes($aiosp_home_description_text);
$keywords_text               = (get_option('mytheme_keywords')) ? stripslashes(get_option('mytheme_keywords')) : stripslashes($aiosp_home_keywords_text);
?>
<link rel="stylesheet" type="text/css" href="<?php mySrc();?>/inc/css/theme-setting.css">
<main class="wrap myThemeSettingForm" id="myThemeSettingForm">
	<form method="post" action="">
		<p>
			<strong>网站首页标题</strong>
			<div>
				<textarea name="title" placeholder="网站首页标题（Meta title），中间用半角逗号隔开。" id="title"><?php echo $title_text;?></textarea>
			</div>
			<em><small>网站首页标题（Meta Title）。</small></em>
		</p>
		<p>
			<strong>网站首页描述</strong>
			<div>
				<textarea name="description" placeholder="网站首页描述（Meta Description），针对搜索引擎设置的网页描述。" id="description"><?php echo $description_text; ?></textarea>
			</div>
			<em><small>网站首页描述（Meta Description），针对搜索引擎设置的网页描述。</small></em>
		</p>
		<p>
			<strong>网站首页关键词</strong>
			<div>
				<textarea name="keywords" placeholder="网站首页关键词（Meta Keywords），中间用半角逗号隔开。" id="keywords"><?php echo $keywords_text;?></textarea>
			</div>
			<em><small>网站首页关键词（Meta Keywords），中间用半角逗号隔开。</small></em>
		</p>
		<p>
			<strong>友情链接</strong>
			<div>
				<textarea name="firendLinks" placeholder="友情链接" rows="" cols="" id="firendLinks"><?php echo stripslashes(get_option('mytheme_firendLinks')); ?></textarea>
			</div>
			<em><small>友情链接添加，链接名称和网址之间一个空格，不同链接之间回车一次</small></em>
		</p>
		<p>
			<strong>统计代码添加</strong>
			<div>
				<textarea name="analytics" placeholder="统计代码添加" id="analytics"><?php echo stripslashes(get_option('mytheme_analytics')); ?></textarea>
			</div>
			<em><small>统计代码添加</small></em>
		</p>
		<p>
			<input type="submit" name="mytheme_settings" value="保存设置" class="button button-primary">
		</p>
	</form>
</main>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('textarea').each(function () {
		  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
		}).on('input', function () {
			this.style.height = 'auto';
			this.style.height = (this.scrollHeight) + 'px';
		});
	});
</script>
