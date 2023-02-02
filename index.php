<?php
session_start();
$u_id = $_SESSION['u_id'];
if(empty($u_id)){
    header('location: layout-login.php');
}
    $conn = mysqli_connect('localhost','root','','school') or die();
    mysqli_set_charset($conn,'UTF8');
    $sql = "SELECT * FROM users WHERE id = '$u_id' ";
    $query = mysqli_query($conn,$sql);
    $udata = mysqli_fetch_assoc($query);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>หน้าแรก</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1>ชื่อผู้ใช้งาน : <?=$udata['Fname']?> - <?=$udata['Lname']?> </h1>
    <a class="btn btn-danger" href="logout.php" role="button">ออกจากระบบ</a>
   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>