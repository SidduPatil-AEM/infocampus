<?php
$mydata = "<table border='1' align='center' style='border:5px solid red; border-radius:10px;'> 
			<tr>
				<th>Full Name</th>
				<th>Mobile </th>
				<th>Email</th>
				<th>Password</th>
			</tr>";
 $conn = mysqli_connect("localhost", "root", "","myphp");
 
 $sql="select * from user2";
 $res = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_object($res))
 {
	 $mydata = $mydata . "<tr>";
	 
	 $mydata = $mydata . "<td> $row->name </td>";
	 $mydata = $mydata . "<td> $row->mobile </td>";
	 $mydata = $mydata . "<td> $row->email </td>";
	 $mydata = $mydata . "<td> $row->password </td>";
	 
	 $mydata = $mydata . "</tr>";
 }
  $mydata = $mydata . "</table>";

$data = $mydata;

//echo $data;

//exit();// termination

require_once("dompdf/dompdf_config.inc.php");

$fileName = "user_".time().".pdf";
  if ( get_magic_quotes_gpc() )
  $old_limit = ini_set("memory_limit", "200M");
  $dompdf = new DOMPDF();
  $dompdf->load_html($data);
  $dompdf->set_paper('a3','portrait');
  $dompdf->render();
  //$dompdf->stream($fileName);
  // for download option
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
// Download Process
    header('Content-type: application/pdf');
// It will be called for download
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    header("Content-Transfer-Encoding: binary");
   echo $dompdf->output();
    //$dompdf->stream($fileName);
    
  exit(0);
  
?>