<!<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>POST</title>
</head>
<body>

<?php if (isset($_POST["submit"])): ?>
   <h1>Selamat datang, <?= $_POST["nama"] ?></h1>     
<?php endif ?>


<form method="POST">
        masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">kirim</button>

</form>

</body>
</html>