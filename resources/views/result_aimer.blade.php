<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/result.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <title>UTANATOR_結果</title>
</head>
<body>
    <h1>あなたにピッタリのアーティストは・・・</h1>

    <div class="contents1">
        <p class="imgbox">
            <img src="images/aimer.jpg" alt="aimer">
        </p>
        <p class="name">Aimer</p>
        <div class="intro">
            <p></p>
        </div>
        <div class="movie">
        <iframe id="iframe" src="https://www.youtube.com/embed/M3J1KRD1H1Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="sns">
            <p id="youtube"><a href="https://www.youtube.com/user/aimerSMEJ" target="_blank" rel="noopener noreferrer"><img src="images/yt_logo_rgb_light.png" alt=""></a></p>
            <p id="amazon"><a href="https://www.amazon.co.jp/s?k=aimer&__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&ref=nb_sb_noss_1" target="_blank" rel="noopener noreferrer"><img src="images/Amazon-logo-RGB.png" alt=""></a></p>
        </div>
    </div>

    <p class="retry_button"><a href="/">もう一回！</a></p>

    <footer>HEW 2021 Tomohiko.O</footer>
</body>
</html>
