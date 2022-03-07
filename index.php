<!doctype html>
<html lang="en">
<!--PAGE TITLE-->
<?php $pageTitle = 'Black Space' ?>
<?php include 'include/header.php'; ?>
<body>
<div class="container-fluid">
    <!--navbar-->
    <?php include "include/navbar.php"; ?>
    <!--offcanvas "sidebar"-->
    <?php include "include/offcanvas.php"; ?>
</div>
<div>
    <!--VIDEO BACKGROUND-->
    <div class="img-fluid">
        <video playsinline autoplay muted loop class="video-background">
            <source src="image-video/background.mp4" type="video/mp4">
        </video>
    </div>
    <!--divider-->
    <div id="divider">
        <div id="divider-holder">
            <div class="animate-typing dark-mode" id="typing-animation" data-type-speed="150">
                ♻ WELCOME TO BLACK RESUME ♻
            </div>
            <div class="animate-typing dark-mode" id="typing-animation-2" data-type-delay="2000" data-remove-delay="3000"
                 data-animate-loop="true" data-type-speed="150" data-remove-speed="150">
                <!--APART STENTS WITH "|"-->
                ✔ NEED A GOOD RESUME SITE ? |
                ✔ SEND US YOUR REQUESTS ✔ |
                ✔ WE WILL ANSWER IN SHORT TIME ✔ |
                &blacktriangledown; FOR MORE SCROLL DOWN &blacktriangledown;
            </div>
        </div>
    </div>
    <!--content-->
    <div id="content" class="p-2 p-sm-4 font-20">
        <!--content 1-->
        <div class="reveal fade-right container py-4">
            <div class="rounded-3 row dark-mode position-relative">
                <div class="col-xxl-6 border-5 p-2">
                    <img src="image-video/1.jpg" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-xxl-6 border-5 p-4 p-md-4 text-capitalize">
                    <b>
                        ♻ BLACK RESUME ♻
                    </b>
                    <br>
                    <br>
                    ✔ we make your dreams come true
                    <br>
                    ✔ imagine having your dream site
                    <br>
                    ✔ with float ui & colorful design
                    <br>
                    ✔ no errors and problems
                    <br>
                    ✔ with support options
                    <br>
                    ✔ and other features
                </div>
            </div>
        </div>
        <!--content2-->
        <div class="reveal fade-left container py-4">
            <div class="rounded-3 row dark-mode position-relative">
                <div class="col-xxl-6 border-5 p-2">
                    <img src="image-video/2.jpg" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-xxl-6 border-5 p-4 p-md-4 text-capitalize">
                    <b>
                        ♻ CONTACT US ♻
                    </b>
                    <br>
                    <br>
                    ✔ this site is in develop
                    <br>
                    ✔ so feel free to contact us
                    <br>
                    ✔ and tell your opinion
                    <br>
                    ✔ I will be happy to improve it
                    <br>
                    ✔ contact me
                    <div class="info-info-holder">
                        <button class="btn info-button" href="">
                            Contact
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <?php include "include/footer.php"; ?>
</div>
<!--scripts-->
<?php include 'include/script-holder.php' ?>
<?php include "script/index-js.php"; ?>
<!--ADDING ANIMATE TYPING-->
<script src="other/animate-typing/jquery.animateTyping.js"></script>
</body>
</html>
