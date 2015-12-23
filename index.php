<html>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
File : <input type="file" name="fileToUpload" id="fileToUpload"><br/>
File Type : <input type="text" name="ft"/>
<br/>
<input type="submit">
</form>

BIN - 2 - ANYTHING :- ViCky <?php echo $_REQUEST["ft"];echo $_REQUEST["fc"]; ?><br>
</body>
</html>
