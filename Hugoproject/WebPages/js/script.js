


function validateForm(){

	let validation = true;

	let nom = document.forms["Form1"]["fnom"].value;
	let nomErrRouge =document.getElementById('fnom');

	let prenom = document.forms["Form1"]["fprenom"].value;
	let prenomErrRouge =document.getElementById('fprenom');

	let dateC = document.forms["Form1"]["fdatec"].value;
	let dateCErrRouge =document.getElementById('fdatec');

	let email = document.forms["Form1"]["femail"].value;
	let emailErrRouge =document.getElementById('femail');

	let genre = document.forms["Form1"]["fgenre"].value;

	let dateN = document.forms["Form1"]["fdateN"].value;
	let dateNErrRouge =document.getElementById('fdateN');

	let metier = document.forms["Form1"]["fjob"].value;
	let metierErrRouge =document.getElementById('fjob');

	let sujet = document.forms["Form1"]["fsujet"].value;
	let sujetErrRouge =document.getElementById('fsujet');

	let contenu = document.forms["Form1"]["fcontenu"].value;
	let contenuErrRouge =document.getElementById('fcontenu');








	if (nom == "") {
		document.getElementById("nomErr").innerHTML = "Le champs ne doit pas etre vide";
	  	nomErrRouge.classList.add("bordure-Rouge");
		validation = false;
	}
	if (nom != "") {
		document.getElementById("nomErr").innerHTML = "";
		nomErrRouge.classList.remove("bordure-Rouge");
	}


	if (prenom == "") {
		document.getElementById("prenomErr").innerHTML = "Le champs ne doit pas etre vide";
		prenomErrRouge.classList.add("bordure-Rouge");
		validation = false;
	}
	if (prenom != "") {
		document.getElementById("prenomErr").innerHTML = "";
		prenomErrRouge.classList.remove("bordure-Rouge");
	}


	if (dateC == "") {
		document.getElementById("datecErr").innerHTML = "Le champs ne doit pas etre vide";
		dateCErrRouge.classList.add("bordure-Rouge");
		validation = false;
	}
	if (dateC != "") {
		document.getElementById("datecErr").innerHTML = "";
		dateCErrRouge.classList.remove("bordure-Rouge");
	}


	if (email == "") {
		document.getElementById("emailErr").innerHTML = "Le champs ne doit pas etre vide";
		emailErrRouge.classList.add("bordure-Rouge");
		validation = false;
	}
	if (email != "") {
		document.getElementById("emailErr").innerHTML = "";
		emailErrRouge.classList.remove("bordure-Rouge");
	}


	if (genre == "") {
		document.getElementById("genreErr").innerHTML = "Le champs ne doit pas etre vide";
		validation = false;
	}
	if (genre != "") {
		document.getElementById("genreErr").innerHTML = "";
	}


	if (dateN == "") {
		document.getElementById("dateNErr").innerHTML = "Le champs ne doit pas etre vide";
		dateNErrRouge.classList.add("bordure-Rouge");
		validation = false;
	}
	if (dateN != "") {
		document.getElementById("dateNErr").innerHTML = "";
		dateNErrRouge.classList.remove("bordure-Rouge");
	}


	if (metier == "") {
		document.getElementById("metierErr").innerHTML = "Le champs ne doit pas etre vide";
		metierErrRouge.classList.add("bordure-Rouge");
		validation = false;
	}
	if (metier != "") {
		document.getElementById("metierErr").innerHTML = "";
		metierErrRouge.classList.remove("bordure-Rouge");
	}


	if (sujet == "") {
		document.getElementById("sujetErr").innerHTML = "Le champs ne doit pas etre vide";
		sujetErrRouge.classList.add("bordure-Rouge");
		validation = false;
	}
	if (sujet != "") {
		document.getElementById("sujetErr").innerHTML = "";
		sujetErrRouge.classList.remove("bordure-Rouge");
	}


	if (contenu == "") {
		document.getElementById("contenuErr").innerHTML = "Le champs ne doit pas etre vide";
		contenuErrRouge.classList.add("bordure-Rouge");
		validation = false;
	}
	if (contenu != "") {
		document.getElementById("contenuErr").innerHTML = "";
		contenuErrRouge.classList.remove("bordure-Rouge");
	}


	if(validation === false){
		document.getElementById("subErr").innerHTML = "Veuillez saisir toutes les informations";
		return false;
	}else{
		alert("Formulaire envoyé avec succès !");
		return true;

	}

}