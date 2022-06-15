<?php 
$host="localhost";
$user="root";
$password="";
$db="project";

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['Submit'])){
    
    $uname=$_POST['uname'];
    $password=$_POST['pass'];
    
    $sql="SELECT * FROM `signup` WHERE Username='$uname' and Password='$password'";
    
    $result=mysqli_query($con,$sql);
    
    if($result){
        ?>
        <script>
            alert("Congratulations You Have Succesfully Logged In");
            location.replace("index.html")
        </script>
<?php
    }
    else{
    ?>
    
        <script>
        alert("Check Your credentials")
        location.replace("login.html")
    </script>
    <?php
    }
        
}
?>