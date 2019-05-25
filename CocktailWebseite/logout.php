<?php
    session_start();

    setcookie("user", "", time() - (3600*24), "/");
    session_unset();
    session_destroy();
?>