$(document).ready(function() {

	var magic = Math.floor(Math.random()*100)+1;
	console.log(magic);

	$("#btn1").click(function () {
		if ( $("#txtBox1").val() > magic ) {
			$("#label1").html("Trop grand");
		}
		if ( $("#txtBox1").val() < magic ) {
			$("#label1").html("Trop petit");
		}
		if ( $("#txtBox1").val() == magic ) {
			$("#label1").html("Cool");
		}


	});
	

});