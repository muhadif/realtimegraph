<?php
include 'connect.php';

$sql = "SELECT AVG(turbidity) as Average FROM  water ";
$result = mysqli_query($koneksi,$sql);
$data;
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $data=  $row['Average'];
        $data = floor($data);
    }
    echo $data;
}
?>