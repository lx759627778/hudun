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
                title: 'Insert image',
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
    });
    jQuery(document).ready(function($) {
        $('textarea').each(function () {
          this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function () {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });
    });
</script>