<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <link rel="stylesheet" href="<?php echo e(asset('css/sanitize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/question.css')); ?>">
    <title>UTANATOR_Q1</title>
</head>
<body>
    <div class="logo">
        <a href="/"><img src="images/logo.png" alt=""></a>
    </div>
    <h1>Q1：あなたの年齢層は？</h1>
    <div>
        <form action="store1" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="age" value="teen">
            <input type="submit" value="10代だと思いたい">
        </form>
        <form action="store1" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="age" value="middle">
            <input type="submit" value="20代でいけるっしょ">
        </form>
        <form action="store1" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="age" value="high">
            <input type="submit" value="30代以上の大人やで">
        </form>
    </div>

    <footer>HEW 2021 Tomohiko.O</footer>

    <!-- <?php if(Session::has('result')): ?>
    <p><?php echo e(Session::get('result')); ?></p>
    <?php endif; ?> -->

    <!-- <?php if(Session::has('result')): ?>
    <p><?php echo e(Session::get('result')); ?></p>
    <?php endif; ?>

    <?php if(Session::has('Q3')): ?>
    <p><?php echo e(Session::get('Q3')); ?></p>
    <?php endif; ?>

    <?php if(Session::has('Q4')): ?>
    <p><?php echo e(Session::get('Q4')); ?></p>
    <?php endif; ?>

    <?php if(Session::has('Q5')): ?>
    <p><?php echo e(Session::get('Q5')); ?></p>
    <?php endif; ?>

    <?php if(Session::has('Q6')): ?>
    <p><?php echo e(Session::get('Q6')); ?></p>
    <?php endif; ?> -->
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/IT43-203/resources/views/Q1.blade.php ENDPATH**/ ?>