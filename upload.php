
<?php
require 'functions.php';

if (isset($_POST["submit"])) {


	if (tambah($_POST) > 0) {
		echo "
	<script>
	alert('data berhasil ditambahkan!');
	document.location.href ='index.php';
	</script>
	";
	} else {
		echo "<script>
	alert('data gagal ditambahkan!');
	document.location.href ='index.php';
	</script>
	";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/all.css">
  <script src="js/all.js"></script>
  <title>Upload</title>
</head>
<body>

  <div class="container my-4">
    <nav class="navbar navbar-light bg-light">
        <a href="index.php" class="btn btn-secondary" type="button">Home</a>
    </nav>
  </div>

<div class="container my-3">
    <form action="" method="post" enctype="multipart/form-data">

      <ul>
          <label for="image">Image :</label>
          <input type="file" name="image" id="image">
          <br>
          <label for="nama">Nama :</label>
          <input type="text" name="nama" id="nama" required>
        </li> <br>
          <button type="submit" name="submit">Upload!</button>
        </li>
      </ul>

    </form>

</div>


</body>
</html>