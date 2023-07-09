<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Przesyłanie plików</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Przesyłanie plików</h1>
  <?php if(isset($_GET['upload']) && $_GET['upload'] == 'success'): ?>
    <div class="success">Plik został pomyślnie przesłany na serwer.</div>
  <?php endif; ?>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="plik" id="plik">
    <button type="submit" name="submit">Wyślij plik</button>
  </form>
</body>
</html>