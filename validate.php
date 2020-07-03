<?php
$name=filter_input(INPUT_POST,'username');
$pwd=filter_input(INPUT_POST,'password');
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="users";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
// echo $name;
if(mysqli_connect_error())
{
 die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	$flag=0;
	$sql="select Username,Password,Name from registration";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		if($row["Username"]==$name)
		{
			if($row["Password"]==$pwd)
			{
				$flag=1;
				$var=$row["Name"];
				// echo "WELCOME  " . $row["Name"];
				// header("Location: secondpage.html");
			    // echo "<h1>dei".$row["Name"]."</h1>";
			}
		}
	}
	if($flag==0)
	{
		echo '<html>
<head>
<link rel="stylesheet" href="log.css">
</head>

<body>
<div class="heading">
<h1>STUDENT SKILL DEVELOPMENT ASSISTANT</h1>
</div>
<div class="topnav">
<a href="tut.html">Home</a>
<a href="about.html">About</a>
<a href="home3.html">Ranking</a>
<a href="tut.html">Try Again</a>
</div>';
		echo "USERNAME OR PASSWORD IS WRONG";
	}
	else
	{
		echo '<html>
<head>
<link rel="stylesheet" href="log.css">
<body>

<div class="heading">
<h1>STUDENT SKILL DEVELOPMENT ASSISTANT</h1>
</div>
<div class="topnav">
<a href="tut.html">Home</a>
<a href="about.html">About</a>
<a href="home3.html">Ranking</a>
<a href="tut.html">Signout</a>
</div>';
echo "welcome $var";
echo '<div class="login_wrapper">
<div class="inputelementwrapper">
<form method="get" action="academics.html">
<button class="secpagbut">ACADEMICS</button>
</form>
<br><br>
<form method="get" action="skilldevelopment.html">
<button class="secpagbut">SKILL DEVELOPMENT</button>
</form>
</div>
</div>
</body>
</html>';
	}
		
	
	
}
?>
