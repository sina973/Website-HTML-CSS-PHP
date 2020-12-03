<section class="contact">
    <?php if (@$_SESSION['contact']): ?>
        <h1 style="text-align: center; font-size: 20; font-family: 'Iranian Sans'; background-color: greenyellow; margin: 0 auto;"> <?php echo $_SESSION['contact']; ?> </h1>
    <?php endif; ?>
    <form action="<?php echo DOMAIN ?>/administrator/admin/contact/insert.php" method="post">
        <input type="text" name="fullname" placeholder="لطفا نام و نام خانوادگی خود را وارد نمایید">
        <input type="email" name="email" placeholder="لطفا ایمیل خود را وارد نمایید">
        <textarea name="comment" placeholder="لطفا نظر خود را وارد نمایید"></textarea>
        <input type="submit" value="ثبت">
    </form>
</section>
<?php
    $_SESSION['contact']=null;
?>