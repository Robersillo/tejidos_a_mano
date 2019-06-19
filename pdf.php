<?php session_start(); ?>
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
	left: 775px;
	top: 430px;
}
#apDiv2 {	position: absolute;
	width: 199px;
	height: 44px;
	z-index: 6;
	left: 773px;
	top: 372px;
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
            <li></li>
            <li><a href="salir.php">Cerrar Sesion</a></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Archivos PDF</div>
            <div class="feat_prod_box_details">
            <p class="details">
             Lista de todos los productos Exisentes..</p>
            
              	<div class="contact_form">
              	  <p>Productos</p>
              	  <p>
				  <?php
	include_once("conex.php");

	$strConsulta = "SELECT * from productos";
	$productos = mysql_query($strConsulta);
	$numfilas = mysql_num_rows($productos);
	
	echo '<table cellpadding="0" cellspacing="0" width="100%">';
	echo '<thead><tr><td>Nr Producto.</td><td>Nombre</td><td>Tipo</td><td>Link</td></tr></thead>';
	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($productos);
		$numlista = $i + 1;
		echo '<tr><td>'.$numlista.'</td>';
		echo '<td>'.$fila['nombre'].'</td>';
        echo '<td>'.$fila['tipo'].'</td>';
		echo '<td><a href="reporte_historial.php?id='.$fila['id'].'">ver</a></td></tr>';
	}
	echo "</table>";
?></p>
              	</div>  
            
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
          <div class="about">
            <p> <a href="nosotros.php"><img src="images/about.gif" alt="" title="" class="right" /></a>
              <center>
                <a href="nosotros.php">Tienda</a>
              </center>
            </p>
            <p>Tejidos a mano -Nueva Tienda en CC la Granja Nro Local: 105 los mejores bolsos y sandalias echas a mano.</p>
          </div>
        </div><!--end of right content-->
        
        
       
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
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