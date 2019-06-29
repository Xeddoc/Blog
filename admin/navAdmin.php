<?php
if(!isset($_SESSION['id'])) {session_start();}
if(isset($_SESSION['id'])){ ?>
<nav>
<div class="navAdmin">
  <ul class=''>
    <a href='compAdmin.php'><li class=''><center>Compétences</center></li></a>
    <a href='expAdmin.php'><li class=''><center>Expériences</center></li></a>
    <a href='messAdmin.php'><li class=''><center>Messages reçus</center></li></a>
    <a href='presAdmin.php'><li class=''><center>Présentations</center></li></a>
    <a href='inscription.php'><li class=''><center>Création User Admin</center></li></a>
    <a href='backAdmin/deconnect.php'><li class=''><center>Déconnexion</center></li></a>
    <a href='../' target="_blank"><li class=''><center>Site membres</center></li></a>
  </ul>
</div>
</nav>
<?php
}else{echo "<meta http-equiv='refresh' content='0;URL=connect.php'>";}
 ?>