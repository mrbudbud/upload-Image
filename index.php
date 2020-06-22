
<?php
require 'functions.php';

$file = query("SELECT * FROM images");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <title>Home</title>
</head>
<body>

  <div class="container my-4 ">
    <nav class="navbar navbar-light bg-light">
        <a href="upload.php" class="btn btn-primary" type="button">Upload Gambar</a>
    </nav>

      <table class="table my-4">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Image</th>
          <th scope="col">File Name</th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 1; ?>
			<?php foreach ($file as $files) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td><img src="image/<?= $files["image"] ?>" width="50" height="50"></td>
          <td><?= $files["image"]; ?></td>
        </tr>
      
				<?php $i++ ?>
			<?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>
</html>