<!DOCTYPE html>
<html lang="pt-br">
    <div>
        <style>
            body{margin-left: 530px;margin-top: 50px;}
        </style>
    </div>
</html>

<?php

$titulo = $_POST['titulo'];
$sub_titulo = $_POST['sub_titulo'];
$noticia = $_POST['noticia'];

json_encode("noticias/noticia.json");

?>

<div align="left">
    <h1><font face="Arial" color="#515150">
<?php echo $titulo."<br>";?></font></div></h1>


<div align="left">
    <h2><font face="Arial" color="#4c651b">
<?php echo $sub_titulo."<br>";?></font></div></h2>


<?php $noticia = nl2br($noticia);?>
<div align="left">
    <div><font face="Arial" color="#666665">
<?php echo $noticia;?></font></div>
