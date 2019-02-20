$(document).ready(function() {

	$("#step1").click(function() {
		$("#data_step_one").show();
		$("#data_step_two").hide();
  
	});

	$("#step2").click(function() {
		$("#data_step_one").hide();
		$("#data_step_two").show();
	});

});//end Document ready

function chechFormOne(){

	var fname = $("#fName").val();
	var lname = $("#lName").val();
	var email = $("#email").val();
	var phone = $("#pNumber").val();
	var company = $("#cName").val();

	var validaName = /[A-Za-z]/;
	var mensaje = "";
	var es_valido = true;

	if (fname == "") {
		mensaje = "Without First Name!";
		es_valido = false;
	}else if(fname.length < 4){
		mensaje = "Small First Name!";
		es_valido = false;
	}else if(!validaName.test(fname)){
		mensaje = "Check Firs Name!";
		es_valido = false;
	}else if (lname == "") {
		mensaje = "Without Last Name!";
		es_valido = false;
	}else if(lname.length < 4){
		mensaje = "Small Last Name!";
		es_valido = false;
	}else if(!validaName.test(lname)){
		mensaje = "Check Last Name!";
		es_valido = false;
	}else if(!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test(email))) {
		mensaje = "Invalid Email!";
  		es_valido = false;
	}else if(isNaN(phone)) {
  		mensaje = "Check the phone number!";
  		es_valido = false;
	}else if(phone == "") {
  		mensaje = "Check the phone number!";
  		es_valido = false;
	}else if (company == "") {
		mensaje = "Without Company Name!";
		es_valido = false;
	}else if(company.length < 3){
		mensaje = "Small Company Name!";
		es_valido = false;
	}else if (!$('#checkT').prop('checked')) {
		mensaje = "Accept terms!";
		es_valido = false;
	}



	if (es_valido) {
		return 1;
	}else{

		return mensaje;
		//$("#resultado").html("<span>***"+mensaje+"***</span>");
	}


}//end chechForm()

function chechFormTwo(){

}


function stepOne(){

	verificardor = chechFormOne();

	if (verificardor == 1) {
		$("#data_step_one").hide();
		$("#data_step_two").show();
	}else{
		$("#resultado").html("<span>***"+verificardor+"***</span>");
	}

}


function stepTwo(){

	verificardor = chechFormTwo();

	if (verificardor == 1) {
		//SentPayment();
		alert(verificardor);
	}else{
		$("#resultado").html("<span>***"+verificardor+"***</span>");
	}

}

function SentPayment(){

	verificardor_one = chechFormOne();
	verificardor_two = chechFormTwo();

	if (verificardor_one == 1 && verificardor_two == 1) {

	var fname = $("#fName").val();
	var lname = $("#lName").val();
	var email = $("#email").val();
	var phone = $("#pNumber").val();
	var company = $("#cName").val();



	}

}




