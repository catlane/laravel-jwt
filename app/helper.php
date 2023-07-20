<?php

if (!function_exists('clog')) {
    /**
     * 写入日志
     *
     * @param string              $title        日志标题
     * @param string|array|object $content      日志内容
     * @param string              $fileName     日志文件名
     * @param bool                $json         true用json来记录，false直接记录原数组或者对象或者字符串
     */
    function clog(string $title, $content = [], $fileName = 'info')
    {
        $json = TRUE;
        //获取默认log通道
        $path =  storage_path('logs/');
        if (!$fileName) {
            $fileName = 'info';
        }
        if (($logPos = strpos($fileName, '.log')) !== false) {
            $fileName = substr($fileName, 0, $logPos);
        }
        $fileName = $fileName . '_'. date('Y_m_d');
        $file = $path.$fileName . '.log';

        if (!is_dir($path) && !mkdir($path, 0777, 'p')) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $path));
        }
        if (is_string($content)) {
            $logContent = $content;
        }else{
            $logContent = $json ? json_encode($content, JSON_UNESCAPED_UNICODE) : print_r($content, true);
        }

        $time = date('Y-m-d H:i:s');

        $fi = fopen($file, 'ab');
        fwrite($fi, "[{$time}]  [info] {$title} {$logContent}\n");
        fclose($fi);


    }
}

function enjiami($str)
{
    $str = trim($str);
    if (empty($str)) {
        return '';
        exit;
    }
    //AES, 128 ECB模式加密数据
    $screct_key = config('app.phone_key');
    $screct_key = base64_decode($screct_key); //16,24,32
    $str = trim($str);
    if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
        $pad_value = 16 - (strlen($str) % 16);

        $str = str_pad($str, (16 * (floor(strlen($str) / 16) + 1)), chr($pad_value));

        $screct_key_len = strlen($screct_key);
        if ($screct_key_len <= 16) {
            $aes = 'AES-128-ECB';
        } elseif ($screct_key_len > 16 && $screct_key_len <= 24) {
            $aes = 'AES-192-ECB';
        } else {
            $aes = 'AES-256-ECB';
        }
        $encrypt_str = openssl_encrypt($str, $aes, $screct_key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING);
    } else {
        $str = addPKCS7Padding($str);
        $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB), MCRYPT_RAND);
        $encrypt_str = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $screct_key, $str, MCRYPT_MODE_ECB, $iv);
    }
    return base64_encode($encrypt_str);
}
