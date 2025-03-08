<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Edit</td>
            </tr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php echo e($user->id); ?>

                </td>
                <td>
                    <?php echo e($user->name); ?>

                </td>
                <td>
                    <a href="edit/<?php echo e($user->id); ?>">Edit</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\KENN Folder\Assignment 4\resources\views/stud_edit_view.blade.php ENDPATH**/ ?>