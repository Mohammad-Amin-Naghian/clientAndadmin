<?php
include_once 'Admin/connection.php';
global $conn;
?>

<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.rtl.css">
    <title>بلاگ ها</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #efefef">
<header>
    <a href="index.php" class="btn btn-danger float-end me-2 my-3">
        بازگشت
        <i class="fa fa-angle-left"></i>
    </a>
</header>
<br><br><br>
<div class="container">
    <h5 class="text-dark">بلاگ ها</h5> <br>
    <div class="row" id="rows2">
        <?php
        $select = $conn->prepare("SELECT * FROM blog ");
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $value) {
        ?>
        <div class="col-sm-4 card-whole-card mt-2">
            <div class="card shadow-lg card-whole1" style="border-radius: 8px">
                <div class="card-header"><?php echo $value['title'];?></div>
                <div class="card-body">
                    <?php
                    echo $value['link'];
                    ?>
                </div>
                <div class="card-footer">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-white text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $value['ID'];?>" aria-expanded="true" aria-controls="collapse<?php echo $value['ID'];?>">
                                    مشاهده توضیحات
                                </button>
                            </h2>
                            <div id="collapse<?php echo $value['ID'];?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php
                                    echo $value['Description'];
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>
