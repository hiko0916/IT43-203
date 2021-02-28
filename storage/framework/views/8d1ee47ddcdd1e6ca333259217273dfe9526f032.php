<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <title>UTANATOR_Q4</title>
</head>
<body>
    <form action="store4" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="3">
        <input type="submit" value="海">
    </form>
    <form action="store4" methid="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="2">
        <input type="submit" value="お祭り">
    </form>
    <form action="store4" methid="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="1">
        <input type="submit" value="山">
    </form>
    <form action="store4" methid="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="0">
        <input type="submit" value="家">
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
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/HEW2020/resources/views/Q4.blade.php ENDPATH**/ ?>