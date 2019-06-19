<?php session_start(); ?>
<?php
include('conex.php'); 
$login=$_POST['login'];
$clave=$_POST['clave'];

$link=mysql_connect("127.0.0.1","root","1234");
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
#apDiv {	position: absolute;
	width: 199px;
	height: 71px;
	z-index: 6;
	left: 536px;
	top: 8px;
}
#apDiv2 {
	position: absolute;
	width: 199px;
	height: 44px;
	z-index: 6;
	left: 758px;
	top: 232px;
}
#apDiv3 {
	position: absolute;
	width: 199px;
	height: 71px;
	z-index: 6;
	left: 759px;
	top: 298px;
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
            <div class="title">
              <p><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Actualiza Productos</p>
            </div>
            <div id="apDiv8">
              <form action="" method="post" name="form1" id="form1">
                <center>
                  <table width="144" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>Entra a Tu Cuenta</td>
                    </tr>
                  </table>
                </center>
                <table width="200" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>Usuario</td>
                    <td><input type="text" name="textfield" id="textfield" /></td>
                  </tr>
                  <tr>
                    <td>Clave</td>
                    <td><input type="text" name="textfield2" id="textfield2" /></td>
                  </tr>
                </table>
                <center>
                  <table width="76" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="76"><center>
                        <input type="submit" class="register" value="login" />
                      </center></td>
                    </tr>
                  </table>
                </center>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </form>
            </div>
          <div class="clear"></div>
        </div>
        
        
        <div class="left_content">
          <div class="feat_prod_box_details">
            <p class="details">Modifica Productos.</p>
            
              	<div class="contact_form">

              	  <p>                    
           	      <center>
					<p><center>Nombre de Producto</center></p>
					<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("tejidos_a_mano");
echo '<FORM METHOD="POST" ACTION="actualizado.php">Nombre del Producto<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select nombre From productos Order By nombre";
$result=mysql_query($sSQL);

echo '<select name="nombre_act">';

//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["nombre"];}
?>
</select>
                  </center>
</p>
              	    <p>&nbsp;</p>
              	    <table width="371" border="0">
              	      <tr>
              	        <td width="53">ID</td>
              	        <td width="52"><input type="text" name="id_a" id="id_a" /></td>
           	          </tr>
              	      <tr>
              	        <td>Nombre</td>
              	        <td><input type="text" name="nombre_a" id="nombre_a" /></td>
           	          </tr>
              	      <tr>
              	        <td>Colores</td>
              	        <td><input type="text" name="colores_a" id="colores_a" /></td>
           	          </tr>
              	      <tr>
              	        <td>Disponibilidad</td>
              	        <td><input type="text" name="disponibilidad_a" id="disponibilidad_a" /></td>
           	          </tr>
              	      <tr>
              	        <td>Cantidad</td>
              	        <td><input type="text" name="cantidad_a" id="cantidad_a" /></td>
           	          </tr>
              	      <tr>
              	        <td>Tipo</td>
              	        <td><input type="text" name="tipo_a" id="tipo_a" /></td>
           	          </tr>
              	      <tr>
              	        <td>Precio</td>
              	        <td><input type="text" name="precio_a" id="precio_a" /></td>
           	          </tr>
           	        </table>
                    <center>
              	    <table width="81" border="0">
              	      <tr>
              	        <td width="71"><span class="form_row">
              	         <center> 
                         <input type="submit" class="register" value="Modifica" />
                         </center>
              	        </span></td>
           	          </tr>
           	        </table>
                    </center>
              	    <p>&nbsp;</p>
           	  </div>  
            
          </div>
       	  <div class="clear"></div>
        </div>
        
        <?php
		  if($_SESSION['nivel'] == '1')
		              {
					  ?>
        <?php
		  }
					  ?>
                      
        
        <?php
		  if($_SESSION['nivel'] == '1' || $_SESSION['nivel'] == '2')
		              {
					  ?>
        <?php
					  }
		?>
        
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