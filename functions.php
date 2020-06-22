<?php

  //koneksi ke database
  $conn = mysqli_connect("localhost", "root", "", "bre");

  //Queri database
  function query($query)
  {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }

  
function tambah($data)
{
	global $conn;

	// $id = $data["id"];
	$nama = $data["nama"];

	$image = upload();
	if (!$image)
	{
		return false;
	}

	$query = "INSERT INTO images
		VALUES
	('', '$image', '$nama')
	";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function upload()
{
	$fileName = $_FILES['image']['name'];
	$sizeFile = $_FILES['image']['size'];
	$error 		= $_FILES['image']['error'];
	$tmpName 	= $_FILES['image']['tmp_name'];

	if ($error === 4) 
	{
		echo " <script>
							alert('input file !!');
					</script> ";
		return false;
	}

	$extensionImageValid = ['jpg', 'png', 'jpeg'];
	$extensionImage = explode('.', $fileName);
	$extensionImage = strtolower(end($extensionImage));

		if (!in_array($extensionImage, $extensionImageValid))
		{
			echo " <script>
							alert('Your File is NOT Image !!');
					</script> ";
			return false;
		}

		if ($sizeFile >  1000000)
		{
			echo " <script>
							alert('Your File is too BIG !!');
					</script> ";
			return false;
		}

		move_uploaded_file($tmpName, 'image/'. $fileName);
		return $fileName;

}


?>