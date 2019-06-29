<?php
if(isset($_POST['submitConnect'])){
  if (isset($_POST['login']) && isset($_POST['pwd'])){
    $pseudo = htmlspecialchars($_POST['login']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $rqt = $db->prepare("SELECT pass FROM administrateurs WHERE nom = ?");
    if($rqt->execute(array($pseudo));) {
        $data = $rqt->fetch();
        if(password_verify($pwd, $data['pass'])) {
            $q = $db->prepare("SELECT * FROM administrateurs WHERE nom = ?");
            $q->execute(array($pseudo));
            $userinfo = $q->fetch();
            $_SESSION['id'] = $userinfo['id_admin'];
            $_SESSION['pseudo'] = $userinfo['nom'];?>
            <meta http-equiv="refresh" content="0;index.php" /><?php
        }else{echo "Password incorrect";}
        
    }else{echo "Username incorrect";}
    
      
    
  }else{echo "VEUILLEZ REMPLIR TOUS LES ELEMENTS";}
}
?>
