<?php
include "config.php";

$userid = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = '$userid'"; 

if(mysqli_query($conn, $sql)){

    header("Location: http://localhost/news_cms/admin/users.php");

}else{
    echo "<p style = 'color:red; margin:1px 0;'> Cant delete User Record </p>";
}
mysqli_close($conn);
?>