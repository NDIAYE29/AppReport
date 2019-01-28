<!-- <?php
				
				echo "<center>"	;	
				

		echo "<h4>Veuillez S'identifier!</h4> ";
		
		echo" <a href='membreResp.php'> Responsable classe &nbsp;&nbsp;  </a>";
			echo"<tr align='middle'>";
			echo "<a href='membreProf.php'>  Professeur &nbsp;&nbsp; </a>";
		
		
				   echo" <a href='membreAgent.php'> Agent Logistique &nbsp;&nbsp;</a>"; 
				   echo"<tr align='middle'>";
			echo " <a href='membreChefservice.php'>  Chef Servive &nbsp;&nbsp;</a>";
		
		
		
		echo "     <a href='membreChefvigile.php'>Chef Vigile &nbsp;&nbsp;</a>";
		echo"<tr align='middle'>";
echo " <a href='membrePrestataire.php'>Prestataire &nbsp;&nbsp;</a> "; echo "</center>";
		
?> -->
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
$profil=htmlspecialchars($_POST['profil']);
$req="select * from utilisateur where email = '$email' and mdp = '$mdp' and role= '$profil' ";
//$result=mysqli_query($db,$sql);
$ps=$pdo->prepare($req);
var_dump($ps);
var_dump($ps->fetch());
$ps->execute();
if($result=$ps->fetch()){
	if($result){
	   session_start();
	   $_SESSION["auth"]=$result;
	   var_dump($_SESSION["auth"]);
	   var_dump($_SESSION["auth"]["role"]);
	   $_SESSION["auth"]["id"];
	   switch($_SESSION["auth"]["role"]){
		   case "Agent logistique";
		   header('location:enregistrementM.php');
		   break;
		   case "Agentlogistique";
		   header('location:formuAgentLog.php');
		   break;
		   case "Responsable de classe";
		   case "Professeur";
		   case "ChefVigile";
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
<html>
<head>
    <title>Connexion</title>
   <link href="css/membre.css" rel="stylesheet" type="text/css" /> 
<link href="css/styles.css" rel="stylesheet">
  
	

<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">#menu a, .bg, .bg2, #ContactForm a {behavior:url("../js/PIE.htc")}</style>
<![endif]-->
</head>
<body>
<div class="body1">
  <div class="main">
  
    <!--header 
	<div class="bannierefinal">  
	</div>-->
	
	</div>
	</div>
	    <!-- content -->
  <div class="main_principal">
   
<div class="">
	<br>
	<span style='float:right; color:blue;font-size:16px;margin-right:20' > Accueil </span>  
 
	<a href='index.php'> <br><img src='images2/acc.jpg' width=40 height=40 style='float:right;'> 
	</a>
   </div>  
<?php
if (isset($_GET['error']))
{
echo "<center>";
		echo '<div class="alert bg-danger" role="alert" style="width: 38%;
    height: 50px;" align="center">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> login ou  mot de passe est incorrecte! <a  class="pull-right" aria-hidden="true"></a>
        </div>' ;
		echo "</center>";

}?>   
		  <div id="login">
		  
  <h1 id="header">Login</h1>
<form method="POST" enctype="multipart/form-data">
<h5 > <img src="images2/identifi.jpg"  width=140 height=100> </h5>
<select name="profil" required="required" >	
<option value="Professeur"> <a href='membreProf.php'></a> Professeur</option>		 		 
<option value="ChefVigile" onclick="javascript:afficheId('l2');" >ChefVigile</option>		 
<option value="Agent logistique" onclick="javascript:afficheId('l3');" >Agent logistique</option>		 
<option value="ChefService"onclick="javascript:afficheId('l4');">ChefService</option>         
<option value="Responsable de classe" onclick="javascript:afficheId('l5');">Responsable de classe</option> 
<option value="Prestataire"onclick="javascript:afficheId('l6');">Prestataire</option>          

</select>

    <!--<h5> identification</h5>
	<input type="text" name="identif" placeholder="identification" id="identification" required="required"></input>-->
	<div class="form_input">
	<h5> login</h5>
<input type="text" name="username" placeholder="username" required/>
</div>
<div class="form_input">
<h5> password</h5>
<input type="password" name="mdp" placeholder="password" required/>
</div>

<input type="submit" name="submit" value="connexion" class="btn_login"/>

</form>
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


 
