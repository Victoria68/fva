<?php  
	$ACTION = "";    
	$NAME = "";
	$SIGN = "";
	$EMAIL = "";
	$URL_KO99 = "_message.html?PGRpdiBzdHlsZT0idGV4dC1hbGlnbjpjZW50ZXIiPjxoMT5Db25maXJtYWNp824gZGUgc3VzY3JpcGNp8248L2gxPjxkaXYgY2xhc3M9InR3LXBhcmEiPjxwPkxvIHNpZW50bywgbGEgYWNjafNuIHNvbGljaXRhZGEgc2UgaGEgaW50ZXJydW1waWRvIChlcnJvciA5OSk8L3A+PGJyPjxicj48L2Rpdj48L2Rpdj4=";
	$URL_KO2 = "_message.html?PGRpdiBzdHlsZT0idGV4dC1hbGlnbjpjZW50ZXIiPjxoMT5Db25maXJtYWNp824gZGUgc3VzY3JpcGNp8248L2gxPjxkaXYgY2xhc3M9InR3LXBhcmEiPjxwPkxvIHNpZW50bywgbGEgYWNjafNuIHNvbGljaXRhZGEgc2UgaGEgaW50ZXJydW1waWRvIChlcnJvciAyKTwvcD48YnI+PGJyPjwvZGl2PjwvZGl2Pg==";
	$URL_SUB_CONF = "_message.html?PGRpdiBzdHlsZT0idGV4dC1hbGlnbjpjZW50ZXIiPjxoMT5Db25maXJtYWNp824gZGUgc3VzY3JpcGNp8248L2gxPjxkaXYgY2xhc3M9InR3LXBhcmEiPjxwPlN1IHNvbGljaXR1ZCBkZSBzdXNjcmlwY2nzbiBoYSBzaWRvIHJlZ2lzdHJhZGEuIFNlcuEgZWZpY2F6IGVuIHVuYXMgcG9jYXMgaG9yYXMuIEdyYWNpYXMuPC9wPjxicj48YnI+PC9kaXY+PC9kaXY+";
	$URL_UNSUB_CONF = "_message.html?PGRpdiBzdHlsZT0idGV4dC1hbGlnbjpjZW50ZXIiPjxoMT5Db25maXJtYWNp824gZGUgZGVzdXNjcmlwY2nzbjwvaDE+PGRpdiBjbGFzcz0idHctcGFyYSI+PHA+U3Ugc29saWNpdHVkIGRlIGJhamEgaGEgc2lkbyByZWdpc3RyYWRhLiBTZXLhIGVmaWNheiBlbiB1bmFzIHBvY2FzIGhvcmFzLiBHcmFjaWFzLjwvcD48YnI+PGJyPjwvZGl2PjwvZGl2Pg==";
	while( list($key, $val) = each($_GET) ) {  
		if( $key == "mlaction" )
			$ACTION = $val;
		else if( $key == "mlsign" )
			$SIGN = $val;
		else if( $key == "mlemail" )
			$EMAIL = ( $val );    
		else if( $key == "mlname" )
			$NAME = ( $val );    
	}  
	$HREF = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$HREF = substr( $HREF, 0, strpos( $HREF, '_iserv' ) );
	if( $SIGN !== md5( $EMAIL . "2b1b2a411c8be0a9b364040755c42994" ) ) {
		header( 'Location: ' . $HREF . $URL_KO99 );		
		exit;
	}
	$old_mask = umask( 0 );
	if( !is_dir( 'data' ) ) {
		if( mkdir( 'data', 0777 ) === FALSE ) {
			umask( $old_mask ); 
			header( 'Location: ' . $HREF . $URL_KO2 );		
			exit;
		}
		else {
			touch( 'data/index.php' );
		}
	}
	chdir( 'data' );
	if( $ACTION == 'sub' ) {
		if( file_exists( $EMAIL.'.unsub' ) )
			rename( $EMAIL.'.unsub', $EMAIL.'.sub' );
		touch( $EMAIL . '.sub' );
		header( 'Location: ' . $HREF . $URL_SUB_CONF );		
	}
	else if ( $ACTION == 'unsub' ) {
		if( file_exists( $EMAIL.'.sub' ) )
			rename( $EMAIL.'.sub', $EMAIL.'.unsub' );
		touch( $EMAIL . '.unsub' );
		header( 'Location: ' . $HREF . $URL_UNSUB_CONF );		
	}
?>  
