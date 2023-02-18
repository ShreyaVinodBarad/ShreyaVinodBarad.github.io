<?php
$conn=new mysqli("localhost:3307","root","","shreyadb");
if($conn){
    echo "Connection Established!";
}
else{
    die(mysqli_error($conn));
}
if(isset($_POST["submit"])){
    $name=$conn->real_escape_string($_POST['fname']);
    $sql="INSERT INTO `assignment1_for _internship` (`Name`) VALUES (`name`)";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "The data is Successfully Inserted!";
    }
    else{
        die(mysqli_error($conn));
    }
}
?>