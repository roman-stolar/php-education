<?php

if ( isset( $_SESSION['user_id'] )
    && isset( $_SESSION['user_email'] )
    && isset( $_SESSION["user_firstname"] )
    && isset ( $_SESSION["user_lastname"] )
) {
    echo 'Hello ' . $_SESSION['user_firstname'] . ' ' . $_SESSION["user_lastname"];
    echo '<h2>Dashboard page</h2>';
} else {
    echo '<h2>Welcome page</h2>';
}

