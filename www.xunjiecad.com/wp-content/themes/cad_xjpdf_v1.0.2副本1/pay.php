<?php
/**
 * 转发请求
 * 只支持post请求
 * Created by PhpStorm.
 * User: bigpang
 * Date: 2017/6/1
 * Time: 08:31
 */
class Requests
{
    static protected $domain = 'http://app.xunjiepdf.com/api';
    /**
     * 服务器post提交
     * @param $path
     * @param array $params
     * @return mixed
     */
    static function curl_post($path, $params = [])
    {
        $url = self::$domain . $path;
        $data = $params;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);//超时时间
        curl_setopt($ch, CURLOPT_POST, 1);//请求方式为post
        curl_setopt($ch, CURLOPT_HEADER, 0);//不打印header信息
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//返回结果转成字符串
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);//post传输的数据。
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo curl_error($ch);
        }
        curl_close($ch);

        return $result;
    }


}

$path='/v3/buypaypack';

$data = $_POST;

print_r($res);

$data = json_encode($data) ;

$res=json_decode(Requests::curl_post($path, $data));

header('Location:'.$res->message);