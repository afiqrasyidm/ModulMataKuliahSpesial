<?php
	echo 'Pengajuan Topik berhasil';

	
	
	if($penandaRole == "industri"){
	//sleep for 3 seconds
		header( "refresh:3;/homepage/industri" );

	}
	
	else {
		header( "refresh:3;/homepage/dosen" );
	
		
	}
		
		
?>