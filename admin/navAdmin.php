<?php
if(!isset($_SESSION['id'])) {session_start();}
if(isset($_SESSION['id'])){ ?>
<nav>
<div class="navAdmin">
  <ul class=''>
    <a href='compAdmin.php'><li class=''><center>Compétences</center></li></a>
    <a href='expAdmin.php'><li class=''><center>Expériences</center></li></a>
  </ul>
</div>
</nav>
<?php
}else{echo "<meta http-equiv='refresh' content='0;URL=connect.php'>";}
 ?>