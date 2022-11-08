<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'healthy_skin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// if(isset($_Post['create'])){
    $cust_name=$_POST['cust_name'];

    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role_id='3';

    // $sql="insert into users(cust_name,phone,email,password,role_id) VALUE(?,?,?,?,?,?)";
    $stmtinsert=$con->prepare('insert into users(cust_name,phone,email,password,role_id) value(?,?,?,?,?,?)');
    $stmtinsert=$con->prepare('sissi',$cust_name,$phone,$email,$password,$role_id);
    $result=$stmtinsert->execute();
    if($result){
        echo" success";
    }else{
        echo"this s error saving the data";
    }

// }
// Try and connect using the info above.
// $sel1= "select * from admins where email='$email' and password ='$password'";
// $sel2= "select * from users where email='$email' and password ='$password'";
// $result1=mysqli_query($con,$sel1);
// $count1 =mysqli_num_rows($result1);

// $result2=mysqli_query($con,$sel2);
// $count2 =mysqli_num_rows($result2);

// if($count1 > 0){
//     $row=mysqli_fetch_assoc($result1);
//     $_SESSION['ROLE']= $row['role_id'];
//     $_SESSION['IS_LOGIN']= 'yes';
//     if($row['role_id'] ==1){
//         header('location:../home.php');
      
//     }
//     if($row['role_id'] ==2){
//         header('location:../home1.php');
      
//     }
// }
// elseif($count2 > 0){
//     $row=mysqli_fetch_assoc($result2);
//     $_SESSION['ROLE']= $row['role_id'];
//     $_SESSION['IS_LOGIN']= 'yes';
//         header('location:../home3.php');
      
  
// }
// else{
//     $error="Place enter correct login details";
// }




