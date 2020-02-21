<?php
session_start();
$username = $_SESSION["username"];
$pic = $_SESSION["pic"];
if (!isset($_SESSION["pic"])) {
	$pic = "https://minotar.net/helm/MHF_Question/1000.png";
}
if (!isset($_SESSION["username"])) {
	$username = "<a href='https://is.gd/tBwKLB'>Connectez-vous via MC.</a>";
}
function getClickCount($id) {
	$count = file_get_contents("counter/" . $id . ".txt");
	return $count;
}
?>
<!-- SCRIPTS JAVASCRIPT -->

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="https://i.imgur.com/JQpcwr1.png" />
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/"><img src="https://i.imgur.com/ZLvAY9d.png" width="45" /> EpicBackup</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://discord.gg/jPyyazU">Discord</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/downloads">Téléchargements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/videos">Vidéos emblématiques</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/webarchives">Archives du site Epicube</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><small>by X_Shadow_#5962 - shadowdev.cf</small></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <img src="<?php echo $pic ?>" width="45" /><font color="#343A40">......</font><h4><font color="white"> <?php echo $username ?></font></h4>
    </form>
  </div>
</nav>
<div style="background-color: #f44336">
	<center>
		<font color="white">
			<b>ANNONCE</b> Bienvenue sur EpicBackup ! Ce site vient d'arriver, il peut y avoir des bugs :) 
		</font>
	</center>
</div>
<div style="background-color: #009688">
	<center>
		<font color="white">
			<b>RECHERCHE</b> Si vous possèdez des archives du hub qui a été utilisé en 2018 lors de la fermeture, merci de l'envoyer à X_Shadow_#5962 sur discord!
		</font>
	</center>
</div>
