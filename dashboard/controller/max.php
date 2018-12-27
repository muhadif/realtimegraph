<?php
include 'connect.php';

$sql = "SELECT MAX(turbidity) as 'Max Data' FROM  water ";
$result = mysqli_query($koneksi,$sql);
$data;
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $data=  $row['Max Data'];
        $data = floor($data);
    }
    echo $data;
}
?>