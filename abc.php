<?php 
$code=$_POST['anumber']; 
$code1=$_POST['mnumber'];
$con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'telephone');
 $q="select Mobileno from networkdata where Aadharno=$code ";
 $result=mysqli_query($con,$q);  
  $row=mysqli_fetch_array($result);
  $num=mysqli_num_rows($result);
  for($i=0;$i<$num;$i++)
	  echo "$num";
  
  
  for($i=1;$i<=$num;$i++)
  {
    if($code1==$row['Mobileno'] )
    {
        
 echo "Total number of connection is $num";
    }
    else
    {
 echo "not found";
    }
  }
mysqli_close($con);
?>