<form method="POST" action="/store">
    <label for="">Name <input type="text" name="name"></label>
    <label for="">Email <input type="email" name="email"></label>
    <label for="">Password <input type="password" name="password"></label>
    <label for="">Password <input type="password" name="password-confirmation"></label>
    <input type="submit" value="Register">
    <?php echo csrf_field(); ?>
</form> <?php /**PATH D:\Lakshmanan_1\student_app\Std_app\resources\views/auth/register.blade.php ENDPATH**/ ?>