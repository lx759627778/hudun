<?php
    $i = 0;
    $friend_links = json_encode(
        array(
            array(
                'title' => '迅捷CAD编辑器编辑文件图文教程',
                'excerpt' => '',
                'link' => '',
            ),
            array(
                'title' => '迅捷CAD编辑器编辑文件图文教程',
                'excerpt' => '',
                'link' => '',
            ),
            array(
                'title' => '迅捷CAD编辑器如何打开文件？',
                'excerpt' => '',
                'link' => '',
            ),
            array(
                'title' => '迅捷CAD编辑器文档',
                'excerpt' => '',
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
                echo '<li><a>'.$i.'.'. $title .'</a></li>';
                endforeach;
        endif;
    endif;
?>