<?php
 $n=$_POST['anumber'];
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'telephone');
 $q=" select * from phonedata2 where Aadharno=$n ";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if($num!=0)
 {
 echo "Hello your AADHAR NUMBER is $n ";
 echo "<br>";
 echo "Total number of connection is $num";
 echo "<br>";
 for($i=1;$i<=$num;$i++)
 {
 $row=mysqli_fetch_array($result);
 echo"where mobile number is: ". $row['Mobileno']." tsp name is: ".$row['tsp'];
 echo "<br>";
 }
 }
 else
 {
	 echo "No such Aadharno exist in database";
 }
 mysqli_close($con);
?>