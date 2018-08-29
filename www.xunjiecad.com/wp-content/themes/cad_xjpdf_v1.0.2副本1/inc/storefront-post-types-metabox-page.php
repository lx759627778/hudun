<style type="text/css">
    .storefront-post-meta-box td{
        padding: 1em 0;
    }
    .storefront-post-meta-box input{
        padding: .5em;
    }
</style>
<table class="storefront-post-meta-box">
    <tr>
        <td>
            <div><b>文件大小：</b></div>
            <input type="text" size="120" name="daily_pic_size" value="<?php echo $daily_pic_size; ?>" /></td>
    </tr>
    <tr>
        <td>
            <div><b>文件格式：</b></div>
            <input type="text" size="120" name="daily_pic_type" value="<?php echo $daily_pic_type; ?>" /></td>
    </tr>
    <tr>
        <td>
            <div><b>下载次数：</b></div>
            <input type="text" size="120" name="daily_pic_download_times" value="<?php echo $daily_pic_download_times; ?>"  onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" /></td>
    </tr>
    <tr>
        <td>
            <div><b>浏览次数：</b></div>
            <input type="text" size="120" name="post_views_count" value="<?php echo $post_views_count; ?>"  onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" /></td>
    </tr>
    <tr>
        <td>
            <div><b>下载地址：</b></div>
            <input type="text" size="120" name="daily_pic_download_link" value="<?php echo $daily_pic_download_link; ?>" /></td>
    </tr>
    <tr>
        <td>
            <div><b>评分等级：</b></div>

            <select name="daily_pic_rating">
            <?php
            for ( $rating = 5; $rating >= 1; $rating -- ) {
            ?>
                <option value="<?php echo $rating; ?>" <?php echo selected( $rating, $daily_pic_rating ); ?>>
                <?php echo $rating; } ?>
                </option>
            </select>
        </td>
    </tr>
</table>