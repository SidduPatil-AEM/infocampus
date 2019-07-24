<?php
$filename = time().$_FILES['myfile']['name']; // time always create unique or new number
$filesize = $_FILES['myfile']['size'];
$filetype = $_FILES['myfile']['type'];
$temploc = $_FILES['myfile']['tmp_name'];

// by default 2mb file is allowed
//echo $filesize. "<hr>";
//echo $filetype. "<hr>";
//echo $temploc;

move_uploaded_file($temploc,"photo/$filename");
echo "uploaded,please check photo folder";

$conn = mysqli_connect("localhost","root","","fileupload");
$sql = "insert into userphoto(name,filesize) values('$filename','$filesize')";
mysqli_query($conn,$sql);
header("Location:index.php");

?>