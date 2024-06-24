<?php

$server="localhost";
$username="root";
$password="";
$db="bca";

$conn = mysqli_connect($server,$username,$password,$db);

if ($conn){
//    echo "connected to server " ;

?>
<!-- 
<script>
    alert("Connected to server successfully!"); 
</script> -->


<?php
}
else{
    die("Could not connect to server " . mysqli_connect_error());
}


?>