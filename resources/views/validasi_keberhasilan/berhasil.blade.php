<?php
	echo 'Pengajuan Topik berhasil';

	
	
	if($penandaRole == "industri"){
	//sleep for 3 seconds
		header( "refresh:3;/homepage/industri" );

	}
	else if($penandaRole == "mahasiswa"){
		header( "refresh:3;/mahasiswa/pengajuan-topik" );
		
	}
	else {
		header( "refresh:3;/homepage/dosen" );
	
		
	}
		
		
?>