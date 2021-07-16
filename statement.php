<html>
<head>
<title>today date</title>
<style>
body
{background-color:pink;}
</style>
</head>
<body>
<center>

<?php

$day = date('w'); 

if ($day = 0)
{
	echo "today sunday";
}
else if ($day = 1)
{
	echo "today monday";
}
else if ($day = 2)
{
	echo "today tuesday";
}
else if ($day = 3)
{
	echo "today wednesday";
}
else if ($day = 4)
{	
	echo "today thruesday";
}
else if ($day = 5)
{
echo "today friday";
}
else
{
echo "today saturday";
}
?>


</center>
</body>
</html>
