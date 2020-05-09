<?php
session_start();
include 'koneksi.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            if($row['level'] == "admin"){
                $_SESSION['User'] = $row['email'];
                $_SESSION['level'] = $row['level'];
                header('Location: admin/index.php');
            }
            else if($row['level'] == "pegawai"){
                $_SESSION['User'] = $row['email'];
                $_SESSION['level'] = $row['level'];
                header('Location: pegawai/index.php');
            }
            else{
                echo "User dan/atau password salah";
            }
        }
    }
    
}
else{
    echo"<script>alert('Form Kosong');document.location.href='index.php'</script>";
}
?>