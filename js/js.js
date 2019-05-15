function validardeci(){
      var price=  /^\d*\.?\d*$/;
      var valor;
      valor= document.getElementById('txtPrice').value; 

      if(isNaN(valor)|| price.test(valor)){
      	return true;

      }
      else{
      	var messange="Ingrese un valor valido";
      }
 }

 function validarte(){
 	var texto = [a-zA-Z];
 	valor = document.getElementById('txtName').value;
 	if(texto.test(valor)){
 		return true;

 	}
 	else
 		return false;
 		var messange = "Ingrese una cadena de caracteres";
 		document.getElementById('texto').innerHTML=messange;
 }