<?php
session_start();
if (isset($_SESSION['team'])) {
    $_SESSION['team'] = array();
}
