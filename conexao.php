<?php
$host="localhost";
$user="root";
$senha="";
$banco="provainfor";

if($conexao=mysqli_connect($host,$user,$senha,$banco)){
    //*echo"conexao realizada com sucesso";
}
else{
    //*echo"erro";
}
?>