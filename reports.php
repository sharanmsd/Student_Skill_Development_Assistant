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
		$sql="select test_title,marks,remarks,reference from reports";
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
 echo "<th> TEST_TITLE </th>";
 echo "<th> MARKS </th>";
 echo "<th> REMARKS </th>";
 echo "<th> REFERENCE </th>";
 echo "</tr>";
 while($row=$result->fetch_assoc())
		{
			
			echo "<tr>";
			echo "<th width='25%'>".$row["test_title"]."</th>";
			echo "<td width='50%'>".$row["marks"]."</td>";
			echo "<td width='50%'>".$row["remarks"]."</td>";
			echo "<td width='50%'>".$row["reference"]."</td>";
			echo "</tr>";

		}
echo "</table>";
echo "<img src='data:image/png;base64,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'";
echo '</body>
</html>';
}
?>
