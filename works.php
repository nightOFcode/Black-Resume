<!doctype html>
<html lang="en">
<!--PAGE TITLE-->
<?php $pageTitle = 'WORKS'; ?>
<?php include 'include/header.php' ?>
<body id="background-work">
<!--BACKGROUND VIDEO-->
<div class="img-fluid">
    <video playsinline autoplay muted loop class="video-background">
        <source src="other/image-video/background.mp4" type="video/mp4">
    </video>
</div>
<div class="container-fluid">
    <!--NAVBAR-->
    <?php include "include/navbar.php"; ?>
    <!--OFFCANVAS-->
    <?php include "include/offcanvas.php"; ?>
</div>
<div class="p-2 p-sm-4">
    <div class="container" id="work-holder">
        <div class="work-animation rounded-3 position-relative row theme" id="work">
            <div class="col-xxl-12 p-2">
                <img src="other/image-video/work.png" class="w-100 rounded-3" alt="">
            </div>
            <div class="col-xxl-12 p-4 text-capitalize">
                <b>
                    💬 NOTE 💬
                </b>
                <br>
                <br>
                ✔ thanks for visiting my website
                <br>
                ✔ this is my first site hosted so ,
                <br>
                ✔ I don't have too many projects done
            </div>
        </div>
        <div class="reveal fade-right">
            <div class="rounded-3 position-relative row theme mt-5" id="work">
                <div class="col-xl-6 p-2">
                    <img src="other/image-video/golden-php.jpg" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-xl-6 p-4 text-capitalize">
                    <b>
                        ☢ GOLDEN-PHP ☢
                    </b>
                    <br>
                    <br>
                    ✔ my first project with php
                    <br>
                    ✔ im not working on it any more
                    <br>
                    ✔ but the particles js work on
                    <br>
                    ✔ the background was not bad
                    <br>
                    ✔ have a lock
                    <br>
                    <br>
                    <div class="info-holder">
                        <a href="https://github.com/nightOFcode/Golden">
                            <button class="hover btn content-btn">
                                More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="reveal fade-left">
            <div class="rounded-3 position-relative row theme mt-5" id="work">
                <div class="col-xl-6 p-2">
                    <img src="other/image-video/black-space.jpg" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-xl-6 p-4 text-capitalize">
                    <b>
                        ☢ TEAM DISCORD ☢
                    </b>
                    <br>
                    <br>
                    ✔ our team is working on discord server
                    <br>
                    ✔ with different useful tools
                    <br>
                    ✔ and other futures
                    <br>
                    ✔ have a lock
                    <br>
                    <br>
                    <div class="info-holder">
                        <a href="https://github.com/nightOFcode/Golden">
                            <button class="hover btn content-btn">
                                More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOTER-->
</div>
<div class="w-100 mt-5">
    <?php include "include/footer.php"; ?>
</div>
<!--SCRIPTS-->
<?php include "include/script-holder.php"; ?>
<?php include "script/work-js.php"; ?>
</body>
</html>