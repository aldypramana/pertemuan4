<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST["txuser"])){
        $usr = $_POST["txuser"];
        if ($usr=="") {
    
        echo "<div><h3 style= 'color:purple;padding:5px;'>user name/ password belum diisikan</h3></div>";
    }
}
if(isset($_POST["txpaskey"])){
    $pwd = $_POST["txpaskey"];
    if ($pwd=="") {

    echo "<div><h3 style= 'color:purple;padding:5px;'>user name/ password  belum diisikan</h3></div>";
}
}
?>
    <form action="latihan2.php" method="POST">
        user Name
        <input type="text" id="txuser"name="txuser">
</div>

<div>

        password
        <input type="password" id="txpaskey" name="txpaskey">
</div>
        <button type="submit"> login </button>
       <a href="daftar.php"> Daftar </button>
</div>

</form>
</body>
</html>