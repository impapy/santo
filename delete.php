<?php
$error_fields=array();
////////////* table drinks_details *//////////////
if((isset($_GET['table']) && !empty($_GET['table'])) && $_GET['table']=="drink_d")
{
	
	$conn=mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b11561761067aa","47d601df","heroku_2cbb760f9cece40");
	if(! $conn)
	{
		echo mysqli_connect_error();
		exit;
	}
	$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
	$query="DELETE FROM drinks_details WHERE drinks_details.id='$id'";
			if(mysqli_query($conn,$query))
		{
			header("location:table_admin.php?drinks=drinks");
			exit;
		}
		else
		{
			echo mysqli_error($conn);
		}
	mysqli_close($conn);
}

////////////////* table drinks_extra *//////////////

else if((isset($_GET['table']) && !empty($_GET['table'])) && $_GET['table']=="drink_ex")
{
	
	$conn=mysqli_connect("localhost","root","","santorini_db");
	if(! $conn)
	{
		echo mysqli_connect_error();
		exit;
	}
	$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
	$query="DELETE FROM drinks_extra WHERE drinks_extra.id='$id'";
			if(mysqli_query($conn,$query))
		{
			header("location:table_admin.php?drinks=drinks");
			exit;
		}
		else
		{
			echo mysqli_error($conn);
		}
	mysqli_close($conn);
}

//////////////* table foods_details */////////////

else if((isset($_GET['table']) && !empty($_GET['table'])) && $_GET['table']=="foods_d")
{
	
	$conn=mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b11561761067aa","47d601df","heroku_2cbb760f9cece40");
	if(! $conn)
	{
		echo mysqli_connect_error();
		exit;
	}
	$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
	$query="DELETE FROM foods_details WHERE foods_details.id='$id'";
			if(mysqli_query($conn,$query))
		{
			header("location:table_admin.php?foods=foods");
			exit;
		}
		else
		{
			echo mysqli_error($conn);
		}
	mysqli_close($conn);
}

//////////////* table foods extra */////////////

else if((isset($_GET['table']) && !empty($_GET['table'])) && $_GET['table']=="foods_ex")
{
	
	$conn=mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b11561761067aa","47d601df","heroku_2cbb760f9cece40");
	if(! $conn)
	{
		echo mysqli_connect_error();
		exit;
	}
	$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
	$query="DELETE FROM foods_extra WHERE foods_extra.id='$id'";
			if(mysqli_query($conn,$query))
		{
			header("location:table_admin.php?foods=foods");
			exit;
		}
		else
		{
			echo mysqli_error($conn);
		}
	mysqli_close($conn);
}

///////////////* table offer *///////////
else if((isset($_GET['table']) && !empty($_GET['table'])) && $_GET['table']=="offer")
{
	
	$conn=mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b11561761067aa","47d601df","heroku_2cbb760f9cece40");
	if(! $conn)
	{
		echo mysqli_connect_error();
		exit;
	}
	$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
	$query="DELETE FROM offer WHERE offer.id='$id'";
			if(mysqli_query($conn,$query))
		{
			header("location:list.php");
			exit;
		}
		else
		{
			echo mysqli_error($conn);
		}
	mysqli_close($conn);
}

else
{
	$error_fields[]="undelete";
		header("location:table_admin.php?foods=foods&drinks=drinks&error_fields=".implode(",",$error_fields));
		exit;
}




?>