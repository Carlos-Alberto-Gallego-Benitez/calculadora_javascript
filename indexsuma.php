<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma_Automatica</title>
</head>
<body>

<div class="form-row mt-5">    

<div class="form-group col-4">
<span>Valor #1</span>
<input type="text" id="txt_campo_1" onchange="sumar(this.value);" />
   
</div>

<div class="form-group col-4">
<span>Valor #2</span>
<input type="text" id="txt_campo_2" onchange="sumar(this.value);" />
</div>

<div class="form-group col-4">
<span>Valor #3</span>
<input type="text" id="txt_campo_3" onchange="sumar(this.value);" />
</div>


</div>  
<span>El resultado es: </span> <span id="spTotal"></span><br>

<script>

/* Sumar dos números. */
function sumar (valor) {
    
    var total = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
	
    total = document.getElementById('spTotal').innerHTML;
	
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
	
    /* Esta es la suma. */
    total = (parseInt(total) + parseInt(valor));
	
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}

</script>
    
</body>
</html>