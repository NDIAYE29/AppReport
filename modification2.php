<html>
  <head>
    <title>modification de donn�es en PHP :: partie2</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css">
  </head>
<body>
<?php
    require_once("conn.php");
    $req="SELECT * FROM utilisateur  ";
    $ps=$pdo->prepare($req);
    $ps->execute();
    $ps=$pdo->prepare($req) ;
        $requete =$ps->execute();
 
  //affichage des donn�es:
   if($et=$ps->fetch()){ 
  
  ?> 
<form name="insertion" action="modification3.php" method="POST">
  <input type="hidden" name="id" value="<?php echo ($et['id']) ;?>">
  <table border="1" align="center" width="65%" height="90%" cellspacing="4" cellpadding="4">
  <tr bgcolor='white'>
  
       <td align=center colspan=9><h2> MODIFICATION MEMBRE </td>
    
    
      </tr>
    <tr align="center">
      <td>nom</td>
      <td><input type="text" name="nom" value=" <?php echo ($et['nom']) ?>" required/></td></tr>
    
    <tr align="center">
      <td>username</td>
      <td><input type="text" name="username" value=" <?php echo ($et['username']) ?>" required/></td>
    
    <tr align="center">
      <td>email</td>
      <td><input type="text" name="email" value="<?php echo ($et['email']) ?>" required/></td></tr>
    
    <tr align="center">
      <td>mot de passe</td>
      <td><input type="text" name="mdp" value="<?php echo ($et['mdp']) ?>" required/></td></tr>
    
    <tr align="center">
      <td>profil</td>
      <td><input type="text" name="role" value=" <?php echo ($et['role']) ?>" required/></td></tr>
	  

    
    <tr align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>
	  
    </tr>
  </table>
</form>
  <?php
  }//fin if 
  ?>
</body>
</html>
