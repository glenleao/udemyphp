

<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">

</form>
	<?php

		if ($_SERVER["REQUEST_METHOD"] === "POST"){

			$file = $FILES["fileupload"];
			if ($file["error"]){
				throw new Exception("Error: ".$file["error")]);
			}

			$dirUploads = "uploads";
			if (!is_dir($dirUploads)){
				mkdir($dirUploads);
			}

			if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
				echo "Upload realizado com sucesso!";
			}
		}
