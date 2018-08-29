<script>
    jQuery(document).ready(function(){
        var wp_upload_frame;
        var value_id;
        jQuery('.upload-img').live('click',function(event){
            value_id =jQuery( this ).attr('id');
            event.preventDefault();
            if( wp_upload_frame ){
                wp_upload_frame.open();
                return;
            }
            wp_upload_frame = wp.media({
                title: '插入图片',
                button: {
                    text: '插入',
                },
                multiple: false
            });
            wp_upload_frame.on('select',function(){
                attachment = wp_upload_frame.state().get('selection').first().toJSON();
                jQuery('#uploadImgField').val(attachment.url).trigger('change');
            });
            wp_upload_frame.open();
        });
        if(jQuery('#uploadImgField').val()==''){
            jQuery('.upload-img').html('上传图片');
        }else{
            jQuery('.upload-img').html('重新上传');
        }
    });
</script>