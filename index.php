<?php
include("connect.php");
//chklogin
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "select * from admin where admin_login='$user' and admin_password = '$pass'";
    $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    $row = mysqli_num_rows($result);
    $rowdata = mysqli_fetch_array($result);
    //print_r($rowdata);
    if($row>=1){
        $_SESSION['ID'] = $rowdata['admin_id'];
        $_SESSION['NAME'] = $rowdata['admin_id'];
        header('location: home.php');
    }else{
        echo "<script>alert('ชื่อผู้ใช้/รหัสผ่านผิด')</script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>storage_items</title>
  </head>
  <body>

      <div class="container">
      <div class="row">
          <div class ="col-sm-4"></div>
          <div class ="col-sm-4">
          <form method="post">
              <label>ชื่อผู้ใช้</label>
              <input type="text" name="user" class="form-control">
              <label>รหัสผ่าน</label>
               <input type="password" name="pass" class="form-control">
              <br>
              <input type="submit" value="login" name="login" class="btn-primary">
              </form>
          </div>
          <div class="col-sm-4"></div>
          </div>
      </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
