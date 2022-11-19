var peso = document.getElementById("peso")
var talla = document.getElementById("talla")

  

function imc()
{
  var p = peso.value 
  var t = talla.value
	var imc = new Number();
	
	imc = p/(t*t);
	if (imc<16) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en deficis energetico grado III.
      </div>`;
	}
	if (imc>=16 && imc<17) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en deficis energetico grado II.
      </div>`;
	}
	if (imc>=17 && imc<=18.4) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-warning" role="alert">
        Su indice de masa corporal esta en deficis energetico grado I.
      </div>`;
	}
	if (imc>18.5 && imc<20) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-info" role="alert">
        Su indice de masa corporal esta en normal bajo.
      </div>`;
	}
	if (imc>20 && imc<24) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-success" role="alert">
        Su indice de masa corporal esta en normal.
      </div>`;
	}
	if (imc>25 && imc<26.9) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-info" role="alert">
        Su indice de masa corporal esta en sobrepeso.
      </div>`;
	}
	if (imc>27 && imc<29.9) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-warning" role="alert">
        Su indice de masa corporal esta en preobesidad.
      </div>`;
	}
	if (imc>30 && imc<34.9) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en obesidad grado I.
      </div>`;
	}
	if (imc>35 && imc<39.9) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en obesidad grado II.
      </div>`;
	}
	if (imc>40 && imc<49.9) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en obesidad grado III.
      </div>`;
	}
	if (imc>=50) {
		document.getElementById("imc_detallado").innerHTML=`<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en obesidad grado IV.
      </div>`;
	}
}