<?php
$url = "https://bangalore-6.restream.io/preview-stream-1/re_8417192_9cfde3e3ea223a1e7b62_select2efd34c9-23f4-4ce1-9cc1-376926ca2e32.mp4?";

$ch = curl_init($url);

curl_setopt_array($ch, [
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => false,
    CURLOPT_HEADER => false,
    CURLOPT_HTTPHEADER => [
        "Referer: https://app.restream.io/",
        "Origin: https://app.restream.io"
    ],
    CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36"
]);

header("Content-Type: video/mp4");
header("Access-Control-Allow-Origin: *");

curl_exec($ch);

if (curl_errno($ch)) {
    http_response_code(500);
    echo curl_error($ch);
}

curl_close($ch);
?>
