<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image_url = $_POST['image_url'];
 $image_name = $_POST['image_name'];
 
 require_once('connect.php');
 
 $sql ="SELECT id FROM img_upload ORDER BY id ASC";
 
 $result = mysqli_query($connect,$sql);
 
 
 while($row = mysqli_fetch_array($result)){

 }
 $domain_url = $_SERVER['SERVER_NAME'];
 $path = "img/$image_name.png";

  $upload_path = "$domain_url/android_image/$path";
  
 $sql = "INSERT INTO img_upload (img_url,img_name) VALUES ('$upload_path','$image_name')";
 
 if(mysqli_query($connect,$sql)){
 file_put_contents($path,base64_decode($image_url));
 echo "Upload Success";
 }
 
 mysqli_close($connect);
 }else{
 echo "Error";
 }