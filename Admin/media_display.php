<?php
include_once 'connection.php';
global $conn;
?>


<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #efefef">
<div class="container">
    <span class="col-sm-12 fs-4">نمایش رسانه ها</span>
    <br><br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>عنوان</th>
            <th>توضیحات</th>
            <th>عکس</th>
            <th>ویرایش</th>
            <th>حذف</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $select = $conn->prepare("SELECT * FROM media");
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $key=>$value) {
        ?>
        <tr>
            <td><?php echo $key + 1;?></td>
            <td><?php echo $value['title'];?></td>
            <td><?php echo $value['Description'];?></td>
            <td><?php echo $value['picture'];?></td>
            <td><a href="<?php echo "update_media.php?Update_Id=".$value['ID'];?>" class="btn btn-success">ویرایش</a></td>
            <td><a href="<?php echo 'delete_media.php?DeletedID='.$value['ID'];?>" class="btn btn-danger">حذف</a></td>
        </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
</div>
</body>
</html>
