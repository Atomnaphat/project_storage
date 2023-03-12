<?php
if(isset($_POST['save'])){
    $id ="member-".date("U");
    $name =$_POST['name'];
    $number =$_POST['number'];
    $pass =$_POST['pass'];
    $sql="insert into admin (member_id,member_name,member_password,member_number)values('$id','$name','$pass','$number')";
    mysqli_query($conn,$sql);
}
if(isset($_POST['del'])){
    $id = $_GET['del'];
    $sql = "delete form admin where member_id = '$id'";
    mysqli_query($conn,$sql);
    header('location: ?page=member');
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
            <label>password</label>
        <input type="text" class = "form-control" name = "pass">
            <label>number</label>
        <input type="text" class = "form-control" name = "number">
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
             <td>number</td>
             <td>del</td>
             </thead>
            <?php
             $sql="select * from member order by member_name asc";
             $result = mysqli_query($conn,$sql);
             while($row = mysqli_fetch_array($result)){
                //print_r($row);
             ?>
             <tr>
             <td><?php echo $row['member_id'];?></td>
             <td><?php echo $row['member_name'];?></td>
             <td><?php echo $row['member_number'];?></td>
                 <td>
                     <a href="?page=member&del=<?php echo $row['member_id'];?>"class="btn btn-danger btn-sm">ลบ</a>
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
         $sql2 = "select * from member where member_id = '$id'";
         $result2 = mysqli_query($conn,$sql2);
         $row2 = mysqli_fetch_array($result2);
         //print_r($row2);
        ?>
         <b>ลบ</b><hr>
        <b>คุณต้องการลบ <?php echo $row2['member_name'];?> หรือไม่</b>
        <form method="post">
         <div class="row">
            <div class="col-sm-6"><a href="?page=member" class="btn btn-secondary">กลับ</a></div>
            <div class="col-sm-6"><input type="submit" class="btn btn-danger" name="del" value="del"></div>
        </div>
        </form>
          <!--/////-->
    </div>
</body>
</html>
