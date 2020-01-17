if (mysqli_query($con,$sql)){
	echo "recored insert successfully";
}
else{
	echo "Error".$sql."<br>".mysqli_error($con);
}

mysqli_close($con);
?>