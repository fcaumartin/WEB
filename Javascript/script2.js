var toto = "123";




// var reponse = prompt(toto);

// if (reponse == null) {
// 	console.log("Annuler");
// }

// if (reponse == "") {
// 	console.log("OK");
// }

// console.log("[" + reponse + "]");


var b  = "4";
console.log(typeof(b));
b++;
console.log(typeof(b));

console.log("b=%s    %s    %s", b, "toto", 45);

var c = "2";

if (b == 5 || c == 2) {
	console.log("OK");
}

console.dir(parseInt(b/c));

console.dir(b%c);


var test = true;

var civ = "";

if (test == true) {
	civ = "M.";
}
else {
	civ = "Mme";
}

civ = test ? "M." : "Mme";

