<?php 
if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath = '../../barcode/' . $filename;
	if(!empty($filename) && file_exists($filepath)){

//Define Headers
		header("Cache-Control: public");
		header("Content-Description: FIle Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
		exit;

	}
	else{
		echo "<script>alert('File Does Not Exist or May Be Deleted By Admin !');
		window.location.href='../public/chicken';
			  </script>"; 
	}
}

 ?>