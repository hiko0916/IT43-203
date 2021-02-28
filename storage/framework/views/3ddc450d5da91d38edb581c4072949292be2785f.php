<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <title>UTANATOR_Q3</title>
</head>
<body>
    <form action="store3" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="3">
        <input type="submit" value="大人数">
    </form>
    <form action="store2" methid="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="0">
        <input type="submit" value="少人数">
    </form>
    <form action="store2" methid="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="1">
        <input type="submit" value="どちらでも">
    </form>

    <?php if(Session::has('age')): ?>
    <p><?php echo e(Session::get('age')); ?></p>
    <?php endif; ?>

    <?php if(Session::has('Q2')): ?>
    <p><?php echo e(Session::get('Q2')); ?></p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/HEW2020/resources/views/Q3.blade.php ENDPATH**/ ?>