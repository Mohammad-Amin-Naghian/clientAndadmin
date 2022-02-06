<?php
include_once 'connection.php';
global $conn;
if (isset($_POST['btn_about'])) {
    if (!empty($_POST['comment'])) {
        $result = $conn->prepare("INSERT INTO about_us(About_Site) VALUES (?)");
        $result->bindValue(1,$_POST['comment']);
        $result->execute();
        $message = 'تغییرات با موفقیت اعمال شد';
    } else {
        $error = 'هیچ تغییری اعمال نکردید';
    }
}
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
   <div class="row">
       <div class="col-sm-8 offset-sm-2">
           <div class="card">
               <div class="card-header">اضافه کردن درباره ی سایت</div>
               <?php
               if (!empty($message)) {
               ?>
               <div class="col-sm-12 mx-auto alert alert-success alert-dismissible fade show">
                   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                   <?php
                   echo $message;
                   ?>
               </div>
               <?php
               }
               ?>
               <?php
               if (!empty($error)) {
                   ?>
                   <div class="col-sm-12 mx-auto alert alert-danger alert-dismissible fade show">
                       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                       <?php
                       echo $error;
                       ?>
                   </div>
                   <?php
               }
               ?>
               <div class="card-body">
                   <form method="post">
                       <textarea name="comment" id="editor" rows="5" class="form-control"></textarea>
                       <br>
                       <button type="submit" name="btn_about" class="btn btn-warning mx-auto d-block">ثبت تغییرات</button>
                   </form>
               </div>
           </div>

       </div>
   </div>
</div>
<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
</body>
</html>
