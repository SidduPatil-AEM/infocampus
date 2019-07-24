<?php
$header =''; 
$data=''; 
$conn = mysqli_connect("localhost", "root", "", "myphp");
$sql="SELECT * FROM user2";
$rec = mysqli_query($conn,$sql);      
while($row = mysqli_fetch_row($rec))
{
	$line = '';
	foreach($row as $value)
	{                                            
		if((!isset($value)) || ($value == ""))
		{
			$value = "\t";
		}
		else
		{
			$value = str_replace( '"' , '""' , $value );
			$value = '"' . $value . '"' . "\t";
		}
		$line .= $value;
	}
	$data .= trim( $line ) . "\n";
}
$data = str_replace("\r" , "" , $data); 
if ($data == "")
{
	$data = "\n No Record Found!n";                        
} 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Mydata.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
?>
