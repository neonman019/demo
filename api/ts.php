<?php

// header("Content-Type: video/mp2t");
header("Connection: keep-alive");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length,Content-Range");
header("Access-Control-Allow-Headers: Range");
header("Accept-Ranges: bytes");
$ts = $_GET['ts'];

 
        $headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg,text/html,application/xhtml+xml'; 
        $headers[] = 'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628'; 
        $headers[] = 'Connection: Keep-Alive'; 
        $headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8'; 
        $useragent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)'; 
        $process = curl_init($ts); 
        curl_setopt($process, CURLOPT_HTTPHEADER, $headers); 
        curl_setopt($process, CURLOPT_HEADER, 0); 
        curl_setopt($process, CURLOPT_USERAGENT, $useragent);
        // curl_setopt($process, CURLOPT_REFERER, $referer);
        curl_setopt($process, CURLOPT_TIMEOUT, 30); 
        curl_setopt($process, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1); 
        $return = curl_exec($process); 
        curl_close($process); 
        
        echo $return;

?>
