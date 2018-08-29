<link rel="stylesheet" type="text/css" href="<?php mySrc();?>/inc/css/theme-setting.css">
<main class="wrap myThemeSettingForm">
	<form method="post" action="">
		<p>
			<strong>网站首页关键词</strong>
			<div>
				<textarea name="keywords" placeholder="网站首页关键词（Meta Keywords），中间用半角逗号隔开。" id="keywords"><?php echo get_option('mytheme_keywords'); ?></textarea>
			</div>
			<small>网站首页关键词（Meta Keywords），中间用半角逗号隔开。</small>
		</p>
		<p>
			<strong>网站首页描述</strong>
			<div>
				<textarea name="description" placeholder="网站首页描述（Meta Description），针对搜索引擎设置的网页描述。" id="description"><?php echo get_option('mytheme_description'); ?></textarea>
			</div>
			<small><em>网站首页描述（Meta Description），针对搜索引擎设置的网页描述。</em></small>
		</p>
		<p>
			<strong>统计代码添加</strong>
			<p>
				<textarea name="analytics" placeholder="统计代码添加" id="analytics"><?php echo stripslashes(get_option('mytheme_analytics')); ?></textarea>
			</p>
			<small><em>统计代码添加</em></small>
		</p>
		<p>
			<strong>友情链接</strong>
			<p>
				<textarea name="friendlinks" placeholder="友情链接" id="friendlinks"><?php echo stripslashes(get_option('mytheme_firendLinks')); ?></textarea>
			</p>
		</p>
		<p>
			<input type="submit" name="mytheme_settings" value="保存设置" class="button button-primary">
		</p>
	</form>
</main>
