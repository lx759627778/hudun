<?php
/**
 * 为文章内页和PAGE页面添加自定义TDK
 */
$my_post_page_meta_boxes = array(
    "title"    => array(
        "name"      => "title",
        "std"       => "这里填默认的标题（title）",
        "the_title" => "标题 title:"
    ),
    "description" => array(
        "name"      => "description",
        "std"       => "这里填默认的描述（description）",
        "the_title" => "描述 description:"
    ),
    "keywords"    => array(
        "name"      => "keywords",
        "std"       => "这里填默认的关键字（keywords）",
        "the_title" => "关键字 keywords:"
    )
);

function stringClean($str){
    $str_temp = array(" ","　","\t","\n","\r");
    return str_replace($str_temp, '', $str);
}

function new_meta_boxes() {
    /**
     * 获取自定义TDK面板上填写的内容，
     * 如果没有在TDK面板上填写，则查找是否存在 all in one 插件中的对应TDK内容，
     * 如果二者都没有，则填空
     */
    global $post, $my_post_page_meta_boxes, $wpdb;
    $meta_key = get_post_meta($post->ID);
    //获取 all in one 插件填写的 TDK
    $_aioseop_title = $meta_key['_aioseop_title'][0];
    $_aioseop_description = stringClean($meta_key['_aioseop_description'][0]);
    $_aioseop_keywords = $meta_key['_aioseop_keywords'][0];
    //获取自定义TDK
    $title = $meta_key['title'][0];
    $description = $meta_key['description'][0];
    $keywords = $meta_key['keywords'][0];
    if($title){
       $title_text = $title;
    }else{
       $title_text =  $_aioseop_title;
    }
    if($description){
        $description_text = $description;
    }else{
        $description_text =  $_aioseop_description;
    }
    if($keywords){
        $keywords_text = $keywords;
    }else{
        $keywords_text = $_aioseop_keywords;
    }
    $meta_box_content = '';
    $meta_box_content.='<h4>标题 title:</h4><input type="hidden" name="title_noncename" id="title_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><textarea cols="60" rows="3" name="title" placeholder="这里填默认的标题（title）" style="width: 100%;">'.$title_text.'</textarea>';
    $meta_box_content.='<h4>描述 description:</h4><input type="hidden" name="description_noncename" id="description_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><textarea cols="60" rows="3" name="description" placeholder="这里填默认的描述（description）" style="width: 100%;">'.$description_text.'</textarea>';
    $meta_box_content.='<h4>关键字 keywords:</h4><input type="hidden" name="keywords_noncename" id="keywords_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><textarea cols="60" rows="3" name="keywords" placeholder="这里填默认的关键字（keywords）" style="width: 100%;">'.$keywords_text.'</textarea>';
    echo $meta_box_content;
}
function create_meta_box() {
    global $theme_name;
    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'new-meta-boxes', '自定义TDK', 'new_meta_boxes', 'post', 'normal', 'low' );
        add_meta_box( 'new-meta-boxes', '自定义TDK', 'new_meta_boxes', 'page', 'normal', 'low' );
    }
}
function save_postdata( $post_id ) {
    global $post, $my_post_page_meta_boxes;
    foreach($my_post_page_meta_boxes as $meta_box) {
        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) ))  {
            return $post_id;
        }
        if ( 'page' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ))
                return $post_id;
        }
        else {
            if ( !current_user_can( 'edit_post', $post_id ))
                return $post_id;
        }
        $data = $_POST[$meta_box['name']];
        if(get_post_meta($post_id, $meta_box['name']) == "")
            add_post_meta($post_id, $meta_box['name'], $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'], true))
            update_post_meta($post_id, $meta_box['name'], $data);
        elseif($data == "")
            delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
    }
}
add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');

/**
 * 为分类目录和标签添加自定义TDk，及图片设置
 */
$my_cat_and_tag_meta_boxes = array(
    "image"    => array(
        "name"      => "tax_image",
        "std"       => "上传或输入图片URL",
        "the_title" => "特色图片"
    ),
    "title"    => array(
        "name"      => "tax_title",
        "std"       => "输入标题内容（title）",
        "the_title" => "标题 title"
    ),
    "description" => array(
        "name"      => "tax_description",
        "std"       => "输入描述内容（description）",
        "the_title" => "描述 description"
    ),
    "keywords"    => array(
        "name"      => "tax_keywords",
        "std"       => "输入关键字内容（keywords）",
        "the_title" => "关键字 keywords"
    )
);
class vianrougeMetaBoxForCats{
    function __construct(){
        add_action( 'category_add_form_fields', array( $this, 'add_tax_image_field' ) );
        add_action( 'category_edit_form_fields', array( $this, 'edit_tax_image_field' ) );
        add_action( 'category_add_form_fields', array( $this, 'add_upload_js_css' ) );
        add_action( 'category_edit_form_fields', array( $this, 'add_upload_js_css' ) );
        add_action( 'edited_category', array( $this, 'save_tax_meta' ), 10, 2 );
        add_action( 'create_category', array( $this, 'save_tax_meta' ), 10, 2 );

        add_action( 'post_tag_add_form_fields', array( $this, 'add_tax_image_field' ) );
        add_action( 'post_tag_edit_form_fields', array( $this, 'edit_tax_image_field' ) );
        add_action( 'post_tag_add_form_fields', array( $this, 'add_upload_js_css' ) );
        add_action( 'post_tag_edit_form_fields', array( $this, 'add_upload_js_css' ) );
        add_action( 'edited_post_tag', array( $this, 'save_tax_meta' ), 10, 2 );
        add_action( 'create_post_tag', array( $this, 'save_tax_meta' ), 10, 2 );
    }
    public function add_upload_js_css(){
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('my-upload');
        wp_enqueue_style('thickbox');
        wp_enqueue_media();
        require ('my-meta-box-js.php');
    }
    public function add_tax_image_field(){
        $term_id = $term->term_id;
        $term_meta = get_option( "vianrouge_taxonomy_$term_id" );
        global $my_cat_and_tag_meta_boxes;
        foreach($my_cat_and_tag_meta_boxes as $meta_box){
            $current_name = $meta_box['name'];
            $current_title = $meta_box['the_title'];
            $current_name_value = $term_meta[$meta_box['name']];
            $meta_value = $current_name_value ? $current_name_value : '';
            switch ($current_name){
                case 'tax_image':
                    echo '<tr class="form-field"><th scope="row"><label for="term_meta['.$current_name.']">'.$current_title.'</label><td>
                        <input type="text" name="term_meta['.$current_name.']" value="" id="uploadImgField" size="40" aria-required="true"/><a id="uploadImg" class="upload-img button" href="#">上传图片</a><p class="description">'.$meta_box['std'].'</p></td></th></tr>';
                    break;
                default:
                    echo '<tr class="form-field"><th scope="row"><label for="term_meta['.$current_name.']">'.$current_title.'</label><td><textarea name="term_meta['.$current_name.']" id="term_meta['.$meta_box['name'].']"  cols="50"></textarea><p class="description">'.$meta_box['std'].'</p></td></th></tr>';
            }
        }
    }
    public function edit_tax_image_field( $term ){
        $term_id = $term->term_id;
        $term_meta = get_option( "vianrouge_taxonomy_$term_id" );
        global $my_cat_and_tag_meta_boxes;
        foreach($my_cat_and_tag_meta_boxes as $meta_box){
            $current_name = $meta_box['name'];
            $current_title = $meta_box['the_title'];
            $current_name_value = $term_meta[$meta_box['name']];
            $meta_value = $current_name_value ? $current_name_value : '';
            switch ($current_name){
                case 'tax_image':
                    echo '<tr class="form-field"><th scope="row"><label for="term_meta['.$current_name.']">'.$current_title.'</label><td>
                        <input type="text" name="term_meta['.$current_name.']" value="'.$meta_value.'" id="uploadImgField" size="40" aria-required="true"/><a id="uploadImg" class="upload-img button" href="#">上传图片</a><p class="description">'.$meta_box['std'].'</p></td></th></tr>';
                    break;
                default:
                    echo '<tr class="form-field"><th scope="row"><label for="term_meta['.$current_name.']">'.$current_title.'</label><td><textarea name="term_meta['.$current_name.']" id="term_meta['.$meta_box['name'].']" cols="50">'.$meta_value.'</textarea><p class="description">'.$meta_box['std'].'</p></td></th></tr>';
            }
        }
    }
    public function save_tax_meta( $term_id ){
        if ( isset( $_POST['term_meta'] ) ) {
            $t_id = $term_id;
            $term_meta = array();
            global $my_cat_and_tag_meta_boxes;
            foreach ($my_cat_and_tag_meta_boxes as $meta_box) {
                $current_name = $meta_box['name'];
                $current_name_value = $_POST['term_meta'][$current_name];
                switch ($current_name){
                case 'tax_image':
                    $term_meta[$current_name] = isset ( $current_name_value ) ? esc_url( $current_name_value ) : '';
                    break;
                default:
                    $term_meta[$current_name] = isset ( $current_name_value ) ? $current_name_value : '';
                }
            }
            update_option( "vianrouge_taxonomy_$t_id", $term_meta );
        }
    }
}
$wptt_tax_image = new vianrougeMetaBoxForCats();