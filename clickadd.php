<?php
require("bar.php");
$aID = $_GET["id"];
$redurl = $_GET["url"];
$current = file_get_contents("counter/" . $aID . ".txt");
$now = $current + 1;
file_put_contents("counter/" . $aID . ".txt", $now);
if (!isset($redurl)) {
	echo "<script type='text/javascript'>document.location.href='/';</script>";
}
if (!isset($aID)) {
	echo "<script type='text/javascript'>document.location.href='/';</script>";
}
echo "<script type='text/javascript'>document.location.href='" . $redurl . "';</script>";
?>
<br/><br/><br/><br/><br/><br/>
<center>
<p>Chargement de l'archive en cours...</p>
<img src="https://i.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.webp" />
</center>