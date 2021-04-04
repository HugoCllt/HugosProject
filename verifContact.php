<?php
   @$nom=$_POST["fnom"];
   @$prenom=$_POST["fprenom"];
   @$email=$_POST["femail"];
   @$datec=$_POST["fdatec"];
   @$genre=$_POST["fgenre"];
   @$dateN=$_POST["fdateN"];
   @$job=$_POST["fjob"];
   @$sujet=$_POST["fsujet"];
   @$contenu=$_POST["fcontinu"];
   @$valider=$_POST["valider"];
   
   if(isset($valider)){
      if(empty($nom))
         $message='<div class="erreur">Nom laissé vide.</div>';
      elseif(empty($prenom))
         $message='<div class="erreur">Prénom laissé vide.</div>';
      elseif(empty($email))
         $message='<div class="erreur">Email laissé vide.</div>';
      elseif(empty($pass))
         $message='<div class="erreur">Mot de passe laissé vide.</div>';
      elseif($pass!=$repass)
         $message='<div class="erreur">Les mots de passe ne sont pas identiques.</div>';
      else{
         $message='<div class="rappel"><b>Rappel:</b><br />';
         $message.=$civilite.' '.ucfirst(strtolower($prenom)).' '.strtoupper($nom).'<br />';
         $message.='Email: '.$email;
         $message.='</div>';
      }
   }

   $monfichier = fopen('donneesform.txt', 'a+');
	fputs($monfichier, "==================================\n"); 
	fputs($monfichier, $nom."\n"); 
	fputs($monfichier, $prenom."\n");
   fputs($monfichier, $email."\n");
   fputs($monfichier, $datec."\n");
   fputs($monfichier, $dateN."\n");
   fputs($monfichier, $job."\n");
   fputs($monfichier, $sujet."\n");
   fputs($monfichier, $contenu."\n");
   
	fclose($monfichier);

   //redirection page d'accueil
   header('Location: index.php');
   exit();


?> 