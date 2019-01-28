<html>
<head>
    <title>Changer password</title>
	<link href="../css/formu.css" rel="stylesheet" type="text/css" />  
	
	        <link rel="shortcut icon" href="../favicon.ico"> 
					  





<script>
function verif()
{
var val1   = document.getElementById("pass").value,
    val2   = document.getElementById("pass2").value,
    result = document.getElementById("result");
 
if(val1!=val2){
  result.innerHTML="<div align='right' style='margin:0 24 0 0 0;color:red;'>Les deux mots de passe ne correspondent pas  !</div>";
}
else {
  result.innerHTML="<div align='right' style='margin:0 24 0 0 0;color:green;'> Les deux mots de passe  correspondent  </div>";
 }
 
	}

</script>

</head>
<body>
<div class="body1">
  <div class="main">
  
    <!--header -->
	<div class="bannierefinale">  
	</div>
	
    <header>
	
      <div class="wrapper">
        <nav>
          <ul id="menu">
         <li class="active"><a href="../index.php">Accueil</a></li>
            <li><a href="../A Propos.php">a propos</a></li>
            <li><a href="../controleur/AccueilMembre.php">Espace Membre</a></li>
            
          </ul>
        </nav>
      </div>
	  
     
	  
    </header>
	</div>
	</div>
	
	
	
	    <!-- content -->
  <div class="main_principal">
				
	<div class="container">
            <!-- Codrops top bar -->
          
            <section>				
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
              
                    <div id="wrapper">

                            <form name="insertion" action="insertionMot.php" method="POST"> 
                                <h1> Changer de mot de passe </h1> 
								                       <p> <label > <div id="result"> </div>  </label> </p>  

                                <p> 
                                    <label for="usernamesignup"  data-icon="u">Identifiant</label>
                                    <input id="usernamesignup"  name="idutilisateur"  type="text" placeholder="nom" required/>
                                </p>
								
							
								
								<p> 
                                    <label for="usernamesignup"  data-icon="u">pseudo</label>
                                    <input id="usernamesignup"  type="text" name="login" required="required" placeholder="login"  required/>
                                </p>	
								
								
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">mot  de passe</label>
                                    <input  name="pass"  required="required"  id="pass" required="required" type="password" placeholder="6 caracteres minimum" required/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm"  data-icon="p"> confirmer mot de passe </label>
                                    <input  name="pass2"  required="required"  id="pass2" required="required" type="password"  onblur="verif();" placeholder="retaper mot de passe"required/>
                                </p>  

								<p> 
                                    <label for="passwordsignup_confirm"  data-icon="p"> Nouveau Mot de passe </label>
                                    <input  name="pass3"  required="required"  id="pass3" required="required" type="password"   placeholder="nouveau mot de passe" required/>
                                </p>
								
								
                                <p class="signin button"> 
									<input type="submit" value="inserer"  name="inserer"/> 
								</p>
                                <p class="">  
									Deja Membre ?
									<a href="../controleur/AccueilMembre.php" > Connexion</a>
								</p>
                            </form>
                    
						
                    </div>
               
            </section>
        </div>
			<br>
		<br>
<div id="footer">
        <span><br>ESPACE MEMBRE</span>
        </div>
        </div>
</body>
</html>

			
						 