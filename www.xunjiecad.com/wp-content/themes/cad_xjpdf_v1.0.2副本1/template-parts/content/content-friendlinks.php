<?php
    $friend_links = json_encode(
        array(
            array(
                'title' => 'JZ5U绿色下载站',
                'link' => 'http://www.jz5u.com',
            ),
            array(
                'title' => '新云下载',
                'link' => 'http://www.newasp.net',
            ),
            array(
                'title' => '系统天堂',
                'link' => 'http://www.xpgod.com',
            ),
            array(
                'title' => '多多软件站',
                'link' => 'http://www.ddooo.com',
            ),
            array(
                'title' => '华彩软件下载站',
                'link' => 'http://www.huacolor.com',
            ),
            array(
                'title' => '下载之家',
                'link' => 'http://www.xiazaizhijia.com',
            ),
            array(
                'title' => '下载之家',
                'link' => 'http://www.downza.cn',
            ),
            array(
                'title' => '起点下载站',
                'link' => 'http://www.cncrk.com',
            ),
            array(
                'title' => '心愿下载站',
                'link' => 'http://www.wishdown.com',
            ),
            array(
                'title' => 'ARP联盟',
                'link' => 'http://www.arpun.com',
            ),
        )
    );
    if( !empty( $friend_links ) ):
        $friend_links_decoded = json_decode($friend_links);
        if( !empty($friend_links_decoded) ):
            foreach($friend_links_decoded as $value):
                $link = $value->link;
                $title = $value->title;
                echo '<a href="'.$link.'" target="_blank" title="'.$title.'" >'. $title .'</a>';
                endforeach;
        endif;
    endif;
?>