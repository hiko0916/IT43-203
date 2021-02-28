<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <title>UTANATOR_Q2</title>
</head>
<body>
    <form action="store2" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="3">
        <input type="submit" value="得意">
    </form>
    <form action="store2" methid="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="0">
        <input type="submit" value="苦手">
    </form>
    <form action="store2" methid="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="num" value="1">
        <input type="submit" value="普通">
    </form>

    <?php if(Session::has('age')): ?>
    <p><?php echo e(Session::get('age')); ?></p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH /Users/Tomohiko/Desktop/HEW2020/HEW2020/resources/views/Q2.blade.php ENDPATH**/ ?>