<?php
/**
 * @Created by 666.
 * @User: yuankaiguo
 * @Date: 2020/9/18
 * @Time: 11:35
 */

namespace WxMerChantKs;

class Signature
{
    private $key;

    /**
     * @set 设置对比密钥
     * @param $key
     */
    public function set($key)
    {
        $this->key = $key;
    }

    /**
     * @signVerif 签名加验签
     * @param $data 验证的data
     * @param $key 对比密钥
     * @return string [description]
     */
    public function createSign($data)
    {
        $buff = array();
        foreach ($data as $k => $v) {
            if ($k != "sign" && $v != "" && !is_array($v)) {
                $buff[] = $k . "=" . $v;
            }
        }
        sort($buff, SORT_STRING);
        $tmpStr = trim(implode('&', $buff));
        $stringSignTemp = $tmpStr . "&key=" . $this->key;
        $sign = strtoupper(md5($stringSignTemp));
        return $sign;
    }
}
