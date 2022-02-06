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
    <title>درباره ما</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <a href="index.php" class="btn btn-danger float-end me-2 my-3">
        بازگشت
        <i class="fa fa-angle-left"></i>
    </a>
</header>
<br>
<div class="container">
    <div class="row" id="rows2">
        <span class="d-block text-dark fs-5 my-5">درباره ما</span>
        <div class="col-sm-4 card-about mt-3">
            <div class="card card-right shadow-lg" style="border-radius: 10px">
                <div class="card-header">
                    <img src="no-user-image.gif" style="width: 100%;border-radius: 10px" alt="preivew">
                </div>
                <div class="card-body">
                    تیم یک
                </div>
                <div class="card-footer bg-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-white text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                    درباره ی من
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-3 card-about">
            <div class="card card-center shadow-lg" style="border-radius: 10px">
                <div class="card-header">
                    <img src="no-user-image.gif" style="width: 100%;border-radius: 10px" alt="preview">
                </div>
                <div class="card-body">
                    تیم دو
                </div>
                <div class="card-footer bg-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button bg-white text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                        aria-controls="collapseTwo">
                                    درباره ی من
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-3 card-about">
            <div class="card card-left shadow-lg" style="border-radius: 10px">
                <div class="card-header">
                    <img src="no-user-image.gif" style="width: 100%;border-radius: 10px" alt="">
                </div>
                <div class="card-body">
                    تیم سه
                </div>
                <div class="card-footer bg-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button bg-white text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                    درباره ی من
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 card-about mt-3">
            <div class="card card-right shadow-lg" style="border-radius: 10px">
                <div class="card-header">
                    <img src="no-user-image.gif" style="width: 100%;border-radius: 10px" alt="preivew">
                </div>
                <div class="card-body">
                    تیم چهار
                </div>
                <div class="card-footer bg-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-white text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                    درباره ی من
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 card-about mt-3">
            <div class="card card-right shadow-lg" style="border-radius: 10px">
                <div class="card-header">
                    <img src="no-user-image.gif" style="width: 100%;border-radius: 10px" alt="preivew">
                </div>
                <div class="card-body">
                    تیم پنج
                </div>
                <div class="card-footer bg-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button bg-white text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true"
                                        aria-controls="collapseFive">
                                    درباره ی من
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 card-about mt-3">
            <div class="card card-right shadow-lg" style="border-radius: 10px">
                <div class="card-header">
                    <img src="no-user-image.gif" style="width: 100%;border-radius: 10px" alt="preivew">
                </div>
                <div class="card-body">
                    تیم شش
                </div>
                <div class="card-footer bg-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button bg-white text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true"
                                        aria-controls="collapseSix">
                                    درباره ی من
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 card-about mt-3">
            <div class="card card-right shadow-lg" style="border-radius: 10px">
                <div class="card-header">
                    <img src="no-user-image.gif" style="width: 100%;border-radius: 10px" alt="preivew">
                </div>
                <div class="card-body">
                    تیم هفت
                </div>
                <div class="card-footer bg-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button bg-white text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseSeven">
                                    درباره ی من
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 card-about mt-3">
            <div class="card card-right shadow-lg" style="border-radius: 10px">
                <div class="card-header">
                    <img src="no-user-image.gif" style="width: 100%;border-radius: 10px" alt="preivew">
                </div>
                <div class="card-body">
                    تیم هشت
                </div>
                <div class="card-footer bg-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button bg-white text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true"
                                        aria-controls="collapseEight">
                                    درباره ی من
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 card-about mt-3">
            <div class="card card-right shadow-lg" style="border-radius: 10px">
                <div class="card-header">
                    <img src="no-user-image.gif" style="width: 100%;border-radius: 10px" alt="preivew">
                </div>
                <div class="card-body">
                    تیم نه
                </div>
                <div class="card-footer bg-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button bg-white text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true"
                                        aria-controls="collapseNine">
                                    درباره ی من
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                    <?php
                    $selection = $conn->prepare("SELECT * FROM about_us");
                    $selection->execute();
                    $row = $selection->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($row

                    as $value) {
                    ?>
                <div class="col-auto w-100 col-md-auto lh-base mt-3 paragraph" style="font-size: 15px">
                    <?php
                    echo $value['About_Site'];
                    ?>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>