<?php  session_start(); ?>
<?php 
include('conex.php'); 
$login=$_POST['login'];
$clave=$_POST['clave'];

$link=mysql_connect("127.0.0.1","root","");
mysql_select_db("tejidos_a_mano");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Tejidos a Mano</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
#apDiv8 {	position: absolute;
	width: 207px;
	height: 115px;
	z-index: 6;
	left: 841px;
	top: 18px;
}
#apDiv {
	position: absolute;
	width: 199px;
	height: 71px;
	z-index: 6;
	left: 761px;
	top: 254px;
}
#apDiv2 {
	position: absolute;
	width: 199px;
	height: 44px;
	z-index: 6;
	left: 760px;
	top: 198px;
}
</style>
</head>
<body>
<div id="wrap">

       <div class="header">
       		<div class="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li class="selected"><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="sandalias.php">Sandalias</a></li>
            <li><a href="produtos.php">Lista de los Productos</a></li>
            <li><a href="bolsos.php">Bolsos</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li></li>
            <li><a href="contactos.php">Contactanos</a></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
         <div class="left_content">
           <div class="feat_prod_box_details">
            <p class="details">
            <?php 
$link=mysql_connect("127.0.0.1","root","");
mysql_select_db("tejidos_a_mano");

		$a=$_POST['id_a'];
		$b=$_POST['nombre_a'];
		$c=$_POST['colores_a'];
		$d=$_POST['disponibilidad_a'];
		$e=$_POST['cantidad_a'];
		$f=$_POST['tipo_a'];
		$g=$_POST['precio_a'];
$sSQL="Update productos Set id='$a', nombre='$b', colores='$c', disponibilidad='$d', cantidad='$e', tipo='$f', precio='$g' Where nombre='$nombre_act'";
mysql_query($sSQL);
?>
            <center>
              <h3>Producto ACTUALIZADO con Exito</h3>
            </center></p>
       	   </div>
       	   <div class="clear"></div>
        </div>

         <!--end of left content--><!--end of right content-->
        
        
       
       
       <div class="clear"></div>
       </div>
       
       
       
       <!--end of center content-->
       
              
       <div class="footer">
       	<div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br />
       	</div>
        <div class="right_footer">
          <p><strong>Copyrigth &copy; 2013 Tejidosamano C.A.</strong></p>
          <p><strong>Web Master - </strong><strong>Roberto Fernandez</strong></p>
        </div>
        
       
       </div>
    

</div>

</body>
</html>