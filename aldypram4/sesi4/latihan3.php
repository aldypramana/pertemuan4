<?php
$path ="upgambar/";
if(isset($_POST["uploadfile"])){
   if($_FILES ["flgambar"]["error"]==0){
    $flname =$path . basename ($_FILES ["flgambar"]["name"]);
    move_uploaded_file($_FILES["flgambar"]["tmp_name"], $flname);
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
</head>
<body>

   <?php
    if(isset($_POST["uploadfile"])){
    echo "<img src ='".$flname."'>";
}
?>

    <form action="latihan3.php" method="POST" enctype="multipart/form-data">
    
        <div>
        upload gambar 
        <input type ="file" name="flgambar">
</div>
<div>
    <input type="hidden" name="uploadfile" value="ok">
    <button type ="submit"> upload gambar</button>
</div>
    </form>
    
</body>
</html>