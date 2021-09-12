  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>calculadora</title>
      <link rel="stylesheet" href="/javascript.js">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">         
  </head>
  <body>

  <div class="form-row mt-5">    

            <div class="form-group col-3 text-center">
            <label for="" > Valor 1</label>
            <input type="text" id="txt_campo_1" class="form-control text-center ml-5" onchange="sumar(this.value);" />
               
            </div>

            <div class="form-group col-2 ml-5">
           <label for="">Operación</label>
           <select class="form-control text-center " id="opcion"  >
                <option value="">...</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
             </select>

            </div>

            <div class="form-group col-3 text-center">
            <label for="">Valor 2</label>
            <input type="text" class="form-control ml-1 text-center" id="txt_campo_3" onchange="sumar(this.value);" />
            </div>

      
        </div>  
        <input type="hidden" id=result>
        <div class="ml-5">
        <font class="mr-5"color="Gray" id="alerta"><p class="ml-5 text-center" id="alerta"></p></font>
        </div>
        
        <div class="form-row">
          <div class="form-group col-8 ml-5">
          
          
             <input type="number" name="" disabled class="form-control text-center mt-4" id="spTotal">
        
           </div>
        </div>
       

        <script>

        function sumar (valor) {

            var total = 0;	
            valor = parseInt(valor); // Convertir el valor a un entero (número).
	    
            total = document.getElementById('result').value;

            

            // con esta linea campturo que operación desea hacer
            var opc = document.getElementById('opcion').value;

            if (opc == "") {
                 //envio el primer valor a un input hidden para luego traerlo devuelta en el proximo condicional
                document.getElementById('result').value = valor;
                document.getElementById('alerta').innerHTML = "Recuerde seleccionar el tipo de operación y agregar el segundo valor";//para mostrar mensaje
            }
            else if(opc == "+"){//con este condicional indico que va hacer según el signo seleccionado,  al igual que los demas condicionales
                total = (parseInt(total) + parseInt(valor));
                document.getElementById('spTotal').value = total;
                document.getElementById('alerta').innerHTML = "Su resultado debajo";
            }
            else if(opc == "-"){
                total = (parseInt(total) - parseInt(valor));
                document.getElementById('spTotal').value = total;
                document.getElementById('alerta').innerHTML = "Su resultado debajo";

            }
            else if(opc == "*"){
                total = (parseInt(total) * parseInt(valor));
                document.getElementById('spTotal').value = total;
                document.getElementById('alerta').innerHTML = "Su resultado debajo";
            }
            else if(opc == "/"){
                total = (parseInt(total) / parseInt(valor));
                document.getElementById('spTotal').value = total;
                document.getElementById('alerta').innerHTML = "Su resultado debajo";
            }
            
            
	
        }        
        
        </script>
      
  </body>
  </html>