<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload image</title>
</head>
<body>
    <h1>upload image</h1>
    <form action="/api/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" id="file">
        <input type="submit" name="upload" value="submit">
        
    </form>
 
</body>
</html>