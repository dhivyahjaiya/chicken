<?php

include "../../global/conn.php";
date_default_timezone_set("Asia/Kuala_Lumpur");

if (isset($_POST['updatesite'])) {
  // receive all input values from the form
  $websitename=mysqli_real_escape_string($db, $_POST['websitename']);
  $websitedesc=mysqli_real_escape_string($db, $_POST['websitedesc']);
  $websitefooter=mysqli_real_escape_string($db, $_POST['websitefooter']);

  // Finally, Inserting The Data
    $query = "UPDATE `siteidentity` SET `websitename`='$websitename',`websitedesc`='$websitedesc',`websitefooter`='$websitefooter' WHERE siteidentityid = 1";
    mysqli_query($db, $query);
      echo "<script>alert('Site Identity Has Been Updated !');
          window.location.href='../public/siteidentity';
              </script>";
 
}

if (isset($_POST['updatelogo'])) {
  // receive all input values from the form
  $websitelogo = $_FILES['websitelogo']['name'];

  $filename = rand(100000,999999).basename($websitelogo);
  $target = "../../siteidentity/logo/".$filename;
  
   // Finally, Inserting The Data
   $query = "UPDATE `siteidentity` SET `websitelogo`='$filename' WHERE siteidentityid = 1";
    mysqli_query($db, $query);

    if (move_uploaded_file($_FILES['websitelogo']['tmp_name'], $target)) {
          echo "<script>alert('Logo Has Been Successfully Updated !');
          window.location.href='../public/sitelogo';
          </script>";
    }else{
    echo "<script>alert('Logo Failed To Be Update !');
    window.location.href='../public/sitelogo';
          </script>"; 
    }
    }

        if (isset($_POST['updatefavicon'])) {
          // receive all input values from the form
          $websitefavicon = $_FILES['websitefavicon']['name'];
        
          $filename = rand(100000,999999).basename($websitefavicon);
          $target = "../../siteidentity/favicon/".$filename;
        
           // Finally, Inserting The Data
           $query = "UPDATE `siteidentity` SET `websitefavicon`='$filename' WHERE siteidentityid = 1";
            mysqli_query($db, $query);
        
            if (move_uploaded_file($_FILES['websitefavicon']['tmp_name'], $target)) {
                  echo "<script>alert('Favicon Has Been Successfully Updated !');
              window.location.href='../public/sitefavicon';
                  </script>";
            }else{
            echo "<script>alert('Favicon Failed To Be Update !');
            window.location.href='../public/sitefavicon';
                  </script>"; 
            }
            }
 


?>