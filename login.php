<?php
    $conn = mysqli_connect('localhost','root','','school') or die();
    mysqli_set_charset($conn,'UTF8');

    $uname = $_REQUEST['Username'];
    $pass = $_REQUEST['pwd'];
    
    $sql = "SELECT * 
            FROM users 
            WHERE Username ='$uname' AND pwd ='$pass' ";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)==1){
        session_start();
        $userdata = mysqli_fetch_assoc($query);
        $_SESSION['u_id'] = $userdata['id'];

        echo '<script>';
        echo 'alert("เข้าสู่ระบบสำเร็จ"); ';
        echo 'window.location.href="index.php" ';
        echo '</script>';
    }else{
        echo '<script>';
        echo 'alert("ไม่พบผู้ใช้งาน"); ';
        echo 'window.location.href="layout-login.php" ';
        echo '</script>';
    }
?>