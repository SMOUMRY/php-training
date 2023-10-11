<?php


try {
    $fileContent = file_get_contents("datas/sitemap.json");
    $sitenav = json_decode($fileContent, true);
} catch (Exception $e) {
    echo "Something went wrong with json file..." . $e;
    exit;
}

$currentPage = basename($_SERVER['PHP_SELF']);

echo "
    <!DOCTYPE html>
    <html lang='fr'>
    <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='{$sitenav["$currentPage"]['stylesheet']}'>
    <link rel='icon' type='image/x-icon' href='{$sitenav["$currentPage"]['favicon']}'>
    <title>{$sitenav["$currentPage"]['title']}</title>
    </head>
    <body class='dark-template'>
    <div class='container'>
        <header class='header'>";

echo "<h1 class='main-ttl'>{$sitenav["$currentPage"]['title']}</h1>
    <nav class='main-nav'>
    <ul class='main-nav-list'>";

foreach ($sitenav as $itemName => $item) {
    if ($currentPage != $itemName) echo "<li><a class='main-nav-link' href='{$item['href']}'>{$item['link-content']}</a></li>";
    else echo "<li><a class='main-nav-link active' href='{$item['href']}'>{$item['link-content']}</a></li>";
};
echo "</ul></nav></header>";