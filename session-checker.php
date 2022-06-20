<?php

include "../../global/conn.php";

if(!isset($_SESSION['adminid'])){
	 echo "<script>alert('Hye, You Are Not Log In ! Come Back When You Are !');
        		window.location.href='../../login/';
              </script>";
	}

?>