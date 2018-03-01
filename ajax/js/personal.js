
		function semFoto()
		{


			document.getElementById("validatedCustomFile").required=false;
			document.getElementById("escolha").style.visibility = 'hidden';
			document.getElementById("validatedCustomFile").value="";   

    // $("#validatedCustomFile").replaceWith($("#validatedCustomFile").clone());
    $("#preview").css('display', 'none').attr('src', '');


}
function comFoto()
{
	document.getElementById("validatedCustomFile").required=true;
	document.getElementById("escolha").style.visibility = 'visible';
    // $("#validatedCustomFile").clone().replaceWith($("#validatedCustomFile"));
    $("#preview").css('display', 'block').attr('src', '');
}
function caixinhacom(){
	comFoto();
	document.getElementById("customControlValidation2").checked=true;   


}
function caixinhasem(){
	semFoto();
	document.getElementById("customControlValidation3").checked=true;   


}

	var reader = new FileReader();



	function semFoto()
	{

		document.getElementById("preview").style.height = "0px";
		document.getElementById("validatedCustomFile").required=false;
		document.getElementById("escolha").style.visibility = 'hidden';
		document.getElementById("validatedCustomFile").value="";   

    // $("#validatedCustomFile").replaceWith($("#validatedCustomFile").clone());
    $("#preview").css('display', 'none').attr('src', '');


}
function zerar()
{

	document.getElementById("preview").style.height = "0px";
	document.getElementById("validatedCustomFile").value="";   

    // $("#validatedCustomFile").replaceWith($("#validatedCustomFile").clone());
    $("#preview").css('display', 'block').attr('src', '');


}
function comFoto()
{
	document.getElementById("validatedCustomFile").required=true;
	document.getElementById("escolha").style.visibility = 'visible';
    // $("#validatedCustomFile").clone().replaceWith($("#validatedCustomFile"));
    $("#preview").css('display', 'block').attr('src', '');
}


document.getElementById("validatedCustomFile").onchange = function () {

	document.getElementById("preview").style.height = "150px";
	reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
