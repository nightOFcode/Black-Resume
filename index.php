<!doctype html>
<html lang="en">
<!--PAGE TITLE-->
<?php $pageTitle = 'BLACK SPACE'; ?>
<?php include 'include/header.php'; ?>
<body>
<div class="container-fluid">
    <!--NAVBAR-->
    <?php include "include/navbar.php"; ?>
    <!--OFFCANVAS "SIDEBAR"-->
    <?php include "include/offcanvas.php"; ?>
</div>
<div>
    <!--VIDEO BACKGROUND-->
    <div class="img-fluid">
        <video playsinline autoplay muted loop class="video-background">
            <source src="other/image-video/background.mp4" type="video/mp4">
        </video>
    </div>
    <!--DIVIDER-->
    <div id="divider"></div>
    <div id="divider-2">
        <div id="divider-holder">
            <div class="animate-typing theme" id="typing-animation" data-type-speed="150">
                ♻ WELCOME TO BLACK RESUME ♻
            </div>
            <div class="animate-typing theme" id="typing-animation-2" data-type-delay="2000"
                 data-remove-delay="3000"
                 data-animate-loop="true" data-type-speed="150" data-remove-speed="150">
                <!--APART STENTS WITH "|"-->
                ✔ NEED A GOOD RESUME SITE ? |
                ✔ SEND US YOUR REQUESTS ✔ |
                ✔ WE WILL ANSWER IN SHORT TIME ✔ |
                &blacktriangledown; FOR MORE SCROLL DOWN &blacktriangledown;
            </div>
        </div>
    </div>
    <!--CONTENT-->
    <div id="content" class="p-2 p-sm-4">
        <!--CONTENT 1-->
        <div class="reveal fade-right container py-4">
            <div class="rounded-3 row theme position-relative">
                <div class="col-xxl-6 p-2">
                    <img src="other/image-video/1.jpg" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-xxl-6 p-4 p-md-4 text-capitalize">
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
        <!--CONTENT 2-->
        <div class="reveal fade-left container py-4">
            <div class="rounded-3 row theme position-relative">
                <div class="col-xxl-6 p-2">
                    <img src="other/image-video/2.jpg" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-xxl-6 p-4 p-md-4 text-capitalize">
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
                    <div class="info-holder">
                        <a href="contact.php">
                            <button class="hover btn content-btn">
                                Contact
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOTER-->
    <?php include "include/footer.php"; ?>
</div>
<!--SCRIPTS-->
<?php include 'include/script-holder.php' ?>
<?php include "script/index-js.php"; ?>
<!--ADDING ANIMATE TYPING-->
<script src="other/animate-typing/jquery.animateTyping.js"></script>
</body>
</html>
