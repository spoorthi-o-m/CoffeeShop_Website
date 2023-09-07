<?php
$conn=mysqli_connect("localhost","root","","coffee");
if(isset($_POST['loginbtn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM coffee WHERE username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)){
echo"<script>alert('logged in')</script>";
header("refresh:2;url=home.html");        }
        else{
            echo "<script>
            alert('Login unsuccessful');
            </script>";
        }
    
}
?>