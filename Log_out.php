<?php
session_start();

// unset($_SESSION['loginUser']);
session_destroy();

header('Location: main_page.php');
// 跳轉回首頁
