<?php
$conn=new mysqli("localhost:3307","root","","shreyadb");
if($conn){
    echo "Connection Established!";
}
else{
    die(mysqli_error($conn));
}
if(isset($_POST["submit"])){
    $userName=$conn->real_escape_string($_POST['fname']);
    $sql="INSERT INTO `internship_table1` (`Name`) VALUES ('$userName');";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "The data is Successfully Inserted!";
    }
    else{
        die(mysqli_error($conn));
    }
}
?>