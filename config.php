<?php

include "../../global/conn.php";
require '../include/vendor/autoload.php';
date_default_timezone_set("Asia/Kuala_Lumpur");

if (isset($_POST['adduser'])) {
  // receive all input values from the form
  $userid=rand(99999, 999999);
  $email=mysqli_real_escape_string($db, $_POST['email']);
  $name=mysqli_real_escape_string($db, $_POST['name']);
  $phone=mysqli_real_escape_string($db, $_POST['phone']);
  $password=mysqli_real_escape_string($db, $_POST['password']);
  $usertype=mysqli_real_escape_string($db, $_POST['usertype']);

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

    if ($user['email'] == $email) {
      echo "<script>alert('User Has Already Been Registered !');
          window.location.href='../public/index';
              </script>";      
    }  else {
      $query = "INSERT INTO `user`(`userid`,`password`, `name`, `phone`, `email`, `usertype`) 
      VALUES 
    ('$userid','$password','$name','$phone','$email','$usertype')";
      mysqli_query($db, $query);
      echo "<script>alert('User Has Successfully Been Registered !');
      window.location.href='../public/user';
          </script>";
    }
}

if (isset($_POST['updateuser'])) {
  // receive all input values from the form
  $userid=mysqli_real_escape_string($db, $_POST['userid']);
  $password=mysqli_real_escape_string($db, $_POST['password']);
  $name=mysqli_real_escape_string($db, $_POST['name']);
  $phone=mysqli_real_escape_string($db, $_POST['phone']);
  $email=mysqli_real_escape_string($db, $_POST['email']);
  $usertype=mysqli_real_escape_string($db, $_POST['usertype']);

    $query = "UPDATE `user` SET `password`='$password',`phone`='$phone',`name`='$name',`email`='$email',`usertype`='$usertype' WHERE userid = $userid";
    mysqli_query($db, $query);
    echo "<script>alert('User Has Successfully Been Updated !');
    window.location.href='../public/user';
        </script>";

}

if (isset($_POST['addchicken'])) {
  // receive all input values from the form
  $chickenid=mysqli_real_escape_string($db, $_POST['chickenid']);
  $basketnumber=mysqli_real_escape_string($db, $_POST['basketnumber']);
  $name=mysqli_real_escape_string($db, $_POST['name']);
  $age=mysqli_real_escape_string($db, $_POST['age']);
  $weight=mysqli_real_escape_string($db, $_POST['weight']);
  $date=mysqli_real_escape_string($db, $_POST['date']);
  $reward=mysqli_real_escape_string($db, $_POST['reward']);
  $healthcondition=mysqli_real_escape_string($db, $_POST['healthcondition']);
  $barcode = rand(999999999,999999999999999);
  $barcodefilename = $barcode.".png";
  $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
  file_put_contents('../../barcode/'.$barcodefilename, $generator->getBarcode($barcode, $generator::TYPE_CODE_128));

  $query = "INSERT INTO `chicken`(`chickenid`,`basketnumber`,`name`, `age`, `weight`, `date`, `healthcondition`, `reward`, barcode) 
            VALUES 
           ('$chickenid','$basketnumber','$name','$age','$weight','$date','$healthcondition','$reward','$barcodefilename')";
            mysqli_query($db, $query);
            echo "<script>alert('Chicken Has Successfully Been Registered !');
            window.location.href='../public/chicken';
            </script>";

}

if (isset($_POST['updatechicken'])) {
  // receive all input values from the form
  $chickenid=mysqli_real_escape_string($db, $_POST['chickenid']);
  $basketnumber=mysqli_real_escape_string($db, $_POST['basketnumber']);
  $name=mysqli_real_escape_string($db, $_POST['name']);
  $age=mysqli_real_escape_string($db, $_POST['age']);
  $weight=mysqli_real_escape_string($db, $_POST['weight']);
  $date=mysqli_real_escape_string($db, $_POST['date']);
  $reward=mysqli_real_escape_string($db, $_POST['reward']);
  $healthcondition=mysqli_real_escape_string($db, $_POST['healthcondition']);

    $query = "UPDATE `chicken` SET `name`='$name',`age`='$age',`weight`='$weight',`date`='$date',`healthcondition`='$healthcondition' ,`reward`='$reward',`basketnumber`='$basketnumber' WHERE chickenid = $chickenid";
    mysqli_query($db, $query);
    echo "<script>alert('Chicken Has Successfully Been Updated !');
    window.location.href='../public/chicken';
        </script>";

}


?>