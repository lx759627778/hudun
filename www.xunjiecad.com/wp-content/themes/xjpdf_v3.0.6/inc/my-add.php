<?php
if ( ! function_exists( 'myPhoneNum' ) ){
    /**
     * 公用手机号码
     */
    function myPhoneNum(){
        global $phonenum;
        $phonenum  = '181-2107-4602';
        echo $phonenum;
    }
}
if ( ! function_exists( 'myTelNum' ) ){
    /**
     * 公用电话号码
     */
    function myTelNum(){
        global $telnum;
        $telnum  = '400-668-5572';
        echo $telnum;
    }
}
if ( ! function_exists( 'myQQNum' ) ){
    /**
     * 公用qq客服号码
     */
    function myQQNum(){
        global $qqnum;
        $qqnum  = '400 668 5572';
        echo $qqnum;
    }
}
if ( ! function_exists( 'myQQLink' ) ){
    /**
     * 公用qq客服链接
     */
    function myQQLink(){
        global $qqlink;
        $qqlink = 'http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODAyMDY2NV80NDQwMzhfNDAwNjY4NTU3Ml8yXw';
        echo $qqlink;
    }
}
if ( ! function_exists( 'myDownloadLink' ) ){
    /**
     * 公用软件下载地址
     */
    function myDownloadLink(){
        global $download_link_easy;
        $download_link_easy = 'http://download.xunjiepdf.com/download/pdf_setup_6_0_s.exe';
        echo $download_link_easy;
    }
}
if( !function_exists('mySoftVersion')){
	/**
	 * 公用软件版本
	 */
	function mySoftVersion(){
		global $softversion;
		$softversion ='1.2正式版';
		echo $softversion;
	}
}
if( ! function_exists( 'geturl' ) ){
	/**
	 * 根据别名获取页链接
	 * @param  [type] $slug [description]
	 * @param  string $type [description]
	 * @return [type]       [description]
	 */
	function geturl($slug, $type="page") {
	    global $wpdb;
	    if ($type == "page") {
	        $url_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'");
	        echo get_permalink($url_id);
	    }else {
	        $url_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE slug = '".$slug."'");
	        echo get_category_link($url_id);
	    }
	}
}
if( ! function_exists( 'get_page_id_by_slug' ) ){
	/**
	 * 根据页面名称获取id
	 * @param  [type] $pageName [description]
	 * @return [type]           [description]
	 */
	function get_page_id_by_slug($pageName) {
	    global $wpdb;
	    $pages = get_pages();
	    for($i = 0; $i < count($pages); $i++) {
	        if($pageName == $pages[$i]->post_title) $page_slug = $pages[$i]->post_name;
	    }
	    if($page_slug) {
	        $page_ID = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '" . $page_slug . "' AND post_status = 'publish' AND post_type = 'page'");
	        return $page_ID;
	    } else {
	        return false;
	    }
	}
}

if( ! function_exists( 'getArticlsRelateByCat' ) ){
	/**
	 * 根据分类获取相关文章
	 * [getRelateArticls description]
	 * @return [type] [description]
	 */
	function getArticlsRelateByCat($num){
	    global $post;
	    $cats = wp_get_post_categories($post->ID);
	    if ($cats) {
	            $args = array(
	                'category__in'        => array( $cats[0] ),
	                'post__not_in'        => get_option( 'sticky_posts' ),
	                'showposts'           => $num,
	                'caller_get_posts'    => 1,
	            );
	            query_posts($args);
	            if (have_posts()) {
	                while (have_posts()) {the_post(); update_post_caches($posts); ?>
	                    <li>
	                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	                            <?php the_title(); ?>
	                        </a>
	                    </li>
	<?php
	                }
	            }
	            else {echo '<li>暂无相关文章</li>';}
	            wp_reset_query();
	    }else {echo '<li>暂无相关文章</li>';}
	}
}
if( ! function_exists( 'currentPageSlug' ) ){
	/**
	 * 获取当前页面别名
	 * [currentPageSlug description]
	 * @return [type] [description]
	 */
	function currentPageSlug(){
	    if( is_page() )  {
	        $content = $content . get_option('display_copyright_text');
	        $post_data = get_post($post->ID, ARRAY_A);
	        $slug = $post_data['post_name'];
	    }
	}
}
/**
 * 获取每日一图缩略图
 */
add_image_size('dailypics-cover', 230, 230, true);
if(! function_exists( 'storefront_get_dailypic_list_thumbnail' )){
	function storefront_get_dailypic_list_thumbnail(){
		global $post,$mySRC;
		$post_thumbnail = '';
		if(has_post_thumbnail()){
			$post_thumbnail = get_the_post_thumbnail( $post->ID, 'dailypics-cover', true );
	        return $post_thumbnail;
		}else{
			$post_thumbnail_src = get_bloginfo('template_url').'/assets/images/index-fun-02.png';
			return $post_thumbnail = '<img src="'.$post_thumbnail_src.'" />';
		}
	}
}
if ( ! function_exists( 'get_article_img' ) ) {
	/**
	 * 获取文章图片，如果有特色图片则输出特色图片，如果没有特色图片，输出文章第一张图片，否则输出默认图片
	 */
	function get_article_img($the_w =96 ,$the_h = 96) {
	    global $post, $posts, $mySRC;
	    if(has_post_thumbnail()){
	        the_post_thumbnail( array( $the_w, $the_h ) );
	    }else{
	        $first_img = '';
	        ob_start();
	        ob_end_clean();
	            $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	            $first_img = $matches [1] [0];
	            $first_img_arr = getimagesize($first_img);
	            $first_img_width =$first_img_arr[0];
	            $first_img_height =$first_img_arr[1];
	        if(empty($first_img)){
	            return $post_thumbnail = '<img src="'.$mySRC.'/assets/images/default-thumbnail.png">';
	        }else{
	            return $post_thumbnail = '<img src= "'.$first_img.'" width="'.$first_img_width.'" height="'.$first_img_height.'">';
	        }
	    }
	}
}
if( ! function_exists('inlo_substr') ){
	/**
	 * 自定义字符串长度
	 * [inlo_substr description]
	 * @param  [type] $string  [description]
	 * @param  [type] $length  [description]
	 * @param  string $replace [description]
	 * @return [type]          [description]
	 */
	function inlo_substr($string, $length, $replace = '…') {
		if (strlen ( $string ) < $length) {
			return $string;
		} else {
			$char = ord ( $string [$length - 1] );
			if ($char >= 224 && $char <= 239) {
				$string = substr ( $string, 0, $length - 1 );
			} else {
				$char = ord ( $string [$length - 2] );
				if ($char >= 224 && $char <= 239) {
					$string = substr ( $string, 0, $length - 2 );
				} else {
					$string = substr ( $string, 0, $length );
				}
			}
		}
		$starts = $start_str = $ends = array ();
		preg_match_all ( '/<\w+[^>]*>?/', $string, $starts, PREG_OFFSET_CAPTURE );
		preg_match_all ( '/<\/\w+>/', $string, $ends, PREG_OFFSET_CAPTURE );
		$cut_pos = 0;
		$last_str = '';
		if (! empty ( $starts [0] )) {
			$starts = array_reverse ( $starts [0] );
			if (! empty ( $ends [0] )) {
				$ends = $ends [0];
			}
			foreach ( $starts as $sk => $s ) {
				$auto = false;
				if ($auto != false && $auto = strripos ( $s [0], '/>' )) {
					if ($cut_pos < $auto) {
						$cut_pos = $s [1];
						$last_str = $s [0];
						unset ( $starts [$sk] );
					}
				} else {
					preg_match ( '/<(\w+).*>?/', $s [0], $start_str );
					if (! empty ( $ends )) {
						foreach ( $ends as $ek => $e ) {
							$end_str = trim ( $e [0], '</>' );
							if ($end_str == $start_str [1] && $e [1] > $s [1]) {
								if ($cut_pos < $e [1]) {
									$cut_pos = $e [1];
									$last_str = $e [0];
								}
								unset ( $ends [$ek] );
								break;
							}
						}
					} else {
						$last_str = '';
						$cut_pos = $s [1];
					}
				}
			}
		}
		$res_str = substr ( $string, 0, $cut_pos ) . $last_str;
		$less_str = substr ( $string, strlen ( $res_str ) );
		$less_pos = strpos ( $less_str, '<' );
		if ($less_pos !== false) {
			$less_str = substr ( $less_str, 0, $less_pos );
		}
		$res_str .= $less_str . $replace;
		return $res_str;
	}
}
if( ! function_exists('inlo_related_acticles') ){
    /**
     * 与标签相关的文章
     * 如果没有与标签相关的文章，获取与分类相关的文章
     * 如果相关文章不够5篇，获取随机文章
     */
    function inlo_related_acticles($post_id = 0) {
    	$posts = $terms = array ();
    	$args = array (
    			'post_status' => 'publish',
    			'post__not_in' => array ( $post_id ),
    			'caller_get_posts' => 1,
    			'orderby' => 'modifid',
    			'posts_per_page' => 5
    	);
    	$post_terms = wp_get_post_terms ( $post_id, 'post_tag' );
    	if (! empty ( $post_terms )) {
    		foreach ( $post_terms as $term ) {
    			$terms [] = $term->term_id;
    		}
    		$args ['tag__in'] = $terms;
    		$posts = query_posts ( $args );
    		wp_reset_query ();
    	}
    	if ( empty($posts) ) {
    		unset ( $args ['tag__in'] );
    		$post_terms = wp_get_post_terms ( $post_id, 'category' );
    		if (! empty ( $post_terms )) {
    			foreach ( $post_terms as $term ) {
    				$terms [] = $term->term_id;
    			}
    			$args ['category__in'] = $terms;
    			$posts = query_posts ( $args );
    			wp_reset_query ();
    		}
    	}
    	$count = count ( $posts );
    	if ( $count < 5 ) {
    		$post_not_in = array();
    		if( !empty($posts) ) {
    			foreach ($posts as $post) {
    				$post_not_in[] = $post->ID;
    			}
    		}
    		unset ( $args ['category__in'] );
    		$args ['posts_per_page'] = 5 -$count;
    		$args ['post__not_in'] = $post_not_in;
    		$rand_posts = query_posts( $args );
    		$posts = array_merge($posts, $rand_posts);
    		wp_reset_query ();
    	}
    	$count = count ( $posts );
    	$str = '';
    	foreach ( $posts as $k => $p ) {
    		$max_width = ($count == 1 || $count == 4) && $k == $count - 1 ? ' max' : null;
    		$str .= '<li><a title="' . $p->post_title . '" href="' . get_permalink ( $p->ID ) . '" rel="bookmark">&raquo; ' . inlo_substr ( $p->post_title, 600 ) . '</a></li>';
    	}
    	return $str;
    }
}
if( !function_exists('getBrowser')){
	/**
	 * 获取浏览器类型
	 */
	function getBrowser(){
	    $agent=$_SERVER["HTTP_USER_AGENT"];
	    if(strpos($agent,'MSIE')!==false || strpos($agent,'rv:11.0'))
	    return "ie";
	    else if(strpos($agent,'Firefox')!==false)
	    return "firefox";
	    else if(strpos($agent,'Chrome')!==false)
	    return "chrome";
	    else if(strpos($agent,'Opera')!==false)
	    return 'opera';
	    else if((strpos($agent,'Chrome')==false)&&strpos($agent,'Safari')!==false)
	    return 'safari';
	    else
	    return 'unknown';
	}
}
if ( !function_exists('getBrowserVer') ) {
	/**
	 * 获取浏览器版本
	 */
	function getBrowserVer(){
	    if (empty($_SERVER['HTTP_USER_AGENT'])){
	        return 'unknow';
	    }
	    $agent= $_SERVER['HTTP_USER_AGENT'];
	    if (preg_match('/MSIE\s(\d+)\..*/i', $agent, $regs))
	        return $regs[1];
	    elseif (preg_match('/FireFox\/(\d+)\..*/i', $agent, $regs))
	        return $regs[1];
	    elseif (preg_match('/Opera[\s|\/](\d+)\..*/i', $agent, $regs))
	        return $regs[1];
	    elseif (preg_match('/Chrome\/(\d+)\..*/i', $agent, $regs))
	        return $regs[1];
	    elseif ((strpos($agent,'Chrome')==false)&&preg_match('/Safari\/(\d+)\..*$/i', $agent, $regs))
	        return $regs[1];
	    else
	        return 'unknow';
	}
	$browser = getBrowser();
}

if( !function_exists('getDeviceType') ){
	/**
	 * 判断设备类型
	 * @return [type] [description]
	 */
	function getDeviceType(){
		$device_type='';
		$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
		$is_pc = (strpos($agent, 'windows nt')) ? true : false;
		$is_iphone = (strpos($agent, 'iphone')) ? true : false;
		$is_ipad = (strpos($agent, 'ipad')) ? true : false;
		$is_android = (strpos($agent, 'android')) ? true : false;
		if($is_pc)
			return $device_type='pc';
		if($is_iphone)
			return $device_type='iphone';
		if($is_ipad)
			return $device_type='ipad';
		if($is_android)
			return $device_type='android';
	}
}
if( !function_exists('is_mobile_request') ){
	/**
	 * 判断是否为移动设备
	 */
	function is_mobile_request(){
		$_SERVER['ALL_HTTP'] = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';
		$mobile_browser = '0';
		if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))
			$mobile_browser++;
		if((isset($_SERVER['HTTP_ACCEPT'])) and (strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') !== false))
			$mobile_browser++;
		if(isset($_SERVER['HTTP_X_WAP_PROFILE']))
			$mobile_browser++;
		if(isset($_SERVER['HTTP_PROFILE']))
			$mobile_browser++;
		$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
		$mobile_agents = array(
			'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
			'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
			'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
			'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
			'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
			'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
			'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
			'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
			'wapr','webc','winw','winw','xda','xda-'
		);
		if(in_array($mobile_ua, $mobile_agents))
			$mobile_browser++;
		if(strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false)
			$mobile_browser++;
		if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') !== false)
			$mobile_browser=0;
		if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows phone') !== false)
			$mobile_browser++;
		if($mobile_browser>0)
			return true;
		else
		return false;
	}
}
if( ! function_exists( 'get_dailypic_tags' ) ){
	/**
	 * [get_dailypic_tags description]
	 * @return [type] [description]
	 */
	function get_dailypic_tags(){
		global $post, $wpdb;
		$sql = "select t.* from wp_posts p inner join wp_term_relationships tr on (p.ID=tr.object_id) right join wp_terms t on (tr.term_taxonomy_id=t.term_id) where p.post_type = 'dailypic' and p.post_status='publish' and tr.term_taxonomy_id!=9 group by t.term_id";
		$related_posts = $wpdb->get_results($sql);
		    foreach($related_posts as $tag){
			    $tag_link = get_tag_link($tag->term_id);
			    $html .= "<a href='{$tag_link}' title='{$tag->name}' class='{$tag->slug}'>{$tag->name}</a>";
		    }
		echo $html;
	}
}

if( ! function_exists( 'search_form_simple' ) ){
	function search_form_simple(){
		echo '<form role="search" method="get" class="search-form" action="/"><input type="search" class="search-field" placeholder="搜索…" value="" name="s"><button type="submit" class="search-submit"><span class="screen-reader-text">搜索</span></button></form>';
	}
}

if( ! function_exists( 'getMyPostViews' ) ){
	function getMyPostViews($postID){
		$count_key = 'post_views_count';
		$count = get_post_meta($postID, $count_key, true);
			if($count==''){
				delete_post_meta($postID, $count_key);
				add_post_meta($postID, $count_key, '0');
				return '0';
			}
		return $count;
	}
}

if( ! function_exists( 'setMyPostViews' ) ){
	function setMyPostViews($postID) {
		$count_key = 'post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
		}
	}
}
if( !function_exists('record_visitors') ){
    /**
     * 记录访问计数
     * [record_visitors description]
     * @return [type] [description]
     */
    function record_visitors(){
        if (is_singular())
        {
          global $post;
          $post_ID = $post->ID;
          if($post_ID)
          {
              $post_views = (int)get_post_meta($post_ID, 'views', true);
              if(!update_post_meta($post_ID, 'views', ($post_views+1)))
              {
                add_post_meta($post_ID, 'views', 1, true);
              }
          }
        }
    }
}
add_action('wp_head', 'record_visitors');
if( !function_exists('post_views') ){
    /**
     * 取得文章的阅读次数
     */
    function post_views($before = '点击 ', $after = ' 次', $echo = 1){
      global $post;
      $post_ID = $post->ID;
      $views = (int)get_post_meta($post_ID, 'views', true);
      if ($echo) echo $before, number_format($views), $after;
      else return $views;
    }
}
if( !function_exists('get_most_viewed_format')){
    /**
     * 函数作用：取得阅读最多的文章
     */
    function get_most_viewed_format(
    	$mode = '',
    	$limit = 10,
    	$show_date = 0,
    	$term_id = 0,
    	$beforetitle= '(',
    	$aftertitle = ')',
    	$beforedate= '(',
    	$afterdate = ')',
    	$beforecount= '(',
    	$aftercount = ')'
	) {
        global $wpdb, $post;
		$output      = '';
		$mode        = ($mode == '') ? 'post' : $mode;
		$type_sql    = ($mode != 'both') ? "AND post_type='$mode'" : '';
		$term_sql    = (is_array($term_id)) ? "AND $wpdb->term_taxonomy.term_id IN (" . join(',', $term_id) . ')' : ($term_id != 0 ? "AND $wpdb->term_taxonomy.term_id = $term_id" : '');
		$term_sql    .= $term_id ? " AND $wpdb->term_taxonomy.taxonomy != 'link_category'" : '';
		$inr_join    = $term_id ? "INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id) INNER JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)" : '';
		$most_viewed = $wpdb->get_results("SELECT ID, post_date, post_title, (meta_value+0) AS views FROM $wpdb->posts LEFT JOIN $wpdb->postmeta ON ($wpdb->posts.ID = $wpdb->postmeta.post_id) $inr_join WHERE post_status = 'publish' AND post_password = '' $term_sql $type_sql AND meta_key = 'views' GROUP BY ID ORDER BY views DESC LIMIT $limit");
        if ($most_viewed) {
            foreach ($most_viewed as $viewed) {
                $post_ID    = $viewed->ID;
                $post_views = number_format($viewed->views);
                $post_title = esc_attr($viewed->post_title);
                $get_permalink = esc_attr(get_permalink($post_ID));
                $output .= "<li>$post_title";
                if ($show_date) {
                    $posted = date(get_option('date_format'), strtotime($viewed->post_date));
                    $output .= "$beforedate $posted $afterdate";
                }
                $output .= " $beforecount $post_views $aftercount</li>";
            }
        } else {
            $output = "<li>N/A</li>n";
        }
        echo $output;
    }
}
/**
 * 移除字符串中的空格，换行，回车
 * 剥去字符串中的 HTML 标签：
 */
if( !function_exists( 'myCleanString' ) ){
	function myCleanString($my_string){
		return $my_string= str_replace(array("\r\n", "\r", "\n"), "", strtr(strtr(trim(strip_tags($my_string)), array(' '=>'')), array(' '=>'')));
	}
}