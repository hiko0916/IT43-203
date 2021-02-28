<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <title>UTANATOR_Q6</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/sanitize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/question.css')); ?>">
</head>
<body>
    <div class="logo">
        <a href="/"><img src="images/logo.png" alt=""></a>
    </div>
    <h1>Q5：流行に乗りたいタイプ？</h1>
    <div>
        <form action="store6" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="trend" value="major">
            <input type="submit" value="乗る！">
        </form>
        <form action="store6" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="trend" value="minor">
            <input type="submit" value="乗らな〜い">
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
    <?php endif; ?>

    <?php if(Session::has('Q4')): ?>
    <p><?php echo e(Session::get('Q4')); ?></p>
    <?php endif; ?>

    <?php if(Session::has('Q5')): ?>
    <p><?php echo e(Session::get('Q5')); ?></p>
    <?php endif; ?> -->
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/IT43-203/resources/views/Q6.blade.php ENDPATH**/ ?>