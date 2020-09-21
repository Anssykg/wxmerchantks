<?php
/**
 * @Created by 666.
 * @User: yuankaiguo
 * @Date: 2020/9/18
 * @Time: 11:36
 */

require_once "vendor/autoload.php";

class TestClass
{

    public $appid = 'phsq4561564567';
    public $secretkey = 'dasdasdasdas';
    public $sessionkey = 'c937ee44eb96ea99';

    public function index()
    {
        //$this->sessionkey = substr(md5(uniqid(rand(),1)),   8,   16);
        $AES = new WxMerChantKs\Aes();
        $SignaFunction = new WxMerChantKs\Signature();
        //生成签名
        $appid = $this->appid;
        $format = 'json';
        $data = json_encode(['2222dqsdas' => '1', '中文', 'eqwwqdasdas'], JSON_UNESCAPED_UNICODE);
        $timestamp = time();
        $sign = $SignaFunction->set($this->secretkey)->createSign(compact('appid', 'format', 'data', 'timestamp'));
        $data = $AES->set($this->secretkey, $this->sessionkey)->aes_cbc_encrypt(json_encode(compact('appid', 'format', 'data', 'timestamp', 'sign'), JSON_UNESCAPED_UNICODE));
        echo '数据data' . PHP_EOL;
        echo $data . PHP_EOL;
        echo '数据post_data' . PHP_EOL;
        $postData = [
            'appid' => $this->appid,
            'data' => $data
        ];
        var_dump($postData);

        //验证签名
        $aesData = $postData['data'];
        $jsonData = $AES->set($this->secretkey, $this->sessionkey)->aes_cbc_decrypt($aesData);
        $appid = $postData['appid'];
        echo '获取提交的data' . PHP_EOL;
        $data = json_decode($jsonData, true);
        var_dump($data);
        //开始验证签名
        $sign = $SignaFunction->set($this->secretkey)->createSign($data);
        //生成校验签名
        echo '生成的校验签名' . PHP_EOL;
        var_dump($sign);

        $msg = $sign == $data['sign'] ? "校验成功！" : "校验失败";
        echo $msg . PHP_EOL;
    }
}

(new TestClass())->index();
