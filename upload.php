<?php
$target_dir = "";
$target_file = $target_dir . "binary_file.txt";
$file_type = $_REQUEST["ft"];
$file = "File_Output." . $file_type;
$uploadOk = 1;
// if(file_exists($target_file))
// 	{
// 		unlink($target_file);
// 	}
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		//chmod($target_file, 0777);
		shell_exec('python pyth.py ' . $file_type);
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " Having File type as " . $file_type . "  has been uploaded.<br/>";
               
        
  		if (file_exists($file)) {
		    header('Content-Description: File Transfer');
		    header('Content-Type: application/octet-stream');
		    header('Content-Disposition: attachment; filename="'.basename($file).'"');
		    header('Content-Transfer-Encoding: binary'); 
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($file));
		    ob_clean(); 
			flush();
		    readfile($file);
		}

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
?>
