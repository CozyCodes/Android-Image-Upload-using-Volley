<?php 
 
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','android_image');
 
 $connect = mysqli_connect(HOST,USER,PASS,DB) or die('Db connection failed');