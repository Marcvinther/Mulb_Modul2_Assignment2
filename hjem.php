<?php $curpage = basename ($_SERVER['PHP_SELF']); ?>
<?php
session_start();
include_once 'dbcon.php';

if (!isset($_SESSION['userSession'])) {
 header("Location: login.php");
}

$query = $link->query("SELECT * FROM tbl_user WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$link->close();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Velkommen</title>
</head>

<body>

<?php include 'menu.php'; ?>
    <center>
        <h1>Velkommen til Lorem ipsum</h1>
        <p>Skynd dig over på en af de andre sider, jeg anbefaler Ditlevs side.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </center>
<?php include 'footer.php'; ?>