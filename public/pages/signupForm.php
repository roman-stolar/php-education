<?php
?>
<h3>Sign up</h3>
<form action="./../includes/signup.inc.php" method="post">
    <label for="firstName">First name:</label><br>
    <input type="text" name="firstName"><br>

    <label for="lastName">Last name:</label><br>
    <input type="text" name="lastName"><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email"><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password"><br>

    <label for="passwordConfirm">Confirm password:</label><br>
    <input type="password" name="passwordConfirm"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>
