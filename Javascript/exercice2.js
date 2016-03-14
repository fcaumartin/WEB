var nom;
var prenom;
var civilite;


nom = prompt("Entrez votre nom");

prenom = prompt("Entrez votre prénom");

civilite = confirm("Etes vous un homme ?");


if (civilite == true) {
	alert("Bonjour Monsieur " + nom + " " + prenom + "\n\nBienvenue sur notre site Web");
}
else {
	alert("Bonjour Madame " + nom + " " + prenom + "\n\nBienvenue sur notre site Web");
}
