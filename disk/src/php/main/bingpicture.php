<?php
$jsonUrl = 'https://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=zh-CN';
// 使用 file_get_contents 获取链接的源代码
$jsonData = file_get_contents($jsonUrl);
// 将 JSON 数据解码为关联数组
$data = json_decode($jsonData, true);
// 获取 images 数组中的第一个元素的 url 值
$url = $data['images'][0]['url'];
$bingHomepage = 'https://cn.bing.com/';
// 结合链接并进行跳转
header("Location: $bingHomepage$url");
exit();

?>