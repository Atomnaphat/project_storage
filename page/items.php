<?php
if(isset($_POST['save'])){
    if(!empty($_FILES['img'])){
      $new_name = "img-".$_SESSION['ID']."-".date("U");
      $name =$_FILES['img']['name'];
        $array = explode(".",$name);
        $img = $new_name.".".$array[count($array)-1];
        copy($_FILES['img']['tmp_name'],"img/$img");
        chmod("img/$img",0777);
      $id = $_POST['id'];
      $name = $_POST['name'];
       $sql = "insert into items (items_id,items_name,items_img)VALUES('$id','$name','$img')";
      mysqli_query($conn,$sql);
    }

}
?>
<!doctype html>
<html>
<head>
<meta charset="urf-8">
<title>Untitled Document</title>
</head>

<body>
    <h1>จัดการของ</h1><hr>

<div class="row">
    <div class="col-sm-3">
     <!--from add-->
    <from method="post" enctype="multipart/form-data"><!--************************************-->
    <label>id</label>
        <input type="text" class="form-control" name="id">
    <label>name</label>
        <input type="text" class="form-control" name="name">
    <label>img</label>
        <input type="text" class="form-control" name="img">
        <br>
        <input type="submit" class="btn btn-primary" name="save">
    </from>
    <!--from edit-->
    <!--from del-->
    </div>
    <div class="col-sm-9">
    <!--table preview-->
    <table class="table table-sm table-bordered">
        <thead align = "center">
        <th>id</th>
        <th>name</th>
        <th>image</th>
        <th></th>
        <th></th>
        </thead>
       <?php
       $sql =  "select * from items oder by items_name asc";
       $result = mysqli_query($conn,$sql) or die(mysqli_error());
       while($row=mysqli_fetch_array($result)){
       ?>
       <tr>
       <td><?php echo $row['items_id'];?></td>
       <td><?php echo $row['items_name'];?></td>
       <td></td>
       <td><a href="?del=<?php echo $row['items_id'];?>" class="btn btn-sm btn-danger">ลบ</a></td>
       <td><a href="?edit=<?php echo $row['items_id'];?>" class="btn btn-sm btn-warning">แก้ไข</a></td>
       </tr>
       <?php }?>
       </table>
    </div>
    </div>
</body>
</html>
