<?php

/**
 * 转发请求
 * 只支持post请求
 * 参数
 * {
 *      'path':'/v1/user/verify_token',
 *      'params':{
 *          "version": "v1.0",
 *          "token": "qws23234rwesdasdasd"
 *      }
 * }
 *
 *
 * Created by PhpStorm.
 * User: bigpang
 * Date: 2017/6/1
 * Time: 08:31
 */
class Requests
{
    static protected $domain = 'http://app.xunjiepdf.com/api/v3/buypaypack';
    // static protected $domain = 'http://192.168.1.14:815/api/v3/buypaypack';

    /**
     * 服务器post提交
     * @param $path
     * @param array $params
     * @return mixed
     */
    static function curl_post($path, $params = [])
    {
        $url = self::$domain . $path;
        $headers = [
            'User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9) Gecko/2008052906 Firefox/3.0',
            'Referer:' . $_SERVER['SERVER_NAME'],
            'X-FORWARDED-FOR:' . self::get_client_ip(),
        ];
        $data = $params;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);//超时时间
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
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

    /**
     * 获取客户端IP地址
     * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
     * @param boolean $adv 是否进行高级模式获取（有可能被伪装）
     * @return mixed
     */
    static function get_client_ip($type = 0, $adv = true)
    {
        $type = $type ? 1 : 0;
        static $ip = NULL;
        if ($ip !== NULL) return $ip[$type];
        if ($adv) {
            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
                $pos = array_search('unknown', $arr);
                if (false !== $pos) unset($arr[$pos]);
                $ip = trim($arr[0]);
            } else if (isset($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } else if (isset($_SERVER['REMOTE_ADDR'])) {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        // IP地址合法验证
        $long = sprintf("%u", ip2long($ip));
        $ip = $long ? [$ip, $long] : ['0.0.0.0', 0];

        return $ip[$type];
    }
}

$path = empty($_POST['path']) ? '' : $_POST['path'];
$data = empty($_POST['params']) ? [] : $_POST['params'];
$json = empty($_POST['json'])  ?  0 : 1;

$data = ( $json == 1 ) ? json_encode($data)   :$data ;
echo Requests::curl_post($path, $data);