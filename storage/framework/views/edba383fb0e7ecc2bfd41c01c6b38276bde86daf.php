<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <link rel="stylesheet" href="<?php echo e(asset('css/sanitize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/question.css')); ?>">
    <title>UTANATOR_Q3</title>
</head>
<body>
    <div class="logo">
        <a href="/"><img src="images/logo.png" alt=""></a>
    </div>
    <h1>Q3：大人数と少人数なら？</h1>
    <div>
        <form action="store3" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="num" value="3">
            <input type="submit" value="大人数">
        </form>
        <form action="store3" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="num" value="0">
            <input type="submit" value="少人数">
        </form>
        <form action="store3" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="num" value="1">
            <input type="submit" value="どちらでも">
        </form>
    </div>

    <footer>HEW 2021 Tomohiko.O</footer>

    <!-- <?php if(Session::has('age')): ?>
    <p><?php echo e(Session::get('age')); ?></p>
    <?php endif; ?>

    <?php if(Session::has('Q2')): ?>
    <p><?php echo e(Session::get('Q2')); ?></p>
    <?php endif; ?> -->
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/IT43-203/resources/views/Q3.blade.php ENDPATH**/ ?>