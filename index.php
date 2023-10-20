<?php require('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="post" e>
        <label for="name">NAME</label>
        <input type="text" name="name">
        <label for="name">CONTENT</label>
        <input type="text" name="contante">
        <label for="name">LINK</label>
        <input type="text" name="link">
        <input type="submit" name="submit" value="ADD">
    </form>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>CONTENT</th>
            <th>LINK</th>
            <th>DATE</th>
            <th>EDIT</th>
            <th>DELET</th>
        </thead>
        <tbody>
        <?php
            include('conn.php');
            $query = mysqli_query($con, "SELECT * FROM `data`");
            while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['contante']; ?></td>
                <td><?php echo $row['link']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>">EDIT</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>">DELETE</a></td>
            </tr>
         <?php
        }
         ?>
        </tbody>
    </table>
</body>
</html>