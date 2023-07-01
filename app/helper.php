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
