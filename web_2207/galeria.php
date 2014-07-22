<?php
require_once('funcions.php');
capsalera();
?>

<body>
<div id="site">
		<div id="page">
		
<header>
				<div class="escut_caps"><img src="img/Escut150_72.png"></div>
				<div class="mascota_caps"><img src="img/MASCOTA150_72.png"></div>
							
			</header>

			<!--barra navegació-->
			<div id="" class="nav">
				
				<div id="barra" class="navbar">
					<div id="sharebox"><!--icones face, google, mail-->
						<a target="_blank" href="http://www.youtube.com/user/falconsdevallbona"><img style="width:24px;height:24px" src="img/1405677172_youtube.png" alt=""></a>
						<a target="_blank" href="http://falconsdevallbona.blogspot.com.es/"><img style="width:24px;height:24px" src="img/1405677150_blogger.png" alt=""></a>
						<a target="_blank" href="mailto:"><img style="width:24px;height:24px" src="img/1405676956_mail.png" alt=""></a>
						<a target="_blank" href="https://www.facebook.com/falconsvallbona"><img style="width:24px;height:24px" src="img/1405677231_678128-social-facebook.png" alt=""></a>
					</div>
					<!--boto buscar-->
					<div id="buscar" class="nav pull-right">
						<li><form id="searchbox" class="navbar-search" action="_search.html"><input type="text" name="req" id="searchbox-req" class="search-query" placeholder="Buscar"></form></li>
					</div>
					
					<!--barra menu-->
					<div id="toolbar2" class="navbar">
  						<div class="navbar-falcons">
   							<div class="container-fluid" id="padding0">
		   						<button type="button" class="btn btn-navbar" style="float:left" data-toggle="collapse" data-target=".nav-collapse">
		   						 	<span class="icon-bar"><!----></span>
		   						 	<span class="icon-bar"><!----></span>
		   						 	<span class="icon-bar"><!----></span>
		   						</button>
									<div  class="nav-collapse collapse">
										<ul id="tolbar2_1" class="nav">
											<li>
												<ul id="mainmenu" class="nav">
													<li id="txt_boto_barra" class="active"><a href="index.php">Inici</a></li>
													<li id="txt_boto_barra"><a href="historia.php">Història</a></li>
													<li id="txt_boto_barra"><a href="galeria.php">Galeria</a></li>
													<!--<li id="txt_boto_barra"><a href="botiga.php">Botiga</a></li>-->
													<li id="txt_boto_barra"><a href="contacte.php">Contacte</a></li>
												</ul>
											</li>
										</ul>
									</div>
							</div>
						</div>

					</div>
				</div>  
			</div>
			
		<div id="topic" class="row-fluid">
			<div id="top-content" class="span12 gallery-idx ta-center"><h1 style="text-align:center">Galeria</h1>
				<ul>
					<li><a href="galeria-photo.html"><img src="_media/img/sq_icon/969473-508973389171257-1210402139-n.jpg" style="max-width:100%;width:75px;"  alt=""></a></li>
					<li><a href="galeria-photo2.html"><img src="_media/img/sq_icon/988699-508971155838147-1485937332-n.jpg" style="max-width:100%;width:75px;"  alt=""></a></li>
					<li><a href="galeria-photo3.html"><img src="_media/img/sq_icon/1012678-432832120183761-1803416619-n.jpg" style="max-width:100%;width:75px;"  alt=""></a></li>
					<li><a href="galeria-photo4.html"><img src="_media/img/sq_icon/1044300-432832316850408-77627475-n.jpg" style="max-width:100%;width:75px;"  alt=""></a></li>
					<li><a href="galeria-photo5.html"><img src="_media/img/sq_icon/1170883-508977212504208-373049292-n.jpg" style="max-width:100%;width:75px;"  alt=""></a></li>
					<li><a href="galeria-photo6.html"><img src="_media/img/sq_icon/936353-508292322551476-470688225-n.jpg" style="max-width:100%;width:75px;"  alt=""></a></li>
					<li><a href="galeria-photo7.html"><img src="_media/img/sq_icon/374390-283972608409307-269886352-n.jpg" style="max-width:100%;width:75px;"  alt=""></a></li>
					<li><a href="galeria-photo8.html"><img src="_media/img/sq_icon/988699-508971155838147-1485937332-n.jpg" style="max-width:100%;width:75px;"  alt=""></a></li>
				</ul>
			</div>
		<div class="span12" style="text-align:center;"><a id="twclosepage" data-twtheme="tos cboxElement" class="btn btn-primary" style="display:none;margin:16px 0 16px 0;" onclick="parent.$.colorbox.close();return(false);" href="">Cierra</a>
	</div>
</div>
</div>

<?php
peu();
?>

</div>
</div>

</body>
</html>