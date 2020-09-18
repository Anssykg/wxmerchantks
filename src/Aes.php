<?php
/**
 * @Created by 666.
 * @User: yuankaiguo
 * @Date: 2020/9/18
 * @Time: 11:35
 */

namespace WxMerChantKs;

class Aes
{
    private $privateKey;
    private $ivKey;
    private $menthod = 'AES-256-CBC';

    /**
     * @set
     * @param $key 加密秘钥
     * @param $iv 加密向量
     */
    public function set($key, $iv)
    {
        $this->privateKey = $key;
        $this->ivKey = $iv;
    }

    /**
     * AES_CBC 解密
     * @aes_cbc_encrypt
     * @param $data [需要加密的数据]
     * @return string [description]
     */
    public function aes_cbc_encrypt($data)
    {
        $encrypted = openssl_encrypt($data, $this->type, $this->privateKey, OPENSSL_RAW_DATA, $this->ivKey);
        return base64_encode($encrypted);
    }


    /**
     * AES_CBC 解密
     * @aes_cbc_decrypt
     * @param $data [需要解密的数据]
     * @return false|string [description]
     */
    public function aes_cbc_decrypt($data)
    {
        $encryptedData = base64_decode($data);
        $decrypted = openssl_decrypt($encryptedData, $this->menthod, $this->privateKey, $options = OPENSSL_RAW_DATA, $this->ivKey);
        return $decrypted;
    }
}
