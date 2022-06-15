<?php 

$host="localhost";
$user="root";
$password="";
$db="project";

$con=mysqli_connect($host,$user,$password,$db);


if(isset($_POST['submit'])){
    
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $confim_password=$_POST['cpass'];
    
    $sql="INSERT INTO `signup`(`Username`, `Email`, `Password`, `Confirmpassword`) VALUES ('$uname','$email','$password','$confim_password')";
    
    $result=mysqli_query($con,$sql);
    
    if($result){
        ?>
        <script>
            alert("Congratulations You Have Succesfully Signed In");
            location.replace("index.html")
        </script>
<?php
    }
    else{
    ?>
    
        <script>
        alert("Check Your credentials");
        location.replace("signup.html")
    </script>
    <?php
    }
        
}
?>