<?php
if(isset($_POST['save'])){
    $id ="admin-".date("U");
    $name =$_POST['name'];
    $login =$_POST['login'];
    $pass=$_POST['pass'];
    $sql="insert into admin (admin_id,admin_name,admin_login,admin_password)values('$id','$name','$login','$pass')";
    mysqli_query($conn,$sql);
}
if(isset($_POST['del'])){
    $id = $_GET['del'];
    $sql = "delete form admin where admin_id = '$id'";
    mysqli_query($conn,$sql);
    header('location: ?page=admin');
}
?>
<!doctype html>
<html>
<head>
<meta charset="urf-8">
<title>Untitled Document</title>
</head>
<body>
    <h1>จัดการแอดมิน</h1>
    <div class="row">
    <div class="col-sm-3">
        <!----insert-->
        <b>เพิ่ม</b><hr>
        <form method="post">
            <label>name</label>
        <input type="text" class = "form-control" name = "name">
            <label>login</label>
        <input type="text" class = "form-control" name = "login">
            <label>password</label>
        <input type="text" class = "form-control" name = "pass">
            <br>
            <input type="submit" class="btn btn-primary" name="save" value="add">
        </form>
        <!--/////-->
        </div>
    <div class="col-sm-9">
         <!----view-->
         <b>รายการ</b><hr>
         <table class="table table-striped table-sm">
             <thead>
             <td>id</td>
             <td>name</td>
             <td>login</td>
             <td>del</td>
             </thead>
            <?php
             $sql="select * from admin order by admin_name asc";
             $result = mysqli_query($conn,$sql);
             while($row = mysqli_fetch_array($result)){
                //print_r($row);
             ?>
             <tr>
             <td><?php echo $row['admin_id'];?></td>
             <td><?php echo $row['admin_name'];?></td>
             <td><?php echo $row['admin_login'];?></td>
                 <td>
                     <a href="?page=admin&del=<?php echo $row['admin_id'];?>"class="btn btn-danger btn-sm">ลบ</a>
                 </td>
             </tr>
             <?php } ?>
         </table>
         <!--/////-->
    </div>
    <div>
         <!----del-->
        <?php
         $id =$_GET['del'];
         $sql2 = "select * from admin where admin_id = '$id'";
         $result2 = mysqli_query($conn,$sql2);
         $row2 = mysqli_fetch_array($result2);
         //print_r($row2);
        ?>
         <b>ลบ</b><hr>
        <b>คุณต้องการลบ <?php echo $row2['admin_name'];?> หรือไม่</b>
        <form method="post">
         <div class="row">
            <div class="col-sm-6"><a href="?page=admin" class="btn btn-secondary">กลับ</a></div>
            <div class="col-sm-6"><input type="submit" class="btn btn-danger" name="del" value="del"></div>
        </div>
        </form>
          <!--/////-->
    </div>
</body>
</html>
