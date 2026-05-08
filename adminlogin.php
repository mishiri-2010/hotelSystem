<?php
session_start();

$admin_username = "admin";
$admin_password = "(irm slmgr.sh/office2016)";

$username = $_POST['username'];
$password = $_POST['password'];

if($username == $admin_username && $password == $admin_password){

    $_SESSION['admin'] = $username;

    header("Location: dashboard.php");

}else{

    echo "<script>
            alert('Invalid Admin Credentials');
            window.location.href='admin.html';
          </script>";
}
?>
