var a = "2";
var b = "3";

if (a=="2") {
	console.log("OK");
}
else {
	console.log("NOK");
}

for(var i=0; i<10; i++) {
	console.log(i);
}

while(b<10) {
	console.log(b);
	b++;
}



//console.log(parseInt(a)+parseInt(b));




var lbl = document.getElementById("label1");

lbl.innerHTML="<strong>coucou</strong>";
lbl.style.display="none";
