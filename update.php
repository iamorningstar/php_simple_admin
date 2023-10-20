<?php
// Include the database connection file
include("conn.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
  $id = $_POST['id'];

  $name = $res['name'];
  $contante = $res['contante'];
  $link = $res['link'];

  // Update user data
  $result = mysqli_query($con, "UPDATE `data` SET name='$name', contante='$contante', link='$link' WHERE id=$id");

  // Redirect to homepage to display updated user in list
  header("Location: index.php");
}
?>
