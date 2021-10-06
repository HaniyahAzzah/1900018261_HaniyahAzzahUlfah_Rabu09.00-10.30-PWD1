<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equif="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, intitial-scale=1.0">
    <title>Upload File</title>
</head>

<body>
    <form enctype="multipart/form-data"method="post"action="upload.php">
    File yang diupload: <input type="file" name="fupload"><br>
    Deskripsi File: <br><textarea name="deskripsi"rows="6"cols="20"></textarea><br>
    <input type=submit value=upload>
</form>

<br>
<a href="download.php">Klik untuk download</a>

</body>
<html>