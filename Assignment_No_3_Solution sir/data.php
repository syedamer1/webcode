<?php
$conn = mysqli_connect("localhost","root","","crud");
$res=mysqli_query($conn,"SELECT * FROM users");
$data=array();
while ($row=mysqli_fetch_assoc($res)){
    $data[]=$row;
}
echo json_encode($data);
?>