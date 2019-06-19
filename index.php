<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Tejidos a Mano</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
#apDiv8 {
	position: absolute;
	width: 207px;
	height: 115px;
	z-index: 6;
	left: 863px;
	top: 18px;
}
#apDiv {
	position: absolute;
	width: 199px;
	height: 71px;
	z-index: 6;
	left: 777px;
	top: 466px;
}
#apDiv2 {
	position: absolute;
	width: 199px;
	height: 44px;
	z-index: 6;
	left: 775px;
	top: 396px;
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
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Productos</div>
        
        	<div class="feat_prod_box">
        	  <div class="clear">
                 
				 <?php
		  if(isset ($_SESSION['nivel']) == '1' || isset ($_SESSION['nivel']) == '2')
		              {
					  ?>
        	    <div id="apDiv2">
        	      <table width="200" border="0">
        	        <tr>
        	          <td><center>
        	            <a href="pdf.php">Archivos PDF </a><a href="mproductos.php"></a>
      	            </center></td>
      	          </tr>
        	        <tr>
        	          <td><center>
        	          </center></td>
      	          </tr>
      	        </table>
      	      </div>
              <?php
			} 		 
			?>
        	  </div>
          </div>	
            
            <div class="feat_prod_box">
            
            	<div class="prod_img"><a href="details.html"><img src="images/prod2.gif" alt="" title="" border="0" /></a></div>
                
              <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><a href="sandalias.php">Sandalias</a></div>
                    <p class="details">Echas a Mano con a&ntilde;os de Experiencia y calidad</p>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>
            
        	<div class="feat_prod_box">
            
            	<div class="prod_img"><a href="details.html"><img src="images/prod1.gif" alt="" title="" border="0" /></a></div>
                
              <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><a href="bolsos.php">Bolsos</a></div>
                    <p class="details">Echas a Mano con a&ntilde;os de Experiencia y calidad</p>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>
       	   <div class="new_products"></div> 
          
            
        <div class="clear"></div>
        </div>
       	</font>
        <!--end of left content-->
        
        <div class="right_content">
          <div class="about">
            <p> <a href="nosotros.php"><img src="images/about.gif" alt="" title="" class="right" /></a>
              <center>
               <a href="nosotros.php">Tienda</a>
            </center></p>
            <p>Tejidos a mano -Nueva Tienda en CC la Granja Nro Local: 105 los mejores bolsos y sandalias echas a mano.</p>
            
                     <?php
		  if(isset ($_SESSION['nivel']) == '1')
		              {
					  ?>
            <div id="apDiv">
              <table width="200" border="0">
                <tr>
                  <td><center>
                    <a href="mproductos.php">Nuevos Productos </a>
                  </center></td>
                </tr>
                <tr>
                  <td><center>
                    <a href="aproductos.php">Actualiza Productos </a>
                  </center></td>
                </tr>
                <tr>
                  <td><center>
                    <a href="bproductos.php">Borra Productos</a>
                  </center></td>
                </tr>
              </table>
            </div>
            <?php
			} 		 
			?> 
          </div>
          
        </div>
        <?php
		  if(!(isset ($_SESSION['nivel']) == '1' ||isset ($_SESSION['nivel']) == '2'))
		              {
					  ?>
        <div id="apDiv8">
          <form action="validar.php" method="post" name="form1" id="form1">
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
                <td><input type="text" name="login" id="login" /></td>
              </tr>
              <tr>
                <td>Clave</td>
                <td><input type="text" name="clave" id="clave" /></td>
              </tr>
            </table>
            <center>
              <table width="76" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="76"><center>
                    <input type="submit" class="register" value="logear" />
                  </center></td>
                </tr>
              </table>
            </center>
            <? echo $men ?>
          </form>
        </div>
          <?php
			} 		 
			?>
        <p>&nbsp;</p>
        <div class="clear"></div>
       </div><!--end of center content-->
       
              
       <div class="footer">
         <div class="right_footer">
           <p><strong>Copyrigth &copy; 2013 Tejidosamano C.A.</strong></p>
           <p><strong>Web Master - </strong><strong>Roberto Fernandez</strong></p>
         </div>
        
       
       <span class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /></span></div>
    

</div>

</body>
</html>