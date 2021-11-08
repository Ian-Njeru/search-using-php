<?php
$servername = "localhost";
$user = "root";
$password = "";
$db_name = "sample";

$connect = mysqli_connect($servername, $user, $password, $db_name);
if(mysqli_connect_errno()){
	echo "Error: ". mysqli_error;
}

	
 if(isset($_POST['search'])){
	 $search = $_POST['search'];
	 
	 $sql = "SELECT * FROM customer WHERE cust_name REGEXP '".$search."'";
	 
	 $result = mysqli_query($connect, $sql);
	 
	 if(mysqli_num_rows($result)>0){
		 $count = 0;
		 echo "<table border = \"1\">
		 <tr>
			 <th>No</th>
			 <th>Name</th>
			 </tr>";
		 while($rows = mysqli_fetch_assoc($result)){
			 $cust_name = $rows['CUST_NAME'];
			 ++$count;
			 echo "
			 <tr>
				<td>$count</td>
				<td>$cust_name</td>
			 </tr>"; 
		 }
		 echo "</table>";
	 }else{
		 echo "No record found";
	 }
 }	 