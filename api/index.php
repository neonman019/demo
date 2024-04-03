<?php
header("Content-Type: application/vnd.apple.mpegurl");

$d0 = isset($_GET["id"]) ? $_GET["id"] : "";
$j1 = isset($_GET["au"]) ? $_GET["au"] : "";

$n2 = "http://mob.satocean.co/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http://localhost/ch/{$d0}&series=&forced_storage=0&disable_ad=0&download=0&force_ch_link_check=0&JsHttpRequest=1-xml";




$t4 = array(
    "Cookie: mac=00:1A:79:A6:77:4A",
    "Authorization: Bearer  3C8E0560EC24A93B9EAAA82F0CFF5037",
    "Referer: http://mob.satocean.co/stalker_portal/c/",
    "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3",
    "X-User-Agent: Model: MAG250; Link:",
    "Referer: http://mob.satocean.co/stalker_portal/c/"
);

$n3 = curl_init();
curl_setopt($n3, CURLOPT_URL, $n2);
curl_setopt($n3, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($n3, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($n3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($n3, CURLOPT_HTTPHEADER, $t4);
curl_setopt($n3, CURLOPT_USERAGENT, 'Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3');
curl_setopt($n3, CURLOPT_REFERER, 'http://mob.satocean.co/stalker_portal/c/');

$h5 = curl_exec($n3);

curl_close($n3);

$i6 = json_decode($h5, true);

if (isset($i6["js"]["cmd"])) {
    $d7 = $i6["js"]["cmd"];
    header("Location:  " . $d7);
    die;
}
?>