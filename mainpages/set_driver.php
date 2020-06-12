<?php

session_start();
include 'config.php';
$driver = intval($_GET['driver']);
$crt_code = $_SESSION['crtcode'];
$sql="UPDATE tblorders SET driver_id = '$driver', status ='Ongoing' WHERE crt_code = '$crt_code'";
$result = mysqli_query($conn,$sql);


?>