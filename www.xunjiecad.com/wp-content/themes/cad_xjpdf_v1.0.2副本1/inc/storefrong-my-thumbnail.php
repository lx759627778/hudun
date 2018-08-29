<?php
function get_timthumb($filename, $height, $width ,$type){
	$newfilename = str_replace('www.cjxz.com','img.cjxz.com',$filename);
	$newfilename = str_replace('cjxzdownloadimg.oss-cn-shanghai.aliyuncs.com','img.cjxz.com',$newfilename);
	$newfilename = str_replace('cjxzdownloadimg.img-cn-shanghai.aliyuncs.com','img.cjxz.com',$newfilename);
	$newfilename = str_replace('imgpro.cjxz.com','img.cjxz.com',$newfilename);
	if($height && $width){
		$str = $newfilename.'?x-oss-process=image/resize,m_fixed,h_'.$height.',w_'.$width;
	}else{
		$str = $newfilename;
	}
	return $str;
}
/*
  上传图片自动重命名，年月日时分秒命名
*/
add_filter( 'wp_handle_upload_prefilter', 'custom_upload_name' );
function custom_upload_name( $file ){
	if ( !$ext )
	$ext = ltrim(strrchr($file['name'], '.'), '.');
	$file['name'] = date("YmdHis").'.'.$ext;
	return $file;
}


// 获得特色图像
function get_post_img($width="100",$height="100",$sizeTag=2) {
    global $post, $posts;
    $first_img = '';
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = '<img src="'. $matches[1][0] .'" width="'.$width.'" height="'.$height.'" alt="'.$post->post_title .'"/>';
    if(empty($matches[1][0])){
        if($sizeTag == 2)
        {
            $first_img = '<img src="'. get_bloginfo('template_url') .'/images/random'.rand(1,20).'.jpg" alt="'.$post->post_title .'" width="'.$width.'" height="'.$height.'"/>';
        }
        else
        {
             $first_img = '<img src="'. get_bloginfo('template_url') .'/images/random/'.rand(1,10).'.jpg" alt="'.$post->post_title .'" width="'.$width.'" height="'.$height.'"/>';
        }
    }
    return get_timthumb($first_img);
}

function post_thumbnail( $width = 100,$height = 80 ){
    global $post;
    if( has_post_thumbnail() ){
		$timthumb_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
		$post_timthumb = '<img src="'.get_timthumb($timthumb_src[0],$height,$width).'" alt="'.$post->post_title.'" class="thumb" />';
		echo $post_timthumb;
    }else{
	    $timthumb_src = get_post_meta($post->ID,'post_thumb',true);
		if($timthumb_src==''){
			$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
			if( !empty( $matches[1][0] ) ){
				$matches[1][0] = $matches[1][0];
				$post_timthumb = '<img src="'.get_timthumb($matches[1][0],$height,$width).'" alt="'.$post->post_title.'" class="thumb" />';
			}else{
				$noimg = get_template_directory_uri().'/images/noimg.jpg';
				$post_timthumb = '<img src="'.get_timthumb($noimg,$height,$width).'" alt="'.$post->post_title.'" class="thumb" />';
			}
		}else{
			$post_timthumb = '<img src="'.get_timthumb($timthumb_src,$height,$width).'" alt="'.$post->post_title.'" class="thumb" />';
		}
		echo $post_timthumb;
	}
}

function get_soft_ico_src($post_id, $width = 85,$height = 85){
	if(!$post_id)
	return get_template_directory_uri().'/ico_default.png';
	$ico = get_post_meta($post_id,'rjtb_value',true);
	if($ico!=''){
		return get_timthumb($ico,$height,$width);
	}elseif( has_post_thumbnail() ){
		$post = get_post($post_id);
		$thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
		$post_thumbnail_src = $thumbnail_src [0];
		return get_timthumb($post_thumbnail_src,$height,$width);
	}else {
		$post = get_post($post_id);
		$post_thumbnail_src = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	if(!empty($matches[1][0])){
		$post_thumbnail_src = $matches[1][0];
	}else{
		$random = mt_rand(1, 5);
		$post_thumbnail_src = get_template_directory_uri().'/images/ico_default.png';
	}
	return get_timthumb($post_thumbnail_src,$height,$width);
	}
}

//输出缩略图地址修改
function ashuwp_get_post_image_src($post_id, $width = 150,$height = 150){
	$post_thumbnail_src = '';
	if(!$post_id){
		$post_thumbnail_src = get_template_directory_uri().'/ico_default.png';
	}else{
		if(has_post_thumbnail($post_id)){
			$thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
			$post_thumbnail_src = $thumbnail_src [0];
		}
		if($post_thumbnail_src ==''){
				$product_gallery = get_post_meta($post_id,'product_gallery',true);
			if( !empty($product_gallery) && is_array($product_gallery) ){
				$post_thumbnail_src_a = wp_get_attachment_image_src( current($product_gallery), 'full' );
				$post_thumbnail_src = $post_thumbnail_src_a[0];
			}
		}
		if($post_thumbnail_src ==''){
			$post = get_post($post_id);
			$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
			if(!empty($matches[1][0])){
				$post_thumbnail_src = $matches[1][0];
			}
		}

	}
	if($post_thumbnail_src==''){
		$post_thumbnail_src = get_template_directory_uri().'/ico_default.png';
	}
	return get_timthumb($post_thumbnail_src,$height,$width);
}

function multisite_url_change($url){
	if( is_multisite() ){
		$url = str_replace(home_url(),network_home_url(),$url);
	}
	return $url;
}

function get_item_thumbnail($post_id, $width = 100,$height = 80 ){

    $post = get_post($post_id);
    if( has_post_thumbnail() ){
        $timthumb_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
        $post_timthumb = '<img src="'.get_timthumb($timthumb_src[0],$height,$width).'" alt="'.$post->post_title.'" class="thumb" />';
        echo $post_timthumb;
    }else{
	    $timthumb_src = get_post_meta($post->ID,'product_img',true);
		if($timthumb_src==''){
		  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		  if( !empty( $matches[1][0] ) ){
		    $matches[1][0] = $matches[1][0];
			$post_timthumb = '<img src="'.get_timthumb($matches[1][0],$height,$width).'" alt="'.$post->post_title.'" class="thumb" />';
		  }else{
		    $noimg = get_template_directory_uri().'/images/noimg.jpg';
		    $post_timthumb = '<img src="'.get_timthumb($noimg,$height,$width).'" alt="'.$post->post_title.'" class="thumb" />';
		  }
		}else{
		  $post_timthumb = '<img src="'.get_timthumb($timthumb_src,$height,$width).'" alt="'.$post->post_title.'" class="thumb" />';
		}
		echo $post_timthumb;
	}
}

