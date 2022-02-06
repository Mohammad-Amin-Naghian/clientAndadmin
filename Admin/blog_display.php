<?php
include_once 'connection.php';
global $conn
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
    <span class="col-sm-12 fs-4">نمایش بلاگ ها</span>
    <br><br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>عنوان</th>
            <th>لینک</th>
            <th>توضیحات</th>
            <th>ویرایش</th>
            <th>حذف</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $select = $conn->prepare("SELECT * FROM blog");
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $key => $value) {
            ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value['title']; ?></td>
                <td><?php echo $value['link']; ?></td>
                <td><?php echo $value['Description']; ?></td>
                <td><a href="<?php echo 'update_blog.php?UpdateID=' . $value['ID']; ?>" class="btn btn-success" >ویرایش</a></td>
                <td><a href="<?php echo 'delete_blog.php?DeleteID=' . $value['ID']; ?>" class="btn btn-danger">حذف</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
