<?php

include'funcion.php';

$numero=$_POST["numero"];



if(empty($numero]!=1){
    tabla_multiplicar($numero);
}else{
    echo "introduce un numero: ";
}
?>

<html>
<head>
</head>

<body>
<form action="index.php" method="post">
    <div>
        <label for="name">Nombre:</label>
        <input type ="text" id="name" name ="user_name">
    </div>
    <div class="button">
        <button type="submit">Enviar</button>
    </div>
</form>
</body>
</html>