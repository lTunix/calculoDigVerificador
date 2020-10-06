<!DOCTYPE html>
<!-- Por Marcos Fernandez -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Digito Verificador Rut</title>
</head>

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
