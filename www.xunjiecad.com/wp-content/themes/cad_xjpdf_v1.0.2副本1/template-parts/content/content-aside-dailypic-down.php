<ul class="dailypic_dwon container_box">
    <div class="btns">
        <a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'daily_pic_download_link', true ) ); ?>" rel="bookmark" title="<?php the_title(); ?>" class="btn-download fileDownloadTimes" target="_blank"><input type="hidden" name="postAction" value="download"><input type="hidden" name="postId" value="<?php the_ID(); ?>">立即下载</a>
    </div>
    <div class="views">
        <span><?php setMyPostViews(get_the_ID()); echo getMyPostViews(get_the_ID()).'人浏览'; ?></span>
    </div>
    <div class="datas">
        <span>文件格式：<i><?php echo esc_html( get_post_meta( get_the_ID(), 'daily_pic_type', true ) ); ?></i></span>
        <span class="size">文件大小：<i><?php echo esc_html( get_post_meta( get_the_ID(), 'daily_pic_size', true ) ); ?></i></span>
        <span>下载次数：<i class="count"><?php if( get_post_meta($post->ID,'daily_pic_download_times',true) ){echo get_post_meta($post->ID,'daily_pic_download_times',true);} else {echo '0';}?></i></span>
    </div>
</ul>