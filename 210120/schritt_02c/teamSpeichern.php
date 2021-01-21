<?php
session_start();
if (!isset($_SESSION['team'])) {
    $_SESSION['team'] = array();
}

$member = $_POST['id'];
if (!in_array($member, $_SESSION['team'])) {
    $_SESSION['team'][] = $member;
}
