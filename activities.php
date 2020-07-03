<?php
 $host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="academics";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
 die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
		$sql="select Title,Mode,Date_Time,Duration,Expert from activities";
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
<a href="home3.html">Ranking</a>
<a href="tut.html">Signout</a>
</div>';
echo "<table border='2' width='500'>";
 echo"<tr>";
 echo "<th> TITLE </th>";
 echo "<th> MODE </th>";
 echo "<th> DATE AND TIME </th>";
 echo "<th> DURATION </th>";
 echo "<th> EXPERT </th>";
 echo "<th> LINK </th>";
 echo "</tr>";
 while($row=$result->fetch_assoc())
		{
			
			echo "<tr>";
			echo "<th width='25%'>".$row["Title"]."</th>";
			echo "<td width='50%'>".$row["Mode"]."</td>";
			echo "<td width='50%'>".$row["Date_Time"]."</td>";
			echo "<td width='50%'>".$row["Duration"]."</td>";
			echo "<td width='50%'>".$row["Expert"]."</td>";
			echo "<td width='50%'><a href='tut.html'>click here</a></td>";
			echo "</tr>";

		}
echo "</table>";
echo '</body>
</html>';
}
?>
