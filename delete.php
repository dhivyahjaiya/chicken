<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>


<?php

include "../../global/conn.php";

if (isset($_GET['userid'])) {

$sql = "DELETE FROM user WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($db, $sql)) {
    echo "<script>alert('User Has Been Deleted !')</script>";
} 
header("Location: ../public/index");
mysqli_close($db);

}

if (isset($_GET['chickenid'])) {

    $sql = "DELETE FROM chicken WHERE chickenid='" . $_GET["chickenid"] . "'";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Chicken Detail Has Been Deleted !')</script>";
    } 
    header("Location: ../public/chicken");
    mysqli_close($db);
    
    }
 


?>
</body>
</html>