<!doctype html>
<html lang="en">
<?php include 'include/header.php'; ?>
<body>
<div class="img-fluid background"></div>
<div class="container-fluid">
    <!--navbar-->
    <?php include "include/navbar.php"; ?>
    <!--offcanvas "sidebar"-->
    <?php include "include/offcanvas.php"; ?>
</div>
<!--second background-->
<div id="background">
    <!--alert notifier-->
    <div class="container-fluid" id="index-alert">
        <div class="container-fluid d-flex justify-content-center">
            scroll down :)
        </div>
    </div>
    <!--content-->
    <div id="content" class="p-4 p-sm-4 font-20">
        <!--content 1-->
        <div class="reveal fade-right container py-4">
            <div class="rounded-3 row color-background position-relative">
                <div class="col-xxl-6 border-5 p-2">
                    <img src="image/1.jpg" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-xxl-6 border-5 text-light p-4 p-md-4 text-capitalize">
                    <b>
                        < BLACK RESUME >
                    </b>
                    <br>
                    <br>
                    < we make your dreams come true
                    <br>
                    < imagine having your dream site
                    <br>
                    < with float ui & colorful design
                    <br>
                    < no errors and problems
                    <br>
                    < with support options
                    <br>
                    < and other features
                </div>
            </div>
        </div>
        <!--content2-->
        <div class="reveal fade-left container py-4">
            <div class="rounded-3 row color-background position-relative">
                <div class="col-xxl-6 border-5 p-2">
                    <img src="image/2.jpg" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-xxl-6 border-5 text-light p-4 p-md-4 text-capitalize">
                    <b>
                        < CONTACT US >
                    </b>
                    <br>
                    <br>
                    < this site is in develop
                    <br>
                    < so feel free to contact us
                    <br>
                    < and tell your opinion
                    <br>
                    < i will be happy to improve it
                    <br>
                    <<< contact me >>>
                    <br>
                    <br>
                    <br>
                    <br>
                    <button class="btn info-button d-flex float-end" href="">
                        < Contact >
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <?php include "include/footer.php"; ?>
</div>
<!--scripts-->
<?php include 'include/script-holder.php' ?>
</body>
</html>
