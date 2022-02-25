function validaciones(){
var numero;
numero = document.getElementById("numero").value;
	if (if (txtnombre === ""){
		alert("El campo esta vacio");	
		return false;
	}
	else if (isNaN(numero)) {
		alert("El valor ingresado no es un numero");	
		return false;
	}
}