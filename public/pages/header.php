<header>
    <?php
        if ( !isset( $_SESSION['user_id'] )
            && !isset( $_SESSION['user_email'] ) ) {
    ?>
        <a href='./pages/loginForm.php'>Login</a>
        <a href='./pages/signupForm.php'>Sign up</a>
    <?php
        } else {
    ?>
        <a href='./../../includes/logout.inc.php'>Log out</a>
    <?php
        }
    ?>
</header>
