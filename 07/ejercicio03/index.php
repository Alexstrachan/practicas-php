<?php

if(empty($_POST["user_name"]!=1){
    echo "Bienvenido a IAW: ".$_POST["user_name"];
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