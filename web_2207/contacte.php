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
													<li id="txt_boto_barra"><a href="index.php">Inici</a></li>
													<li id="txt_boto_barra" class="active"><a href="historia.php">Història</a></li>
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



<div id="topic" class="container-fluid">
<div id="top-content" class="span9"><h1>Contacte</h1>
	<div class="twpara-row row-fluid">
		<div id="FIKmQ7Jh" class="span12 tw-para "><h2>¿ Troban's&nbsp;?</h2>
			<div class="pobj obj-before" style="width:100%;margin-left:auto;margin-right:auto;">
				<div class="wrapper-with-intrinsic-ratio" style="padding-bottom:300px">
					<div id="map_FIKmQ7Jh" class="element-to-stretch" style="border:1px solid silver; overflow:hidden">
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="twpara-row row-fluid">
	<div id="4FV3e2TP" class="span12 tw-para ">
			<div class="ptext"><p>Per cualsevol informacion ompliu el formulariy ens posarem en contacte amb volsatres el avans possible.</p>
			</div>
			<div class="pobj obj-after">
				<form class="form-horizontal" name="F4FV3e2TP" id="F4FV3e2TP" onsubmit="return validateForm_4FV3e2TP( this );" method="POST" action="_iserv/form2mail/form2mail.php" target="_top" enctype="multipart/form-data"><input type="hidden" name="f2mlang" value="es"><input type="hidden" name="f2msitelang" value="es"><input type="hidden" name="f2memail" value="fva@falconsdevallbonadanoia.com"><input type="hidden" name="f2memail_exp" value=""><input type="hidden" name="f2msubj" id="Contact" value="Contact"><input type="hidden" name="f2murl" value="http://www.falconsdevallbonadanoia.com/index.html">
					<div class="control-group"><label class="control-label required" for="nom">Nom</label>
						<div class="controls"><input type="text" name="nom" id="nom" value="" maxlength="50" class="input-large" required>
						</div>
					</div>
					<div class="control-group"><label class="control-label required" for="email">Email</label>
						<div class="controls"><input type="email" name="email" id="email" value="" class="input-large" required pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$" title="Información Email debe ser una dirección válida de correo electrónico">
						</div>
					</div>
					<div class="control-group"><label class="control-label" for="asumpte">Asumpte</label>
						<div class="controls"><select name="asumpte" class="input-large"><option value="contractaci">Contractació</option><option value="informaci">Informació</option><option value="altres">Altres...</option></select>
						</div>
					</div>
					<div class="control-group"><label class="control-label" for="fotografies">Fotografies</label>
						<div class="controls"><input type="hidden" name="MAX_FILE_SIZE" value="204800"><input type="hidden" name="f2mauthext" value=""><input type="file" name="FilenameUpload" id="FilenameUpload" style="display:none">
							<div class="input-append"><input type="text" id="FilenameUploadProxyEdit" class="input-medium" disabled readonly><a class="btn" id="FilenameUploadProxyBtn"><i class="fa fa-file"><!----></i></a>
							</div>
						</div>
					</div>
					<div class="control-group"><label class="control-label required" for="missatge">Missatge</label>
						<div class="controls"><textarea name="missatge" id="missatge" value="" rows="5" class="input-large" required></textarea>
						</div>
					</div>
					<div class="form-actions" style="background-color:transparent;padding-left:0;margin-left:0;padding-bottom:0"><button type="submit" class="btn btn-primary" >Enviar</button>&nbsp;<button type="reset" class="btn">Cancelar</button>
					</div>
				</form>
			</div>
		</div>

		<div class="row-fluid">
		</div>
	</div>
</div>

<div id="top-sb" class="span3">
	<div id="8VE3UzP0" class="tw-para twps-panel"><h2>Dirección</h2>
		<div class="ptext"><p>c/Major 11&nbsp;<br>Vallbona d'Anoia, 08785<br>Barcelona<br><br>Tél: 628 746 305<br><br>fva@falconsdevallbonadanoia.com<br><br>Dilluns-Divendres <br>9:00h-20:00h</p>
		</div>
	</div>
</div>

<!--<div class="span12" style="text-align:center;"><a id="twclosepage" data-twtheme="tos cboxElement" class="btn btn-primary" style="display:none;margin:16px 0 16px 0;" onclick="parent.$.colorbox.close();return(false);" href="">Cierra</a>
</div>-->
</div>
</div>

<?php
peu();
?>

</div>


</body>

</html>