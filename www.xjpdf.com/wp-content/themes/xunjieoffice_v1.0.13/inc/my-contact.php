<?php
if ( ! function_exists( 'myPhoneNum' ) ){
    function myPhoneNum(){
        echo '137-7448-1470';
    }
}
if ( ! function_exists( 'myTelNum' ) ){
    function myTelNum(){
        echo '400-007-6365';
    }
}
if ( ! function_exists( 'myQQNum' ) ){
    function myQQNum(){
        echo '400 007 6365';
    }
}
if ( ! function_exists( 'myQQLink' ) ){
    function myQQLink(){
        echo 'http://url.huifudashi.com/1/qq/';
    }
}


if ( ! function_exists( 'DownloadLink_converter' ) ){
    function DownloadLink_converter(){
        global $download_link_easy;
        $download_link_easy = 'http://download.xunjiepdf.com/download/pdf_setup_6_0_s.exe';
        echo $download_link_easy;        
    }
}

if ( ! function_exists( 'DownloadLink_editor' ) ){
    function DownloadLink_editor(){
        global $download_link_easy;
        $download_link_easy = 'http://alidownload.xjpdf.com/xjpdf/software/pdfeditor.exe';
        echo $download_link_easy;        
    }
}

if ( ! function_exists( 'DownloadLink_ocr' ) ){
    function DownloadLink_ocr(){
        global $download_link_easy;
        $download_link_easy = 'http://download.jsocr.com/software/jsocr.exe';
        echo $download_link_easy;        
    }
}
if ( ! function_exists( 'DownloadLink_printer' ) ){
    function DownloadLink_printer(){
        global $download_link_easy;
        $download_link_easy = 'http://download.huduntech.com/software/pdfdayinji/pdfdayinji.exe';
        echo $download_link_easy;        
    }
}

if ( ! function_exists( 'DownloadLink_caj_win' ) ){
    function DownloadLink_caj_win(){
        global $download_link_easy;
        $download_link_easy = 'http://download.huduntech.com/software/hudunconverter/installer/caj2word.exe';
        echo $download_link_easy;        
    }
}
if ( ! function_exists( 'DownloadLink_caj_mac' ) ){
    function DownloadLink_caj_mac(){
        global $download_link_easy;
        $download_link_easy = 'http://download.huduntech.com/software/hudunconverter/installer/caj2word.dmg';
        echo $download_link_easy;        
    }
}
