<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/create" method="post">
        <?php echo csrf_field(); ?>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="stud_name" id=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Add Student">
                </td>
            </tr>
        </table>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\KENN Folder\Assignment 4\resources\views/stud_create.blade.php ENDPATH**/ ?>