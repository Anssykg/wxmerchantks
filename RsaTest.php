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
    public function create()
    {
        return WxMerChantKs\Rsa::createKeys();
    }

    public function index()
    {
        $pub_key = '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtN0TTXhkuD88G5PUBvHI
KVyKhSBzTk+gH6wwPhQCoECzBP2s1R8H8r6Cf+0iXhUUsG4FlnsL7LNJ0jNZ+m2B
eVAjvsdWtD5jTkwPWRsW0RA2xHUsL9VmQmj6kSejk7OBut459EsO4Y4ppx1k7ipZ
6nNWWN6Mwbg/UScy/F4lKFFiPTKeZsa1qCs+gkmDM7PQX1VQS/7kd6Um28P7VMAO
21qJPpFayNvD1tUaNuWksxUNzJI8jlRG/gWKiRNOm++cLV0wlqS0d5mnqbDPedP3
kBHymfMmtnyuT8r6iCPnkCljhu8XJryynTZ/1xtXqZXjtSSqTJXS1c87XGv+c5FF
4wIDAQAB
-----END PUBLIC KEY-----';
        $pri_key = '-----BEGIN PRIVATE KEY-----
MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC03RNNeGS4Pzwb
k9QG8cgpXIqFIHNOT6AfrDA+FAKgQLME/azVHwfyvoJ/7SJeFRSwbgWWewvss0nS
M1n6bYF5UCO+x1a0PmNOTA9ZGxbREDbEdSwv1WZCaPqRJ6OTs4G63jn0Sw7hjimn
HWTuKlnqc1ZY3ozBuD9RJzL8XiUoUWI9Mp5mxrWoKz6CSYMzs9BfVVBL/uR3pSbb
w/tUwA7bWok+kVrI28PW1Ro25aSzFQ3MkjyOVEb+BYqJE06b75wtXTCWpLR3maep
sM950/eQEfKZ8ya2fK5PyvqII+eQKWOG7xcmvLKdNn/XG1epleO1JKpMldLVzztc
a/5zkUXjAgMBAAECggEAFvug4E9UPTWL5dU7NEa1MMxZreEZxfHIXz36Q2k3jDWs
ig3SUKLI18ftvWPc4ie7oU/Z1e187m86CkQMQw53TXspj6y1D+J9rA1uRdxzYc21
p/Fb1BhCDl5YuOlYmARPj/d9VdXT5kWydVH+6WToWCqf5lshd9x5704T5I3yGtVF
4maesVYemAkbEgx+PpaosOHUvSk5yq+V7FXUw7SM9Z72i2r6ZGMCnN25I5kSbQYR
pBtX8KkLzpeJMBFHcbPDkWJhK1xV3JWVf1n030knEFo6hLOAn+MkfgI3NBIUq9lE
gdrgBz4uXYAJPc93Ldavft2Mr+kSqt+gc2ieqz6OgQKBgQDlR8ELxWqc6FwiFcQz
lfDQeUfMin9T//iU39U7slCfgHfob5pSjRQUgsO3WktgvkPOAK6zKPCOoho+BOhp
HXzRkZ9bggakbM4mZytVDqJada85hk3Ti9GvqCY2se5dSXHRNfDPJNOaZzxIm68C
Ct+2C3/R9weOULWA293lr4QWSQKBgQDJ8ODwknTvvN4EOh8AFxgb8oRdq22lARl+
MLB/ZyD3hsitxNXmj/avk/8A8izkmVImpV9ay2o4/CeOMDvhOMFSsDc8rmR6/Orr
GTlcIfickKHV4ckQqi7q8jJA0MJtkUscbQv+qLKTDm8QsHVHr3/pnmwsww7Nntnv
CQGdMk7KywKBgQCRnElQhXbY4YSprPMm48HFVFCx6P9GRJkFS0XrnKoxMfB08HOs
m6Y2BHnxdunKLet3590LMSPdIbvSyWEkaLK9kWMIRYKcZ/FgWEMfyKR5GKZIvS+t
+u0XRo3GTKgaHKuo9z3RAA1W0NtrLVwuyuMahSEPInhs/HrYtEmvNhGH6QKBgQC3
GHULCu+FkswGLyB+d3H/nPLQ7ybZzdZsaP8OdNYaOBXqICcFBpDXfytdkzaLCkzH
B3genYKxKkc/D5KrUUdPjsB2f3RRYtIo2VT9qTt90VE62J3yQyuJEJHp3J38tBjT
LDgM7K4E0bh3/FZJ6eDjVCWmrDDW1Gmq5pKVEdEI4wKBgAeE+JgnVDWVQgZ9akJD
Y2rFVPrdrzabgkKyKLX6dOzEL3Mfk0pMQyTzGyk8X1lIZI+HuMM5RsB5WcL4S2/l
u4YgbDdOcYbOBNvhwU8O0Q0T3yLur5vN02LvxqO+PApkktQ2Kz5FUNu/NK5FVAVI
Q3dOB34JsU1q6idFAxlETeh1
-----END PRIVATE KEY-----';
        $RSA = new WxMerChantKs\Rsa($pub_key,$pri_key);
        // 公钥加密私钥解密
        // $str = "好家伙";
        // return $RSA->publicEncrypt($str);
        // $key = "GMZq1vuK7pthx5BWpt4k5eF9_foljbVdm2rTmXoVP8LNqHidSqW2i9MfIFKqVx_JAgjWcdxjyvIRRhU1K9W-h3S46SXHmPNqECuOuYnD-iruO63U0q2EFzpfKsGnvI8Akryq40OOKLTg9bHWUUPmSKBw96NpSHLKyFSmLYoo9K9SwOqoL35Nm4XceCY8q79jjwnIN2DPnJaPmVs1wXfbf269mJI7y8ZJPJHpSUptL6rWKyI6HJWh2gr5clO1x21IFGMTYOGqgB7GOcZDwhTbkQYIir5GjTCPQNSMUvr1gWSTaYRwi1VirhJXMU-RJH2uKg5qbwAcJbbRTzs-YCW31g";
        // return $RSA->privateDecrypt($key);

        // 私钥加密公钥解密
        // $str = "离谱";
        // return $RSA->privateEncrypt($str);
        // $key = "ir_wu1Qn31jo2WDC1ppJnd4g6KWUYKIlNUttZdLLUetWQ4KmZdqRXk_4wMiWvxZB4guQ6vEBhrjEyi1phW5evGTSwzLPB3Lh_JORHLT229zxJxagRSUj2VyC6FVBGWL0lR5hQw_-Gi_g0eRagHkvZJBJMDnoALH1tkIQrOPtGiWMWabpjCL394Gv7q5o2VofHwhPphyywogowf14csHfymYHyA-rR6TbOUWTuASprOuLJCBopM33yVJa_JP3nkYHaW9HkcfC2riMcsDvTEuRirI5hL2f1yBCqaRAZ6oNccuTQUJ_TuEhHIQY8ZNIsT9lVFBmoMtJiYkTRAkbEH5oaw";
        // return $RSA->publicDecrypt($key);
    }
}
//$result = (new TestClass())->create();
$result = (new TestClass())->index();
var_dump($result);
