<html>
  <head>
    
    <link rel="shortcut icon" href="images/favicon.PNG">
    <title>modification membre </title>
	<link href="css/style1.css" rel="stylesheet" type="text/css">
  
  <link href="css/formu.css" rel="stylesheet" type="text/css" />  
  <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link href="css1/animate.min.css" rel="stylesheet">
    <link href="css1/animate.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/myStyle.css"/>
  </head>
<body>
<br><br><BR>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="row">
        <div class="site-logo">
		 <a class="brand" href="index.html"><img src="images/logo.PNG" width="90px" height="35px" >  <!--<span>MIKHA</span>-->   </a>
          <a href="index.html" class="brand">AppReport</a>
        </div>
        

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        



        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><i class="fa fa-home"></i>ACCUEIL</a></li>
            <li><a href="insertion1.php"  target="blank"><span>AJOUT MEMBRE </span></a> </li>
           <!-- <li><a href="modification1.php"  target="blank"><span>Liste Membre </span></a> </li>
            <li><a href="index_rechercher.html"  target="blank"><span>Rechercher Materiel </span></a> </li>
            <li><a href="suppression1.php"  target="blank"><span>Suppression Membre </span></a> </li>
            <li><a href="formudemande.php"  target="blank">  Ecrire Demande </span></a> </li> -->
            <li><a href="AccueilMembre.php"> <i class="fa fa-lock"></i>DECONNEXION</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="modification1.php"><i class="fa fa-"></i>RETOUR</a></li>
          </ul>
        </div>
        <!-- /.Navbar-collapse -->
      </div>
    </div>
  </nav>
<?php
    require_once("conn.php");
    $req="SELECT * FROM utilisateur  ";
    
    $ps=$pdo->prepare($req);
    $ps->execute();
    $ps=$pdo->prepare($req) ;
        $requete =$ps->execute();
       // require_once("entete2.php");
 
  //affichage des donn�es:
   if($et=$ps->fetch()){ 
  
  ?>   <div class="main_principal">
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
      <td><input type="text" name="username" value=" <?php echo ($et['username']) ?>" required/></td></tr>
    
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
</form></div>
  <?php
  }//fin if 
  ?>
  
</body>
</html>
