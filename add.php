<?php
require('conn.php');
// $db = mysql_select_db("my_db", $con); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $name = $_POST['name'];
    $contante = $_POST['contante'];
    $link = $_POST['link'];
    if($name !=''||$link !=''){
    //Insert Query of SQL
        $query = mysqli_query($con,"INSERT INTO `data`(`name`, `contante`, `link`) VALUES ('$name','$contante','$link')");
        echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    }
    else{
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
}
// mysql_close($connection); // Closing Connection with Server
header("Location:index.php");
?>