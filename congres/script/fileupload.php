<!--Originele script van W3Schools-->

<!DOCTYPE html>
<html>
<head>
	<title>Smartwatch Congres Groningen</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../stylesheets/congres.css"/>
</head>
<body>
<h1>Smartwatch Congres Deelnemers</h1>
<div class="sectie">
<?php

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
	echo "Sorry, dit bestand bestaat al.";
	$uploadOk = 0;
}
// Check file size
if ($_FILES['fileToUpload']['size'] > 500000) {
	echo "Het bestand is te groot.";
	$uploadOk = 0;
}
// Allow certain file formats
if($fileType != "pdf" ) {
	echo "Sorry, alleen PDF bestanden zijn toegestaan.";
	$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Helaas, we konden je bestand niet uploaden.";
// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
		echo "The file ". basename( $_FILES['fileToUpload']['name']). " has been uploaded.";
	} else {
		echo "Helaas, er was een foutmelding bij het uploaden.";
	}
}
?>
<br>
<a href="../fileupload.html">Terug

</div>
<div class="footer">
	<script language='javascript' src='../script/footer.js'>
	</script>
</div>
</body>
</html>