<!DOCTYPE html>
<!-- Por Marcos Fernandez -->
<html lang="es">
<<<<<<< HEAD

=======
>>>>>>> 977dfd5b4de01076ac7ead6861633d4824d1faad
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Digito Verificador Rut</title>
</head>
<<<<<<< HEAD

<body>
    <style type="text/css">
        .boton_personalizado {
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 15px;
            color: #ffffff;
            background-color: #1883ba;
            border-radius: 6px;
            border: 2px solid #0016b0;
        }

        .contenido {
            background-color: #fafafa;
            margin: 1rem;
            margin-top: 15%;
            padding: 1rem;
            border: 2px solid #ccc;
            /* IMPORTANTE */
            text-align: center;
            border-radius: 10px;
        }

        .titulo {
            font-size: 50px;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
        }

        .verificador {
            font-size: 25px;
            width: 17px;
            border: 0.5px solid red;
            border-radius: 4px;
            font-weight: bold;
        }

        .msgError {
            color: red;
        }

        .rut {
            font-size: 25px;
        }
    </style>

    <div class="contenido">
        <label class="titulo">Calcula Dígito Verificador</label>
        <br><br><br>
        <label><b>Inserte el rut: <b /></label>
        <input type="text" class="rut" id="rut" placeholder="EJ: 12345678" required>
        <label><b>-</b></label>
        <input class="verificador" type="text" id="verificador" width="1%" disabled>
        <br><br>
        <input class="boton_personalizado" type="submit" name="" value="Calcular" id="calcular" onclick="digitoVer();">
        <br><br>
        <label class="msgError" id="msgError"><b><b /></label>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</body>

</html>

<script>
    function digitoVer() {

        if (document.getElementById('rut').value == "") {
            document.getElementById('msgError').innerHTML = "Error: No puede quedar el campo vacío.";
            document.getElementById('verificador').focus();
            return false;
        } else {
            document.getElementById('msgError').innerHTML = "";
        }

        setFormato();
        soloNumero(document.getElementById('verificador'));
        


        var param = {
            rut: document.getElementById("rut").value
=======
<body>
<style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 15px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }

  .contenido {
  background-color: #fafafa;
  margin: 1rem;
  margin-top: 15%;
  padding: 1rem;
  border: 2px solid #ccc;
  /* IMPORTANTE */
  text-align: center;
}

.titulo {
    font-size: 50px;
    font-weight: bold;
    font-family: 'Courier New', Courier, monospace;
}

.verificador {
    width: 7px;
    border: 0.5px solid red;
    border-radius: 4px;
    font-weight: bold;
}
</style>

<div class="contenido">
    <label class="titulo">Verifica tu RUT</label>
    <br><br><br>
    <label><b>Inserte el rut: <b/></label>
    <input type="text" id="rut">
    <label>-</label>
    <input class="verificador" type="text" id="verificador" width="1%" disabled>
    <br><br>
    <input class="boton_personalizado" type="submit" name="" value="Calcular Dígito Verificador" id="calcular" onclick = "digitoVer();">
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
    function digitoVer(){
        if(document.getElementById('rut').value == ""){
            alert("No puede quedar el campo vacío.");
            document.getElementById('verificador').focus();
            return false;
        }


        var param = {
        rut: document.getElementById("rut").value        
>>>>>>> 977dfd5b4de01076ac7ead6861633d4824d1faad
        };

        $.ajax({
            data: param,
            url: "command.php",
            method: "post",
            success: function(data) {
                document.getElementById('verificador').value = data;
            }
        });
    }
<<<<<<< HEAD

    function setFormato() {
        document.getElementById('rut').value = document.getElementById('rut').value.replace(/[.]/g, '');
    }

    function soloNumero(inputtxt) {
        var numbers = /^[0-9]+$/;
        inputtxt.value = document.getElementById('rut').value;
        if (inputtxt.value.match(numbers)) {
            document.getElementById('msgError').innerHTML = "";
        } else {
            document.getElementById('msgError').innerHTML = "Error: Por favor, ingrese solo caracteres numéricos.";
            document.getElementById('verificador').value = "";
            document.getElementById('rut').value = "";
            document.getElementById('rut').focus();
            return false;
        }
    }
</script>
=======
    </script>
</body>
</html>
>>>>>>> 977dfd5b4de01076ac7ead6861633d4824d1faad
