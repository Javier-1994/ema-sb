<?php 
session_start();
if(isset($_SESSION['usuario'])&&(($_SESSION['tipo']=='1') || ($_SESSION['tipo']=='3'))&&($_SESSION['estado'])) {  
 ?>
<?php
$option=$_POST['option'];

if($option=='1'){
echo "<div class='box-primary'>";
echo "<div class='box-header with-border'>";
echo "<h4 class='box-title'>Selecciona las fechas.</h4>";
echo "</div>";

echo "<div class='box-body'>";
 echo "<div class='form-group'>";
 echo "<label>Fechas:</label>";
 echo "<div class='input-group'>";
 echo "<button class='btn btn-default pull-left' id='daterange-btn'>";
 echo "<i class='fa fa-calendar'></i> Click para seleccionar.";
 echo "<i class='fa fa-caret-down'></i>";
 echo "</button>";
 echo "</div>";
 echo "<span class='fe'></span>";
 echo "<input type='hidden'  class='form-control' id='fi' value=''>";
 echo "<input type='hidden'  class='form-control' id='ff' value=''>";
 echo "</div>";
echo "</div>";

echo "<div class='box-footer'>";
echo "<button class='btn btn-primary pull-right' onclick='busca_venta_fecha();' id='btn-busca'><i class='fa fa-search'></i> Buscar...</button>";
echo "</div>";

echo "</div>";
}

if($option=='2'){
 echo "<div class='box-primary'>";
echo "<div class='box-header with-border'>";
echo "<h4 class='box-title'>Ingresa el numero de Pedido.</h4>";
echo "</div>";

echo "<div class='box-body'>";
echo "<form class='form-horizontal'>";

   echo "<div class='form-group'>";
   echo "<label for='numero_ticket' class='col-sm-3 control-label'>Numero de Factura Venta:</label>";
   echo "<div class='col-sm-2'>";
   echo "<input type='text' class='form-control' id='numero_ticket'>";
   echo "</div>";
   echo "</div>";
 echo "</form>";
echo "</div>";

echo "<div class='box-footer'>";
echo "<button class='btn btn-primary pull-right' onclick='busca_venta_numero();' id='btn-busca'><i class='fa fa-search'></i> Buscar...</button>";
echo "</div>";

echo "</div>";
}
?>
<?php 
} else { 
    header("location: index.php");
} 

 ?>