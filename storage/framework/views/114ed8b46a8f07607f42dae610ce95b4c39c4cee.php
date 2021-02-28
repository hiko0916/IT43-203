<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <title>UTANATOR_Q4</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/sanitize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/question.css')); ?>">
</head>
<body>
    <div class="logo">
        <a href="/"><img src="images/logo.png" alt=""></a>
    </div>
    <h1>Q4：夏といえば？</h1>
    <div>
        <form action="store4" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="num" value="3">
            <input type="submit" value="海">
        </form>
        <form action="store4" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="num" value="2">
            <input type="submit" value="お祭り">
        </form>
        <form action="store4" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="num" value="1">
            <input type="submit" value="山">
        </form>
        <form action="store4" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="num" value="0">
            <input type="submit" value="家">
        </form>
    </div>

    <footer>HEW 2021 Tomohiko.O</footer>

    <!-- <?php if(Session::has('age')): ?>
    <p><?php echo e(Session::get('age')); ?></p>
    <?php endif; ?>

    <?php if(Session::has('Q2')): ?>
    <p><?php echo e(Session::get('Q2')); ?></p>
    <?php endif; ?>

    <?php if(Session::has('Q3')): ?>
    <p><?php echo e(Session::get('Q3')); ?></p>
    <?php endif; ?> -->
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/IT43-203/resources/views/Q4.blade.php ENDPATH**/ ?>