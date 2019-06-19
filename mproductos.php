<?php  session_start(); ?>
<?php 

include('conex.php'); 
$login=$_POST['login'];
$clave=$_POST['clave'];

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
	left: 758px;
	top: 295px;
}
#apDiv2 {
	position: absolute;
	width: 199px;
	height: 44px;
	z-index: 6;
	left: 758px;
	top: 232px;
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
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Modificador de Productos</div>
            <div class="feat_prod_box_details">
            <p class="details">Ingrese Nuevos Productos.</p>
            
              	<div class="contact_form">
              	  <form id="form2" name="form2" method="post" action="nuevo.php">
              	    <table width="371" border="0">
              	      <tr>
              	        <td width="53">ID</td>
              	        <td width="52"><input type="text" name="id" id="id" /></td>
           	          </tr>
              	      <tr>
              	        <td>Nombre</td>
              	        <td><input type="text" name="nombre" id="nombre" /></td>
           	          </tr>
              	      <tr>
              	        <td>Colores</td>
              	        <td><input type="text" name="colores" id="colores" /></td>
           	          </tr>
              	      <tr>
              	        <td>Disponibilidad</td>
              	        <td><input type="text" name="disponibilidad" id="disponibilidad" /></td>
           	          </tr>
              	      <tr>
              	        <td>Cantidad</td>
              	        <td><input type="text" name="cantidad" id="cantidad" /></td>
           	          </tr>
              	      <tr>
              	        <td>Tipo</td>
              	        <td><input type="text" name="tipo" id="tipo" /></td>
           	          </tr>
              	      <tr>
              	        <td>Precio</td>
              	        <td><input type="text" name="precio" id="precio" /></td>
           	          </tr>
           	        </table>
                    <center>
              	    <table width="81" border="0">
              	      <tr>
              	        <td width="71"><span class="form_row">
              	         <center> 
                         <input type="submit" class="register" value="Ingresar" />
                         </center>
              	        </span></td>
           	          </tr>
           	        </table>
                    </center>
              	    <p>&nbsp;</p>
           	      </form>
              	</div>  
            
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div>
       	<div class="left_content">
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