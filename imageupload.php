<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<br>
		<input type="file" name="image">
		<input type="submit" name="submit" value="Upload">
	</form>

	<?php 

		if (isset($_POST['submit'])) {
			# code...

			if (getimagesize($_FILES['image']['tmp_name']) == FALSE) {
				# code...
				echo "Please select an image";

			}
			else{

				$image = addslashes($_FILES['image']['tmp_name']);
				$name =  addslashes($_FILES['image']['name']);

				$image = file_get_contents($image);
				$image = base64_encode($image);
				saveimage($name,$image);

			}
		}
		displayimage();
		function saveimage($name,$image){

			$con = mysql_connect("localhost","root","");
			mysql_select_db("images",$con);
			$query = "INSERT INTO images (name,image) VALUES('$name','$image')";
			$result = mysql_query($query,$con);
			if ($result) {
				echo "Image Uploaded";
			}
			else{
				echo "Not uploaded";
			}

		}

		function displayimage(){

			$con = mysql_connect("localhost","root","");
			mysql_select_db("images",$con);
			$query = "SELECT * FROM images";
			$result = mysql_query($query,$con);
			while ($row = mysql_fetch_array($result)) {
				# code...
				echo '<img height="300" width="300" src="data:image;base64,'.$row[2].'">';

			}
			mysql_close($con);
		}

	 ?>
</body>
</html>