<?php
$user = \App\Utils\Auth::getUser();
?>
<nav>
  <span class="brand">
    <a href="/#">D</a>
  </span>
  <div class="menu">
    <a href="/aboutme" class="scroll-page"><i class="material-icons fa-solid fa-address-card"></i></a><br>
    <a href="/skills" class="scroll-page"><i class="material-icons fa-solid fa-bars-progress"></i></a><br>
    <a href="/project/index" class="scroll-page"><i class="material-icons fa-solid fa-diagram-project"></i></a><br>
    <a href="/contact" class="scroll-page"><i class="material-icons fa-solid fa-file-signature"></i></a><br>
    <a href="/connexion" class="scroll-page"><i class="material-icons fa-solid fa-user"></i></a><br>

  <div class="social">
    <a href="/" target="_blank"><i class="fa-brands fa-github"></i></a><br>
    <a href="/" target="_blank"><i class="fa-brands fa-linkedin"></i></a><br>
  </div>
</nav>