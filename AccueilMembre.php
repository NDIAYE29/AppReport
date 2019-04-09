
  
<?php
/*$host='localhost';
$user='root';
$password="";
$db="demo";*/

require_once("conn.php");
//mysqli_select_db($db);
if(isset($_POST['submit'])){
$email=htmlspecialchars($_POST['username']) ;
$mdp=htmlspecialchars($_POST['mdp']);  
//$profil=htmlspecialchars($_POST['profil']);
$req="select * from utilisateur where email = '$email' and mdp = '$mdp'  ";
//$result=mysqli_query($db,$sql);
$ps=$pdo->prepare($req);
//var_dump($ps);
//var_dump($ps->fetch());
$ps->execute();
if($result=$ps->fetch()){
	if($result){
	   session_start();
	   $_SESSION["auth"]=$result;
	   var_dump($_SESSION["auth"]);
	   var_dump($_SESSION["auth"]["role"]);
	   $_SESSION["auth"]["id"];
	   switch($_SESSION["auth"]["role"]){
		   case "ChefService";
		   case "Agent logistique";
		   
		   header('location:enregistrementM.php');
		   break;
		   case "Responsable de classe";
		   case "Professeur principal";
		   case "Chef des vigiles";
		   case "Surveillant général";
		   header('location:Csignal.php');
		   break;
		   case "Prestataire":
		   header('location:formuprestataire.php');
	   }
	
		
	}
	else
	{
		header('location:AccueilMembre.php?error=1');
	
exit();
}

}
}
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.PNG">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>AppReport</title>
<!--<title>Connexion</title>-->


<link href="css/styles.css" rel="stylesheet">
<link href="LoginCss/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.PNG">
<link href="css/style1.css" rel="stylesheet" type="text/css">


<link href="css1/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="css1/font-awesome.min.css">
  <link href="css1/animate.min.css" rel="stylesheet">
  
  
  


        

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
 <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="row">
        <div class="site-logo">
		 <a class="brand" href="index.html"><img src="images/logo.PNG" width="90px" height="35px">   </a>
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
            
            <li><a href="index.php">Retour</a></li>
          </ul>
        </div>
        <!-- /.Navbar-collapse -->
      </div>
    </div>
  </nav>
<body>
	<br><br><br>	
		
			<div class="login-panel panel panel-default">
				<div class="box" style="height: 420px;">
						<?php
if (isset($_GET['error']))
{
		echo '<div class="alert bg-danger" role="alert" style="width: 100%;
    height: 50px;">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> le nom ou le mot de passe est incorrecte! <a  class="pull-right" aria-hidden="true"></a>
        </div>' ;

}?>

  
  <div id="login">
		  <center>
  <h1 id="header">Se Connecter 
<form method="POST" enctype="multipart/form-data">
<h5 > <img src="images2/identifi.jpg"  width=140 height=70> </h5></h1>
<!--<div class="group">      
      <select class="inputMaterial" type="text" name="profil" required>
      <span class="highlight"></span>
      <span class="bar"></span>	
<option> Profil</option>
<option value="Professeur"> <a href='membreProf.php'></a> Professeur</option>		 		 
<option value="ChefVigile" onclick="javascript:afficheId('l2');" >ChefVigile</option>		 
<option value="Agent logistique" onclick="javascript:afficheId('l3');" >Agent logistique</option>		 
<option value="ChefService"onclick="javascript:afficheId('l4');">ChefService</option>         
<option value="Responsable de classe" onclick="javascript:afficheId('l5');">Responsable de classe</option> 
<option value="Prestataire"onclick="javascript:afficheId('l6');">Prestataire</option>          

</select><br><br>

     <h5> identification</h5>
	<input type="text" name="identif" placeholder="identification" id="identification" required="required"></input>-->
	
	</center>
	
	<div class="group">  
<input class="inputMaterial" type="text" name="username" placeholder="" required/>
<span class="highlight"></span>
      <span class="bar"></span>
	  <label>Utilisateur</label>
</div>

<div class="group"> 
<input class="inputMaterial" type="password" name="mdp" placeholder="" required/>
<span class="highlight"></span>
      <span class="bar"></span>
	  <label>Mot de passe</label>
</div>

<center>

<input type="submit" name="submit" value="Connexion" class="btn_login"/> 
</center>
</form>
<div id="footer-box" ><p class="footer-text"> <span class="sign-up" > Mot de passe oublier?</span> /<!-- <a href="inscrire.php">--><span class="sign-up" > S'inscrire</span></p></div>
</div>
</div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
