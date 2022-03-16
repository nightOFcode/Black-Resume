<!doctype html>
<html lang="en">
<!--PAGE TITLE-->
<?php $pageTitle = "MY RESUME"; ?>
<?php include "include/header.php"; ?>
<body>
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
<!--CONTENT-->
<div class=" p-2 p-sm-4">
    <div class="theme container" id="myResume-holder">
        <div class="rounded-3" id="navbar-caption">
            <div class="row" id="resume-1">
                <div class="col-lg-6 p-5" id="caption-1">
                    <img src="other/image-video/profile.jpg" alt="" id="caption-1-img">
                    <a id="caption-1-caption-holder">
                        <div id="caption-1-caption">
                            nightOFcode
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 p-5" id="caption-2">
                    hi,
                    <br>
                    <br>
                    My name is Amir Hossein Shirazi,
                    <br>
                    Im an amateur web developer starting my first website hosted on the internet
                    with <b><a href="index.php" class="text-decoration-none">BLACK RESUME</a></b> website.
                    <br>
                    I have
                    plans to make more websites and learn more
                    about the amazing programing world that never ever ends.
                </div>
                <div class="col-lg-6 p-5" id="caption-3">
                    At first,
                    <br>
                    I mentioned that im amateur so that means im still learning things,
                    but as you should know the programing job is a full time learning job.
                    currently, I know the most I should know about html and css, and I can handle easy javascript or
                    jquery
                    and im working on php too.
                </div>
                <div class="col-lg-6 p-5" id="caption-4">
                    this project made with php and jquery and boostrap, and I used composer to bring the phpmailer
                    in the project, there is a lot I can write here but there is noting better than to check it your
                    self, so I uploaded all the project on my GitHub account take a look
                    <div class="d-flex mt-5 justify-content-end">
                        <a href="https://github.com/nightOFcode" target="_blank">
                            <button class="hover btn caption-3-btn">
                                More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FOOTER-->
<div CLASS="w-100 mt-5 pt-4">
    <?php include "include/footer.php"; ?>
</div>
<!--SCRIPTS-->
<?php include "include/script-holder.php"; ?>
<?php include "script/myResume-js.php"; ?>
</body>
</html>
