<?php
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];

  	//create images forlder
  	if (!is_dir('images')) {
	  mkdir('images');
  	}
  	// image file directory
  	$target_dir = "images/".basename($image);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
  		echo "Image uploaded successfully";
  	}else{
  		echo  "Failed to upload image";
  	}
  }
?>