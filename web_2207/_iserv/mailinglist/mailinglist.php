<?php  
	$FROM = "ddiaz@brownandgrey.es";
	$URL_OK = "_message.html?PGRpdiBzdHlsZT0idGV4dC1hbGlnbjpjZW50ZXIiPjxoMT5Db25maXJtYWNp824gZGUgc3VzY3JpcGNp8248L2gxPjxkaXYgY2xhc3M9InR3LXBhcmEiPjxoMj4gPC9oMj48cD5VbiBtZW5zYWplIGRlIGNvcnJlbyBlbGVjdHLzbmljbyBzZSBoYSBlbnZpYWRvIGEgdXN0ZWQuIFBvciBmYXZvciwgY29tcHJ1ZWJlIHN1IGVtYWlsIGVuIHVub3MgbWludXRvcyBwYXJhIGNvbmZpcm1hciBzdSBzdXNjcmlwY2nzbi48L3A+PGJyPjxicj48L2Rpdj48L2Rpdj4=";
	$URL_KO = "_message.html?PGRpdiBzdHlsZT0idGV4dC1hbGlnbjpjZW50ZXIiPjxoMT5Db25maXJtYWNp824gZGUgc3VzY3JpcGNp8248L2gxPjxkaXYgY2xhc3M9InR3LXBhcmEiPjxoMj4gPC9oMj48YnI+PGJyPjwvZGl2PjwvZGl2Pg==";
	$TO = "";
	$NAME = "";
	$CONFACTION = "";
	$CONFSUBJECT = "";
	$CONFTEXT = "";
	while( list($key, $val) = each($_POST) ) {
		if( $key == "mlemail" )
			$TO = ( $val );
		else if( $key == "mlconfaction" )
			$CONFACTION = ( $val );
		else if( $key == "mlconfsubject" )
			$CONFSUBJECT = ( $val );
		else if( $key == "mlconftext" )
			$CONFTEXT = ( $val );
		else if( $key == "mlname" )
			$NAME = ( $val );
	}  
	$HREF = getenv("HTTP_REFERER");
	$HREF = substr( $HREF, 0, strrpos( $HREF, '/' ) + 1 );
	if( $TO != "" )
	{
		$SIGN = md5( $TO . "2b1b2a411c8be0a9b364040755c42994" );
		$URL = $HREF."_iserv/mailinglist/mlconfirm.php?mlaction=".$CONFACTION."&mlsign=".$SIGN."&mlemail=".$TO."&mlname=".$NAME;
		$CONFSUBJECT = str_replace( "\'", "'", $CONFSUBJECT );
		$CONFTEXT = str_replace( "<br>", "\n", $CONFTEXT );
		$CONFTEXT = str_replace( "\'", "'", $CONFTEXT );		
		mail($TO, $CONFSUBJECT, $CONFTEXT . "\n" . $URL, "From: ".$FROM."\nReturn-Path: ".$FROM."\n" ); 
		header( 'Location: ' . $HREF . $URL_OK );		
	} else
		header( 'Location: ' . $HREF . $URL_KO );		
?>  
