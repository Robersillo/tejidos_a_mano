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
	left: 774px;
	top: 431px;
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
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Lista de Productos</div>
            <div class="feat_prod_box_details">
            <p class="details">
             Lista de todos los productos Exisentes..</p>
                    <?php 
			  
include('conex.php'); 
$login=$_POST['login'];
$clave=$_POST['clave'];

$link=mysql_connect("localhost","root","");
mysql_select_db("tejidos_a_mano");
$result=mysql_query("select * from productos");
?>
              	<div class="contact_form">
              	  <table width="371" border="0">
              	    <tr>
              	      <td width="53">Nombre</td>
              	      <td width="52">Colores</td>
              	      <td width="84">Disponibilidad</td>
              	      <td width="55">Cantidad</td>
              	      <td width="41"><center>Tipo</center></td>
              	      <td width="46">Precio</td>
           	        </tr>
                    <?php 
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["nombre"].'</td>';
echo '<td>'.$row["colores"].'</td>';
echo '<td><center>'.$row["disponibilidad"].'</center></td>';
echo '<td><center>'.$row["cantidad"].'</center></td>';
echo '<td>'.$row["tipo"].'</td>';
echo '<td>'.$row["precio"].'</td>';
}
mysql_free_result($result)
?>
            </table>
           
           	      </table>
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