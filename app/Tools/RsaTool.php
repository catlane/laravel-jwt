<?php
namespace App\Tools;

class RsaTool
{

    /**
     * 获取公钥和私钥
     */
    public static function getKeys() : array
    {
        $config = array(
            'digest_alg' => 'sha512',
            'private_key_bits' => 2048,//指定多少位来生成私钥
            'private_key_type' => OPENSSL_KEYTYPE_RSA
        );
        $res = openssl_pkey_new($config);
        //获取私钥
        openssl_pkey_export($res, $private_key, null, $config);
        //获取公钥
        $details = openssl_pkey_get_details($res);
        $public_key = $details['key'];
        return [
            'public_key' => $public_key,
            'private_key' => $private_key
        ];
    }


    public static function publicEncrypt($data, $publicKey, $privateKey)
    {
        if (is_array($data)) {
            $data = json_encode($data);
        }

        $dataArray = str_split($data, 128);
        $allStr = '';
        foreach ($dataArray as $item) {
            openssl_public_encrypt($item,$encrypted, $publicKey, OPENSSL_PKCS1_OAEP_PADDING);//这个OPENSSL_PKCS1_OAEP_PADDING是对方要求要用这种padding方式
            $allStr .= $encrypted;
        }

        return base64_encode($allStr);
    }



    public static function privateDecrypt($data, $privateKey)
    {
        if (!is_string($data)) {
            return NULL;
        }

        $data = base64_decode($data);
        $dataArray = str_split($data, 256);

        $decrypted = '';
        foreach($dataArray as $subData){


            openssl_private_decrypt($subData, $subDecrypted, $privateKey, OPENSSL_PKCS1_OAEP_PADDING);

            $decrypted .= $subDecrypted;

        }
        return json_decode($decrypted, TRUE) ?? $decrypted;

    }

}
