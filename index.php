<?php

if(!empty($_GET["data"]))
{
		echo $_GET["data"];
}
?>
<html>
<head>
<meta charset="utf-8"/>
<title>PHP student registration</title>
<style>
body {
  background: #35dc9b;
}

h1 {
  display: table;
  margin: 40px auto;
  color: #fff;
  font: 20px Helvetica;
  text-transform: uppercase;
  letter-spacing: 3px;
}

form {
  display: table;
  margin: 40px auto;

  label {
    position: relative;
    display: block;

    input {
      border: none;
      padding: 20px;
      width: 300px;
      margin-bottom: 20px;
      font-size: 18px;

      }

</style>
</head>
<body>
	<h1>student register</h1>

<form action="students.php" method="POST">
  <label>
    <input type="text" placeholder="name" name="name">
    <span>Name</span>
  </label>

  <label>
    <input type="text" placeholder="college_id" name="college_id">
    <span>college id</span>
  </label>

  <input type="submit" value="Send">
</form>
</body>
</html>
