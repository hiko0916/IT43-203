<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <title>UTANATOR_Q6</title>
</head>
<body>
    <form action="store6" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="trend" value="major">
        <input type="submit" value="メジャー">
    </form>
    <form action="store6" methid="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="trend" value="minor">
        <input type="submit" value="マイナー">
    </form>

    <?php if(Session::has('age')): ?>
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
    <?php endif; ?>
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/HEW2020/resources/views/Q6.blade.php ENDPATH**/ ?>