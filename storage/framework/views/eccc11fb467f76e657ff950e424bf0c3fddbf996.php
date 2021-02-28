<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <title>UTANATOR_Q5</title>
</head>
<body>
    <form action="store5" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="trip" value="domestic">
        <input type="submit" value="国内">
    </form>
    <form action="store5" methid="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="trip" value="foreign">
        <input type="submit" value="海外">
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
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/HEW2020/resources/views/Q5.blade.php ENDPATH**/ ?>