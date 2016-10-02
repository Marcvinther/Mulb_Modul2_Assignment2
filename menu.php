<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
 $curpage = basename($_SERVER['PHP_SELF']);
?>

<div id="menu"> 
<ul>
	<li><a href="hjem.php" <?php if ($curpage == 'p1.php') { echo 'class="active"'; } ?>>Hjem</a></li>
	<li><a href="marc.php" <?php if ($curpage == 'p2.php') { echo 'class="active"'; } ?>>Marc</a></li>
	<li><a href="jesper.php" <?php if ($curpage == 'p3.php') { echo 'class="active"'; } ?>>Jesper</a></li>
	<li><a href="ditlev.php" <?php if ($curpage == 'p4.php') { echo 'class="active"'; } ?>>Ditlev</a></li>
    <div id="logud">
          <li><a href="logout.php"> Logout</a></li></div>
          </div>
            </ul>
</ul>
</div>