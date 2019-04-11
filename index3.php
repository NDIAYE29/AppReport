<html>
 <head>
  <title>Membres</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <link href="css/style1.css" rel="stylesheet" type="text/css">
	<link href="css/formu.css" rel="stylesheet" type="text/css" />  
           <link rel="shortcut icon" href="images/favicon.png" /> 
           <link href="css1/bootstrap.min.css" rel="stylesheet">
           <link href="css/bootstrap.min.css" rel="stylesheet">
           
  
  <link rel="stylesheet" href="css1/font-awesome.min.css">
  <link href="css1/animate.min.css" rel="stylesheet">
  <link href="css1/animate.css" rel="stylesheet" />
  
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
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:100%;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
 </head>
 <body>
 
 <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="row">
        <div class="site-logo">
		 <a class="brand" href="index.html"><img src="images/logo.PNG" width="90px" height="35px" alt="AppReport">  <!--<span>MIKHA</span>-->   </a>
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
            <li><a href="enregistrementM.php"   target="blank"><i class="fa fa-male"></i><span>LISTE MATERIELS </span></a> </li>
           <!--<li><a href="formudemande.php"  target="blank">  Ecrire Demande </span></a> </li> -->
            <li><a href="AccueilMembre.php"> <i class="fa fa-lock"></i>DECONNEXION</a></li>
            
            <li><a href="enregistrementM.php"><i class="fa fa-edit"></i>RETOUR</a></li>
          </ul>
        </div>
        <!-- /.Navbar-collapse -->
      </div>
    </div>
  </nav>
 
 
  <div class="container box">
   <h1 align="center"></h1>
   <br />
   <div class="table-responsive">
    <br />
    <!--<div align="right">
     <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
    </div>-->
    <br /><br />
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th width="15%">Nom</th>
       <th width="15%">Prenom</th>
       <th width="25%">Email</th>
       <th width="20%">Profil</th>
	   <th width="10%">Edit</th>
       <th width="10%">Delete</th>
      </tr>
     </thead>
    </table>
    
   </div>
  </div>
 </body>
</html>

<div id="userModal" class="modal fade">
 <div class="modal-dialog">
 
  
            <!-- Codrops top bar -->
          
            				
              
                    <div id="wrapper">
  

                            
							  
  
  <form name="insertion" id="user_form" method="POST">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Ajout Membre</h4>
    </div>
    <div class="modal-body">
     <label for="usernamesignup"  data-icon="u"  required="required">nom</label>
       <input id="nom"  name="nom" required="required" type="text" placeholder="nom" />
     <br /><br>
     <label for="usernamesignup"  data-icon="u"  required="required">username</label>
       <input id="username"  name="username" required="required" type="text" placeholder="prenom" />
	 <br /><br>
     <label for="usernamesignup"  data-icon="u"  required="required">email</label>
         <input id="email"  name="email" required="required" type="text" placeholder="email" />
	 <br /><br>
	 <label for="passwordsignup" class="youpasswd" data-icon="p">mot  de passe</label>
 <input  name="mdp"  required="required"  id="mdp" required="required" type="password" placeholder="6 caracteres minimum"/>
 
	<label for="passwordsignup_confirm"  data-icon="p"> confirmer mot de passe </label>
 <input  name="mdp2"  required="required"  id="mdp2" required="required" type="password"  onkeyup="verif();" placeholder="retaper mot de passe"/>
                                
<p> <label > <div id="result"> </div> </label> </p> 					

     <label>Profil:<br></label><br>
          <select id="role" name="role" required="required" >	
          <option> Profil</option>	
<option value="Professeur principal"> <a href='membreProf.php'></a> Professeur principal</option>		 		 
<option value="Chef des vigiles" onclick="javascript:afficheId('l2');" >Chef des vigiles</option>		 
<option value="Agent logistique" onclick="javascript:afficheId('l3');" >Agent logistique</option>		 
<option value="Surveillant général"onclick="javascript:afficheId('l4');">Surveillant général</option>         
<option value="Responsable de classe" onclick="javascript:afficheId('l5');">Responsable de classe</option> 
<option value="Prestataire"onclick="javascript:afficheId('l6');">Prestataire</option>         

</select>

     <br />
     
    </div>
    <div class="modal-footer">
     <input type="hidden" name="user_fk" id="user_fk" />
     <input type="hidden" name="operation" id="operation" />
	 <p class="signin button"> 
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
     <input type="button" class="btn btn-default" data-dismiss="modal" value="close" /></p>
    </div>
	<p class="connexion">  
									
				
									Changer de mot de passe   <a href="index3.php" > Changer Mot de passe</a><br>

								</p>
   </div>
  </form>
 </div>
</div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#user_form')[0].reset();
  $('.modal-title').text("Add User");
  $('#action').val("Add");
  $('#operation').val("Add");
  
 });
 
 var dataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0, 3, 4],
    "orderable":false,
   },
  ],

 });

 $(document).on('submit', '#user_form', function(event){
  event.preventDefault();
  var nom = $('#nom').val();
  var username = $('#username').val();
  var email = $('#email').val();
  var mdp = $('#mdp').val();
  var role = $('#role').val();
  
  if(nom != '' && username != '' && email != '' && role != '' && mdp != '')
  {
   $.ajax({
    url:"insert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#user_form')[0].reset();
     $('#userModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.update', function(){
  var user_fk = $(this).attr("id");
  $.ajax({
   url:"fetch_single.php",
   method:"POST",
   data:{user_fk:user_fk},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('#nom').val(data.nom);
    $('#username').val(data.username);
	$('#email').val(data.email);
	$('#mdp').val(data.mdp);
    $('#role').val(data.role);
    $('.modal-title').text("Edit User");
    $('#user_fk').val(user_fk);
    
    $('#action').val("Edit");
    $('#operation').val("Edit");
   }
  })
 });
 
 $(document).on('click', '.delete', function(){
  var user_fk = $(this).attr("id");
  if(confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?"))
  {
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:{user_fk:user_fk},
    success:function(data)
    {
     alert(data);
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
 });
 
 
});
</script>
   
