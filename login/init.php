<?php
session_start();
/* if (isset($_SERVER['HTTP_REFERER'])) {
    $_SESSION['previous_url'] = $_SERVER['HTTP_REFERER'];
} */
/* if (!isset($_SESSION['previous_url']) && isset($_SERVER['HTTP_REFERER'])) {
    $_SESSION['previous_url'] = $_SERVER['HTTP_REFERER'];
} */
$user_data =check_login($con);
?>