<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <link rel="stylesheet" href="<?php echo e(asset('css/sanitize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/result.css')); ?>">
    <title>UTANATOR_結果</title>
</head>
<body>
    <h1>あなたにピッタリのアーティストは・・・</h1>

    <div class="contents1">
        <p class="imgbox">
            <img src="images/panicatthedisco.jpg" alt="Panic! At The Disco">
        </p>
        <p class="name">Panic! At The Disco</p>
        <div class="intro">
            <p></p>
        </div>
        <div class="movie">
        <iframe id="iframe" src="https://www.youtube.com/embed/IPXIgEAGe4U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="sns">
            <p id="youtube"><a href="https://www.youtube.com/user/PANICatthedisco" target="_blank" rel="noopener noreferrer"><img src="images/yt_logo_rgb_light.png" alt=""></a></p>
            <p id="amazon"><a href="https://www.amazon.co.jp/s?k=panic+at+the+disco&__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1547TLSVW4E3C&sprefix=panic%2Caps%2C256&ref=nb_sb_ss_ts-doa-p_1_5" target="_blank" rel="noopener noreferrer"><img src="images/Amazon-logo-RGB.png" alt=""></a></p>
        </div>
    </div>

    <p class="retry_button"><a href="/">もう一回！</a></p>

    <footer>HEW 2021 Tomohiko.O</footer>
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/IT43-203/resources/views/result_patd.blade.php ENDPATH**/ ?>