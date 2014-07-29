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
													<li id="txt_boto_barra"><a href="index.php">Falcons</a></li>
													<li id="txt_boto_barra"><a href="fem.php">Què fem</a></li>
													<li id="txt_boto_barra"><a href="historia.php">Història</a></li>
													<li id="txt_boto_barra"><a href="figures.php">Figures</a></li>
													<li id="txt_boto_barra" class="active"><a href="contacte.php">Contacte</a></li>
												</ul>
											</li>
										</ul>
									</div>
							</div>
						</div>

					</div>
				</div>  
			</div>



		<div id="topic" class="container-fluid">
			
			<div class="row-fluid" style="margin-left:15px">
				<div class="span8">
					<h1>On som?</h1>
					<div class="row-fluid">
						<div class="span12"><h2></h2>
							<!-- plano -->
							<div class="pobj obj-before" style="width:100%;margin-left:auto;margin-right:auto;">
									<div id="mapa" class="" style="border:1px solid silver; overflow:hidden">
										<iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d191182.45359717077!2d1.7091523499999877!3d41.521048499998805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!1i0!3e6!4m5!1s0x12a4666539115fb1%3A0x51a0f0f696b49f65!2sVallbona+d&#39;Anoia!3m2!1d41.518310899999996!2d1.7075563!4m0!5e0!3m2!1sca!2ses!4v1406217592141" width="600" height="455" frameborder="0" style="border:0"></iframe>
									</div>
							</div>
						</div>
					</div>

					<!-- adreça -->
					<!--<div class="row-fluid">
						<div><h2></h2>
							<div class="ptext"><p>c/Major 110<br>08785 Vallbona d'Anoia (Barcelona)<br>Tel: 628 746 305<br>fva@falconsdevallbonadanoia.com</p></div>
						</div>
					</div>-->

				</div>


				<div id="" class="span4" style="margin-top:15px">
					<div class="row-fluid">
						<div id="top-sb" class="span12">
							<div class="ptext"><p>Per qualsevol informació ompliu el seguent formulari i ens posarem en contacte amb volsatres.</p>
									<div class="span12" style="margin-left:0px">
										<form class="form-horizontal" name="F4FV3e2TP" id="F4FV3e2TP" onsubmit="return validateForm_4FV3e2TP( this );" method="POST" action="_iserv/form2mail/form2mail.php" target="_top" enctype="multipart/form-data"><input type="hidden" name="f2mlang" value="es"><input type="hidden" name="f2msitelang" value="es"><input type="hidden" name="f2memail" value="fva@falconsdevallbonadanoia.com"><input type="hidden" name="f2memail_exp" value=""><input type="hidden" name="f2msubj" id="Contact" value="Contact"><input type="hidden" name="f2murl" value="http://www.falconsdevallbonadanoia.com/index.html">
											<div class="control-group"><label class="control-label required" for="nom" style="text-align:left">Nom</label>
												<div class="controls" style="margin-left:0px"><input type="text" name="nom" id="nom" value="" maxlength="50" class="input-large" required>
												</div>
											</div>
											<div class="control-group"><label class="control-label required" for="email" style="text-align:left">Email</label>
												<div class="controls" style="margin-left:0px"><input type="email" name="email" id="email" value="" class="input-large" required pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$" title="Información Email debe ser una dirección válida de correo electrónico">
												</div>
											</div>
											<div class="control-group"><label class="control-label" for="asumpte" style="text-align:left">Asumpte</label>
												<div class="controls" style="margin-left:0px"><select name="asumpte" class="input-large"><option value="contractaci">Contractació</option><option value="informaci">Informació</option><option value="altres">Altres...</option></select>
												</div>
											</div>
											<!--<div class="control-group"><label class="control-label" for="fotografies" style="text-align:left">Fotografies</label>
												<div class="controls" style="margin-left:0px"><input type="hidden" name="MAX_FILE_SIZE" value="204800"><input type="hidden" name="f2mauthext" value=""><input type="file" name="FilenameUpload" id="FilenameUpload" style="display:none">
													<div class="input-append"><input type="text" id="FilenameUploadProxyEdit" class="input-medium" disabled readonly><a class="btn" id="FilenameUploadProxyBtn"><i class="fa fa-file"></i></a>
													</div>
												</div>
											</div>-->
											<div class="control-group"><label class="control-label required" for="missatge" style="text-align:left">Missatge</label>
												<div class="controls" style="margin-left:0px"><textarea name="missatge" id="missatge" value="" rows="5" class="input-large" required></textarea>
												</div>
											</div>
											<div class="form-actions" style="background-color:transparent;padding-left:0;margin-left:0;padding-bottom:0">
												<button type="submit" class="btn btn-primary">Enviar</button>
												<button type="reset" class="btn" style="margin-left=100px">Cancelar</button>
											</div>
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>




<?php
peu();
?>

</div>


</body>

</html>