<?php include("connect.php");?>
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
<h1>ยินดีตอนรับ <?php echo $_SESSION['NAME']?>;</h1>


<div class="container-fluid">
      <div class="row">
     <div class="col-sm-3">
           <br>
         <b>menu</b>
         <hr>
         <a href="?page=rent" class="btn btn-secondary" style="width: 100%">ยืมของ</a><br><br>
         <a href="?page=resive" class="btn btn-secondary" style="width: 100%">คืนของ</a><br><br>
         <a href="?page=report1" class="btn btn-secondary" style="width: 100%">รายงานการยืม</a><br><br>
         <a href="?page=report2" class="btn btn-secondary" style="width: 100%">รายงานการคืน</a><br><br>
         <a href="?page=items" class="btn btn-secondary" style="width: 100%">จัดการของ</a><br><br>
         <a href="?page=member" class="btn btn-secondary" style="width: 100%">สมาชิก</a><br><br>
         <a href="?page=admin" class="btn btn-secondary" style="width: 100%">แอดมิน</a><br><br>
         <a href="logout.php" class="btn btn-secondary btn-sm" style="width: 100%"> Logout </a>
           </div>
     <div class="col-sm-9">
           <?php
         if(isset($_GET['page'])){
             switch($_GET['page']){
                 case "rent" : include("page/rent.php");break;
                 case "resive" : include("page/resive.php");break;
                 case "report1" : include("page/report1.php");break;
                 case "report2" : include("page/report2.php");break;
                 case "items" : include("page/items.php");break;
                 case "member" : include("page/member.php");break;
                 case "admin" : include("page/admin.php");break;
                 default:include("page/rent.php");break;
             }
         }else{
          header('location: ?page=rent');
         }
           ?>

           </div>
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
