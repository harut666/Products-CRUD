<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','root');
//mistake to connect in data base
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


?>




<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Products CRUD</title>
</head>
<body>
<h1>Create new product</h1>
<form>
    <div class="mb-3">
        <label  class="form-label">Product Image</label>
        <br>
        <input type="file"  >
    </div>
    <div class="mb-3">
        <label  class="form-label">Product Title</label>
        <input type="text" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Product Description</label>
        <textarea  class="form-control" ></textarea>
    </div>
    <div class="mb-3">
        <label  class="form-label">Product Price</label>
        <input type="number" class="form-control" step="0.1">
    </div>

    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
</body>
</html>