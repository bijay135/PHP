<?php
	session_start();
	if(isset($_SESSION['count'])){
		$_SESSION['count']+=1;
	}
	else{
		$_SESSION['count']=1;	
	}
	$msg="You have visited this site..".$_SESSION['count'].' times';
?>
<html>
<head>
<title>Session</title>
</head>
<body>
	<?php
		echo $msg;
		session_unset();
	?> 
</body>
</html>