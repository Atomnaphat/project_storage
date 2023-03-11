<?php
if(isset($_POST['save'])){
    $id = "admin-".date("U");
    $name = $POST['name'];
    $login = $POST['login'];
    $pass=$_POST['pass'];
    $sql="insert into admin (admin_id,admin_name,admin_login,admin_password)values('$id','$name','$login','$pass')";
    mysqli_query($conn,$sql);
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
        <input type="text" class ="form-control" name="name">
            <label>login</label>
        <input type="text" class ="form-control" name="login">
            <label>pass</label>
        <input type="text" class ="form-control" name="pass">
            <br>
            <input type="submit" class="btn btn-primary" name="save" value="add">
        </form>
        <!--/////-->
        </div>
    <div class="col-sm-9"></div>
    </div>
</body>
</html>
