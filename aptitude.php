<?php
 $host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="skilldevelop";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
 die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
		$sql="select Test_id,Title,No_ques,Users from aptitude";
        $result=$conn->query($sql);
		$flag=0;
	   
		echo '<html>
<head>
<link rel="stylesheet" href="log.css">
</head>

<body>
<div class="heading">
<h1>STUDENT SKILL DEVELOPMENT ASSISTANT</h1>
</div>
<div class="topnav">
<a href="validate.php">Home</a>
<a href="about.html">About</a>
<a href="ranking.php">Ranking</a>
<a href="tut.html">Signout</a>
</div>';
echo "<table border='2' width='500'>";
 echo"<tr>";
 echo "<th> Id </th>";
 echo "<th> Title </th>";
 echo "<th> Questions </th>";
 echo "<th> Solved Users </th>";
 echo "<th> Take test</th>";
 echo "</tr>";
 while($row=$result->fetch_assoc())
		{
			
			echo "<tr>";
			echo "<th width='25%'>".$row["Test_id"]."</th>";
			echo "<td width='50%'>".$row["Title"]."</td>";
			echo "<td width='50%'>".$row["No_ques"]."</td>";
			echo "<td width='50%'>".$row["Users"]."</td>";
			echo "<td width='50%'><a href='tut.html'>Take</a></td>";
			echo "</tr>";

		}
echo "</table>";
echo '</body>
</html>';
}
?>
