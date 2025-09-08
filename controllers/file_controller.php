<?php 
session_start();
include "../repository/file_repository.php";

//$file = "test.txt";
// if(is_uploaded_file($file)) {
//   echo ("$file is uploaded via HTTP POST");
// } else {
//   echo ("$file is not uploaded via HTTP POST");
// }
check_files($_FILES);



// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }