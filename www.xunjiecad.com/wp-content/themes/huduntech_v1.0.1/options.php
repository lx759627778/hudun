<?php

function optionsframework_option_name()
{
    return 'options-framework-theme';
}
function optionsframework_options()
{
    $products_category = get_categories(array(
        'taxonomy' => 'products_category',
    ));

    $options_tags = array();
    $options_tags_obj = get_tags();
    foreach ($options_tags_obj as $tag) {
        $options_tags[$tag->term_id] = $tag->name;
    }

    $options = array();

    $options[] = array(
        'name' => __('公司基本信息', 'text_domain'),
        'type' => 'heading',
    );
    $options[] = array(
        'name' => __('公司名称', 'text_domain'),
        'id' => 'company_name',
        'placeholder' => 'Placeholder',
        'type' => 'text',
        'std' => '上海互盾信息科技有限公司',
    );

    $options[] = array(
        'name' => __('版权信息', 'text_domain'),
        'id' => 'company_copyright',
        'placeholder' => 'Placeholder',
        'type' => 'text',
        'std' => '互盾科技 版权所有',
    );

    $options[] = array(
        'name' => __('备案信息', 'text_domain'),
        'id' => 'company_record',
        'placeholder' => 'Placeholder',
        'type' => 'text',
        'std' => '沪ICP备14017499号',
    );

    $options[] = array(
        'name' => __('公司联系方式', 'text_domain'),
        'type' => 'heading',
    );
    $options[] = array(
        'name' => __('公司地址', 'text_domain'),
        'id' => 'company_address',
        'placeholder' => 'Placeholder',
        'std' => '',
        'type' => 'text',
    );
    $options[] = array(
        'name' => __('联系电话', 'text_domain'),
        'id' => 'company_tel',
        'placeholder' => 'Placeholder',
        'std' => '400-668-5572',
        'type' => 'text',
    );

    $options[] = array(
        'name' => __('联系手机', 'text_domain'),
        'id' => 'company_phone',
        'placeholder' => 'Placeholder',
        'std' => '',
        'type' => 'text',
    );
    $options[] = array(
        'name' => __('商务合作邮箱', 'text_domain'),
        'id' => 'company_email',
        'placeholder' => 'Placeholder',
        'std' => 'bd@huduntech.com',
        'type' => 'text',
    );
    $options[] = array(
        'name' => __('技术邮箱', 'text_domain'),
        'id' => 'company_tech_email',
        'placeholder' => 'Placeholder',
        'std' => '技术邮箱：support@huduntech.com',
        'type' => 'text',
    );


    $options[] = array(
        'name' => __('首页轮播图', 'text_domain'),
        'type' => 'heading',
    );

    $slider_pic_count = of_get_option('slider_homepage_num') ? of_get_option('slider_homepage_num') : 1;
    $options[] = array(
        'name' => __('轮播图张数', 'text_domain'),
        'id' => 'slider_homepage_num',
        'placeholder' => 'Placeholder',
        'std' => $slider_pic_count,
        'type' => 'text',
    );
    for($slider_num_tmp =0; $slider_num_tmp < (int)$slider_pic_count; $slider_num_tmp++){
        $this_img = of_get_option('slider_homepage_'.$slider_num_tmp) ? of_get_option('slider_homepage_'.$slider_num_tmp) : '';
        $options[] = array(
            'name' => '自定义轮播图'.($slider_num_tmp+1),
            'id' => 'slider_homepage_'.($slider_num_tmp+1),
            'std' => $this_img,
            'type' => 'upload',
        );
        $options[] = array(
            'name' => '',
            'id' => 'slider_homepage_url_'.($slider_num_tmp+1),
            'std' => '',
            'placeholder' => '自定义轮播图链接'.($slider_num_tmp+1),
            'type' => 'text',
        );
    }
    $options[] = array(
        'name' => __('二维码', 'text_domain'),
        'type' => 'heading',
    );
    $options[] = array(
        'name' => __('微信', 'text_domain'),
        'id' => 'qrcode_weixin',
        'std' => '',
        'type' => 'upload',
    );
    $options[] = array(
        'name' => __('微博', 'text_domain'),
        'id' => 'qrcode_weibo',
        'std' => '',
        'type' => 'upload',
    );


    $options[] = array(
        'name' => __('底部友情链接', 'text_domain'),
        'type' => 'heading',
    );

    $options[] = array(
        'name' => __('友情链接', 'text_domain'),
        'id' => 'friend_links',
        'std' => '',
        'type' => 'textarea',
    );

    return $options;
}

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts()
{?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}
});
</script>

<?php
}