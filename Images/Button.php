<?php
$conn=new mysqli("localhost:3307","root","","internship_skill_vertex");
if($conn){
    echo "Connection Established!";
}
else{
    die(mysqli_error($conn));
}
if(isset($_POST['submit'])){
    if(!empty($_POST['name'])){
        $userName=$_POST["fname"];
        $sql="INSERT INTO `internship_table1` (`Name`) VALUES ('$userName')";
        $run=mysqli_query($conn,$sql) or die (mysqli_error($conn));
        if($run){
            echo "Form Submitted Successfully!";
        }
        else{
            echo "Form Not Submitted!";
        }
    }
    else{
        echo "All Fields Required!";
    }
}

?>