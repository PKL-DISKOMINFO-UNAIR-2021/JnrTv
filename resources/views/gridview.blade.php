<?php

function get_curl ($url){

    $curl = curl_init() ;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, true);

}

$result = get_curl('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCEe1ees-scoEkTQv3he9PJw&key=AIzaSyBj_nuoEMPsKH-_Kc9hGpgIlxJE5jDX0yA');

//latest video
$urlvideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBj_nuoEMPsKH-_Kc9hGpgIlxJE5jDX0yA&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=5&part=snippet&order=date';
$result = get_curl($urlvideo);

$latestvideo = $result['items'][0]['id']['videoId'];
$judul = $result['items'][0]['snippet']['title'];
$desc = $result['items'][0]['snippet']['description'];

$latestvideo1 = $result['items'][1]['id']['videoId'];
$judul1 = $result['items'][1]['snippet']['title'];
$desc1 = $result['items'][1]['snippet']['description'];

$latestvideo2 = $result['items'][2]['id']['videoId'];
$judul2 = $result['items'][2]['snippet']['title'];
$desc2 = $result['items'][2]['snippet']['description'];

$latestvideo3 = $result['items'][3]['id']['videoId'];
$judul3 = $result['items'][3]['snippet']['title'];
$desc3 = $result['items'][3]['snippet']['description'];

$latestvideo4 = $result['items'][4]['id']['videoId'];
$judul4 = $result['items'][4]['snippet']['title'];
$desc4 = $result['items'][4]['snippet']['description'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/vid.css">
</head>
<body>
    <div class="movies-heading">
        <h2>Explore</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <iframe src="https://youtube.com/embed/<?= $latestvideo; ?>?rel=0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="text">
            <!--text--------->
            <a href="#"><?= $judul; ?></a>
            <p href="#"><?= $desc; ?></p>
        </div>
        <!--box-2------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <iframe src="https://youtube.com/embed/<?= $latestvideo1; ?>?rel=0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="text">
            <!--text--------->
            <a href="#"><?= $judul1; ?></a>
            <p href="#"><?= $desc1; ?></p>
        </div>
        <!--box-3------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <iframe src="https://youtube.com/embed/<?= $latestvideo2; ?>?rel=0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="text">
            <!--text--------->
            <a href="#"><?= $judul2; ?></a>
            <p href="#"><?= $desc2; ?></p>
        </div>
        <!--box-4------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <iframe class="embed-responsive-item" src="https://youtube.com/embed/<?= $latestvideo3; ?>?rel=0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="text">
            <!--text--------->
            <a href="#"><?= $judul3; ?></a>
            <p href="#"><?= $desc3; ?></p>
        </div>
        <!--box-5------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <iframe src="https://youtube.com/embed/<?= $latestvideo4; ?>?rel=0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="text">
            <!--text--------->
            <a href="#"><?= $judul4; ?></a>
            <p href="#"><?= $desc4; ?></p>
        </div>
    </section>


    <script>

        function videoslider(links){
            document.querySelector(".slider").src = links;
        }

    </script>

</body>
</html>