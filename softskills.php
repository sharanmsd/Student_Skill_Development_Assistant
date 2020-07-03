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
		$sql="select session_id,title,expert,date_link from softskills";
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
 echo "<th> SESSION ID </th>";
 echo "<th> TITLE </th>";
 echo "<th> EXPERT </th>";
 echo "<th> DATE </th>";
 echo "<th> LINK </th>";
 echo "</tr>";
 while($row=$result->fetch_assoc())
		{
			
			echo "<tr>";
			echo "<th width='25%'>".$row["session_id"]."</th>";
			echo "<td width='50%'>".$row["title"]."</td>";
			echo "<td width='50%'>".$row["expert"]."</td>";
			echo "<td width='50%'>".$row["date_link"]."</td>";
			echo "<td width='50%'><a href='tut.html'>Clickhere</a></td>";
			echo "</tr>";
		}
echo "</table>";
echo '</body>
</html>';
}
?>
