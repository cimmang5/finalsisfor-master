<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$ID_Perusahaan = $_GET['ID Perusahaan'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>