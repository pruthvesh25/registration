<?php 

include 'form.html';

echo "</br>";
echo "INSTRUCTIONS:";
echo "</br>";
echo"1)The name of image should be firstname_rollno ";
echo "</br>";
echo" Eg: pruthvesh_1 ";
echo "</br>";
echo "2) Write in lowercase";
echo "</br>";
echo" 3) Do not include zeros before the roll no . ";
echo "</br>";
echo "Eg: 1 ,  not 01";
echo "</br>";
echo "</br>";
echo "Upload Your Image.";


?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
	 <div class="panel-footer text-right">
                   <small> &copy; danien </small> 
                </div>  
</body>
</html>