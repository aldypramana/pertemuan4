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
    if(isset($_GET["txuser"])){
        $usr = $_GET["txuser"];
        if ($usr=="") {
    
        echo "<div><h3 style= 'color:purple;padding:5px;'>user name belum diisikan</h3></div>";
    }
}
    
    ?>
    <form action="latihan1.php" method="GET">
        user Name
        <input type="text" id="txuser"name="txuser">
</div>

<div>

        password
        <input type="password" id="txpaskey" name="txpaskey">
</div>
        <button type="submit"> login </button>
       <a href="latihan2.php"> Daftar </button>
</div>

</form>
</body>
</html>