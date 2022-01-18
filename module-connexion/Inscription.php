<?php
$connect= mysqli_connect("localhost:3306","olivier","moduleconnexion","olivier-d-agostino_moduleconnexion");


if (isset($_POST['env']))
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $password = $_POST['password'];
  $login = $_POST['login'];
  $conf = $_POST['conf']; 


  if (!empty($nom) && !empty($prenom) && !empty($password) && !empty($login)) {
    if ($password == $conf) { 
      echo 'Compte créé';
      $req= mysqli_query($connect,"INSERT INTO utilisateurs (login,prenom,nom,password)
    VALUES('$login','$prenom','$nom','$password')");
    } else {echo 'Confirmer votre MDP';}

  } else {echo 'Tous les champs doivent être remplis';}

}
?>

  <?php require'header.php';?>
  
  <div class="form-inscription">
    <form action="" method="post">
    <?php 
      if (!empty($nom) && !empty($prenom) && !empty($password) && !empty($login)) {
      if ($password == $conf) { 
      echo 'Compte créé';
      }}?>
      <h1><center>Formulaire d'Inscription</center></h1>
      <input style="font-family: 'Indie Flower', cursive;" name="login" type="text" placeholder="Nom d'Utilisateur"  />
        <input style="font-family: 'Indie Flower', cursive;" name="prenom" type="text" placeholder="Prenom" />
        <input style="font-family: 'Indie Flower', cursive;" name="nom" type="text" placeholder="Nom" />
        <input style="font-family: 'Indie Flower', cursive;" name="password" type="password" placeholder="Mot de Passe"/>
        <input style="font-family: 'Indie Flower', cursive;" name="conf" type="password" placeholder="Confirmer Votre Mot de Passe" />
      <input style="font-family: 'Indie Flower', cursive;" name="env" type="submit" placeholder="soumettre">
      <p class="message">Vous avez déjà un compte ?   😮    <a href="connexion.php">Par ici</a></p>
    </form>
</div>  


  </body>
</html>