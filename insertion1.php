<html>
  <head>
    <title>insertion de donn�es en PHP :: partie 1</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css">
	
	
	 <link href="css/formu.css" rel="stylesheet" type="text/css" />  
	         <link rel="shortcut icon" href="../favicon.ico" />  
			
			
			
			<script>
var idDivAffichee=null;
 
function afficheId(baliseId)
{
  if (idDivAffichee)
  {
    cacheId(baliseId);
  }
   if (idDivAffichee)
    cacheId(idDivAffichee);
   
  if (idDivAffichee==baliseId)
   {
      var show=false;
      idDivAffichee=null;
   }
    else
    {
      var show=true;
      idDivAffichee=baliseId;
    }
   
 
  if (show && document.getElementById && document.getElementById(baliseId) != null)
  {
     document.getElementById(baliseId).style.visibility='visible';
     document.getElementById(baliseId).style.display='block';
      
  }
}
 
function cacheId(baliseId)
{
  if (document.getElementById && document.getElementById(baliseId) !=  null)
  {
    document.getElementById(baliseId).style.visibility='hidden';
    document.getElementById(baliseId).style.display='none';
  }
}
</script>

<script>
function verif()
{
var val1   = document.getElementById("mdp").value,
    val2   = document.getElementById("mdp2").value,
    result = document.getElementById("result");
 
if(val1!=val2){
  result.innerHTML="<div align='right' style='margin:0 24 0 0 0;color:red;'>Mot de passe non conforme  !</div>";
}
else {
  result.innerHTML="<div align='right' style='margin:0 24 0 0 0;color:green;'>Mot de passe conforme  !</div>";
 }
 
	}

</script>
  </head>
  <body>
<div class="body1">
  <div class="main">
  
    <!--header 
	<div class="bannierefinal">  
	</div>
	-->
    <header>
	
      <div class="wrapper">
        <nav>
          <ul id="menu">
            <li class="active"><a href="index.php">Accueil</a></li>
            <li><a href="a propos.php">A Propos</a></li>
            
            <li><a href="controleur/membreResp.php">Connexion</a></li>
            
          </ul>
        </nav>
      </div>
	  
     
	  
    </header>
	</div>
	</div>
	
	
	
	    <!-- content -->
  <div class="main_principal">
  
            <!-- Codrops top bar -->
          
            <section>				
              
                    <div id="wrapper">
  

                            
							  <h1> INSCRIPTION </h1> 
<body>

<form name="insertion" action="insertion2.php" method="POST">

  <table  align="center" >
  <tr bgcolor='white'>
  
       
    
    
      
  
	  
    <p> 
                                    <label for="usernamesignup"  data-icon="u"  required="required">nom</label>
                                    <input id="usernamesignup"  name="nom" required="required" type="text" placeholder="nom" />
                                </p>
	  
	  <p> 
                                    <label for="usernamesignup"  data-icon="u"  required="required">username</label>
                                    <input id="usernamesignup"  name="username" required="required" type="text" placeholder="prenom" />
                                </p>
	  

	  
	  
    
    <p> 
                                    <label for="usernamesignup"  data-icon="u"  required="required">email</label>
                                    <input id="usernamesignup"  name="email" required="required" type="text" placeholder="email" />
                                </p>
    

	  
	  
	  <tr align="center">
	  <!--<td>pass</td>
      <td><input type="text" name="pass" required/></td></tr>-->
	  
	  
                                   <p>  <label for="passwordsignup" class="youpasswd" data-icon="p">mot  de passe</label>
                                    <input  name="mdp"  required="required"  id="mdp" required="required" type="password" placeholder="6 caracteres minimum"/></p>
                                
								
                                <p> 
                              <label for="passwordsignup_confirm"  data-icon="p"> confirmer mot de passe </label>
                                    <input  name="mdp2"  required="required"  id="mdp2" required="required" type="password"  onkeyup="verif();" placeholder="retaper mot de passe"/></p> 
                                
							
							

	 <!-- <p> 
                                    <label for="usernamesignup"    required="required">profil</label><br>
                                    <select id="usernamesignup"  name="profil" required="required" type="text" placeholder="profil" required/>
									
									
<option value="0">Choisissez profil</option>
<option name="armoire"  >Responsable classe</option>
<option name="a">Professeur</option><option name="3"  >ChefVigile</option>
<option name="a">Prestataire</option><option name="3"  >Agent Logistique</option>
<option name="3"  >ChefService</option></select>
                                </p>-->
								
								<p> 
                                    <label>Profil:<br></label><br>
          <select name="profil" required="required" >	
<option value="Professeur"> <a href='membreProf.php'></a> Professeur</option>		 		 
<option value="ChefVigile" onclick="javascript:afficheId('l2');" >ChefVigile</option>		 
<option value="Agent logistique" onclick="javascript:afficheId('l3');" >Agent logistique</option>		 
<option value="ChefService"onclick="javascript:afficheId('l4');">ChefService</option>         
<option value="Responsable de classe" onclick="javascript:afficheId('l5');">Responsable de classe</option> 
<option value="Prestataire"onclick="javascript:afficheId('l6');">Prestataire</option>          

</select>

                                </p>
    
	
  <p> <label > <div id="result"> </div> </label> </p>  
								
								 
                                <p class="signin button"> 
      <input type="submit" value="inserer"></p>
<!--<button <a href='listemembre.php','main'>Enregistrer</a></button><br><br>-->	  
	   
	  
    <p class="connexion">  
									
				
									Changer de mot de passe   <a href="../controleur/modification2.php" > Changer Mot de passe</a><br>

								</p>
                            </form>
                    
						
                    </div>
               
            </section>
			<br>

<br>
 <!--<div id="footer">
        <span>PAGE D'INSCRIPTION</span>
        </div>-->
        </div>
</body>
</html>
