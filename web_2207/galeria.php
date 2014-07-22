<?php
require_once('funcions.php');
capsalera();
?>

<body>
<div id="site">
		<div id="page">
		
			<header>
				<!--<image src="img/escut_roba.jpg" style="no-repeat center top;height:150px" class="img-responsive"></image>-->
								
			</header>

			<!--barra nevegació-->
			<div id="" class="nav">
				
				<div id="toolbar2" class="navbar">
					<div id="sharebox"><!--icones face, google, mail-->
						<a target="_blank" href="https://www.facebook.com/"><img style="width:24px;height:24px" src="img/tw-share-facebook@2x.png" alt=""></a>
						<a target="_blank" href=""><img style="width:24px;height:24px" src="img/tw-share-google@2x.png" alt=""></a>
						<a target="_blank" href="mailto:"><img style="width:24px;height:24px" src="img/tw-share-mail@2x.png" alt=""></a>
					</div>
					<!--boto buscar-->
					<div id="buscar" class="nav pull-right">
						<li><form id="searchbox" class="navbar-search" action="_search.html"><input type="text" name="req" id="searchbox-req" class="search-query" placeholder="Buscar"></form></li>
					</div>
					<div  class="nav-collapse"><!--barra menu-->
						<ul id="mainmenu" class="nav">
							<li style="width:100px;font-family:'Georgia',serif;font-size:16px;text-align:center"><a href="index.php">Inici</a></li>
							<li style="width:100px;font-family:'Georgia',serif;font-size:16px;text-align:center"><a href="historia.php">Història</a></li>
							<li class="active" style="width:100px;font-family:'Georgia',serif;font-size:16px;text-align:center"><a href="galeria.php">Galeria</a></li>
							<li style="width:100px;font-family:'Georgia',serif;font-size:16px;text-align:center"><a href="botiga.php">Botiga</a></li>
							<li style="width:100px;font-family:'Georgia',serif;font-size:16px;text-align:center"><a href="contacte.php">Contacte</a></li>
						</ul>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="_scripts/bootstrap/js/bootstrap.min.js"></script>
<script src="_scripts/iealert/iealert.min.js"></script>
<script src="_scripts/colorbox/jquery.colorbox-min.js"></script>
<script src="_scripts/cookie/jquery.ckie.min.js"></script>
<script>function ucc(){var a=$.cookie("scwDj");if(!a||a=="")b=0;else{var b=0;var c=0;do{c=a.indexOf(")",c);if(c>0){e=c-1;while(e>=0&&a[e]!="=")e--;b+=parseInt(a.substring(e+1,c));c++}}while(c>0)}$("#sc_pcount").text(b)}function onChangeSiteLang(href){var i=location.href.indexOf("?");if(i>0)href+=location.href.substr(i);document.location.href=href;}</script>
</body>
</html>