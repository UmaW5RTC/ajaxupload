<?php
echo"Hello sir";
$collgid=$_REQUEST['colgid'];
$name=$_REQUEST['name'];

$file_name1=$_FILES['file1']['name'];
$file_name2=$_FILES['file2']['name'];
$file_name3=$_FILES['file3']['name'];
$file_name4=$_FILES['file4']['name'];

$file_type=$_FILES['file1']['type'];
$file_size=$_FILES['file1']['size'];
$file_temp=$_FILES['file1']['tmp_name'];

echo $file_name.$file_type.$file_size.$file_temp;
$path=basename('files/').$file_name;
move_uploaded_file($file_temp, $path);
echo"uploaded success fully";
