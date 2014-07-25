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
													<li id="txt_boto_barra" class="active"><a href="index.php">Falcons</a></li>
													<li id="txt_boto_barra"><a href="fem.php">Què fem</a></li>
													<li id="txt_boto_barra"><a href="historia.php">Història</a></li>
													<li id="txt_boto_barra"><a href="figures.php">Figures</a></li>
													<li id="txt_boto_barra"><a href="contacte.php">Contacte</a></li>												</ul>
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
				    <div class="span6"><!--columna text-->
				    	<h1>Què son els Falcons?</h1>
				    	<p class"txt_body">Els Falcons són una manifestació gimnàstica-esportiva apareguda a Catalunya a inicis del segle XX. En les nostres actuacions els Falcons fem construccions acrobàtiques que recorden els castells però amb més varietat de formes, menys participants i més varietat d'estils entre les diferents colles, si bé hi ha una part del repertori de figures comú a totes. Tot i que moltes construccions són de caràcter estàtic, l'aspecte dinàmic i coreogràfic hi té més importància que en els castells, així com l'efecte estètic buscat amb la composició de diferents figures simultànies.<br>
											La pràctica dels Falcons ha anat variant lleugerament des dels seus inicis, prenent influències castelleres pel que fa a la indumentària (pantaló i camisa blanques, faixa i espardenyes) o l'acompanyament de les gralles, i incorporant a les seves construccions algunes figures inspirades en castells, com per exemple els pilars.</p>
						
					</div>
				    
				    <div class="span6" style="margin-top:20px;padding-right:20px"><!--columna fotos-->
						<div class="span6" style="">
							<div class="foto-border"><img src="img/som/som_serra_300x200.jpg" id="foto_mosaic"></div>
							<!--video serra 9 puntes-->
							<div id="l5hAQ4rC" >
								<div class="video">
									<div id="vid_l5hAQ4rC" class="video_div" style="">
									<iframe class="video_frame" src="http://www.youtube.com/embed/BYlyv75QymI?fs=1"></iframe>
									</div>
								</div>
							</div>
						</div>
						<div class="span6" style="">
							<div class="foto-border" id="foto_mosaic"><img src="img/som/som_compo_300x200.jpg"></div>
							<!--video serra 9 puntes-->
							<div id="l5hAQ4rC" >
								<div class="video">
									<div id="vid_malla" class="video_div" style="">
									<iframe class="video_frame" src="http://www.youtube.com/embed/watch?v=XoR6_CqhNHI&feature=youtu.be"></iframe>
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