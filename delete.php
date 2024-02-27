<?php
include "config.php";
$id =$_GET['id'];
$sql = "DELETE FROM 'utilisateur' WHERE id = $id";
$resultat=mysqli_query($link,$sql);
if($resultat){
    header("location: index.php?msg=record deleted successfully");
}
else{
    echo "failed: " .mysqli_error($link);
}
?>