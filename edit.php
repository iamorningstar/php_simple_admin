<?php
// Include the database connection file
include("conn.php");
// Get id from URL to edit that user
$id = $_GET['id'];

// Fetch user data based on id
$result = mysqli_query($con, "SELECT * FROM `data` WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
  $name = $res['name'];
  $contante = $res['contante'];
  $link = $res['link'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <form name="update" method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label for="name">NAME</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <label for="name">CONTENT</label>
        <input type="text" name="contante" value="<?php echo $contante; ?>">
        <label for="name">LINK</label>
        <input type="text" name="link" value="<?php echo $link; ?>">
        <input type="submit" name="update" value="ADD">
    </form>
</body>
</html>