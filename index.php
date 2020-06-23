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
    </script>
</body>
</html>