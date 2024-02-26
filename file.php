<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
  <title>File Upload</title>
<body>


<div class="container" >
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<label for="arquivo">Choose a file:</label>
			<input accept=".jpg, .jpeg, .png, .gif, .pdf" class="inpdddut" name="fileToUpload" id="fileToUpload" type="file">
			<input value="Upload Image" type="submit" class="inpdddut">
		</form>
	</div>
</body>
</html>