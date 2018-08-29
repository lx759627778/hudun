<?php
    $i = 0;
    $friend_links = json_encode(
        array(
            array(
                'title' => '迅捷CAD编辑器有什么作用？',
                'excerpt' => '答：借助迅捷CAD编辑器，可以对常见的CAD、DWG、DXF、DWT等图纸格式进行查看、编辑，进一步保存文档以及将文档输出打印等。',
                'link' => '',
            ),
            array(
                'title' => '如何购买迅捷CAD编辑器注册码？',
                'excerpt' => '答：在软件界面上点击购买按钮，进入到软件官网，填写个人信息并成功支付后，即可收到软件注册码。',
                'link' => '',
            ),
            array(
                'title' => '成功支付后，多久可以收到注册码？',
                'excerpt' => '答：在软件界面上点击购买按钮，进入到软件官网，填写个人信息并成功支付后，即可收到软件注册码。',
                'link' => '',
            ),
            array(
                'title' => '免费试用版软件和注册版软件有何不同？',
                'excerpt' => '答：免费试用版软件在保存文档时，会在页面上添加水印，注册版软件可以在编辑后完美保存文档。',
                'link' => '',
            ),
            array(
                'title' => '可否通过迅捷CAD编辑器来创建新文件？',
                'excerpt' => '答：可以。用户可以在软件上新建空白的编辑页面，完成编辑后将其保存即可。',
                'link' => '',
            ),
            array(
                'title' => '为何编辑保存文件后无法将其打开？',
                'excerpt' => '答：用户的编辑文件受损或者是用户没有从正规的渠道上下载软件，导致软件带有病毒等。',
                'link' => '',
            ),
        )
    );
    if( !empty( $friend_links ) ):
        $friend_links_decoded = json_decode($friend_links);
        if( !empty($friend_links_decoded) ):
            foreach($friend_links_decoded as $value):
                $link = $value->link;
                $title = $value->title;
                $excerpt = $value->excerpt;
                $i++;
                echo '<li><h4>'.$i.'、'. $title .'</h4><h5>'. $excerpt .'</h5></li>';
                endforeach;
        endif;
    endif;
?>