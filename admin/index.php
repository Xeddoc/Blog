<?php
if(!isset($_SESSION['id'])) {session_start();}
?>
  <html>
  <head>
  <?php require_once('headAdmin.php'); ?>
  </head>

  <body>
    <main>
      <?php
      require_once('navAdmin.php');
       ?>

       <div class="textAdmin">
       <center><h1>Bienvenue sur le dashboard admin <?php echo $_SESSION['pseudo']; ?></h1></center>
       </div>

    </main>
  </body>

  </html>
