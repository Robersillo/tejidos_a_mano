<?php  session_start(); ?>
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
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Contactanos</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">Si no ha iniciado sesion no podra ponerse en contacto con nosotros.</p>
            <p class="details">Si ya inicio Sesion Podra Enviar Un Mensaje para cualquier duda o si quiere envio a alguna parte de Venezuela.</p>
            <div class="contact_form">
              <form id="form2" name="form2" method="post" action="conslta_usuario.php">
                <table width="200" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" id="nombre" /></td>
                  </tr>
                  <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido" id="apellido" /></td>
                  </tr>
                  <tr>
                    <td>Cedula:</td>
                    <td><input type="text" name="cedula" id="cedula" /></td>
                  </tr>
                  <tr>
                    <td>Telefono:</td>
                    <td><input type="text" name="telefono" id="telefono" /></td>
                  </tr>
                  <tr>
                    <td>EMAIL:</td>
                    <td><input type="text" name="email" id="email" /></td>
                  </tr>
                  <tr>
                    <td>Direccion:</td>
                    <td><input type="text" name="direccion" id="direccion" /></td>
                  </tr>
                  <tr>
                    <td>Consulta</td>
                    <td><textarea name="consulta" id="consulta" cols="45" rows="5"></textarea></td>
                  </tr>
                </table>
                <input name="Consulta" type="submit" class="register" id="Consulta" value="Registrarse" />
                <p>&nbsp;</p>
              </form>
            </div>
        	</div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
          <div class="about">
            <p> <a href="nosotros.php"><img src="images/about.gif" alt="" title="" class="right" /></a>
              <center>
                <a href="nosotros.php">Tienda </a>
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