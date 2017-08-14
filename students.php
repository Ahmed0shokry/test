<?php
if (!empty($_POST['name']) && !empty($_POST['college_id'])){
	$name=utf8_encode($_POST["name"]);
	$gollege_id=utf8_encode($_POST["college_id"]);
/*
	$text =$name;
var_dump(mb_detect_encoding($name));
if(mb_detect_encoding($text)== "UTF-8")
    $decoded_text = iconv(mb_detect_encoding($text), 'UTF-8', $text);
	var_dump($name);
exit();

*/

echo $name;
exit();


	$connection = mysqli_connect("localhost","root","","register_students");
	if(!$connection)
	{
		 header("Location:index.php?data='no connection'");
	}
	$sql = "INSERT INTO `students` (name,college_id) VALUES ('$name', '$gollege_id')";
  mysqli_query($connection,"set students 'utf8'");
	$result = mysqli_query($connection,$sql);

	if($result)
	{
	    header("Location:index.php?data='added successfully'");
	}
	else {
		header("Location:index.php?data='something wrong'");
	}


}
else
{
	header("Location:index.php?data='invalid data'");

}

?>
