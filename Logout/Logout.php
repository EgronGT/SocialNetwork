<?php  if (isset($_SESSION['username'])) : ?>

    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >

        </div>
    <?php endif ?>

    <a href="LoginPage.php?logout='1'";">Log-Out</a>
<?php endif ?>