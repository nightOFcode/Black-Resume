<!doctype html>
<html lang="en">
<!--PAGE TITLE-->
<?php $pageTitle = 'CONTACT' ?>
<?php include "include/header.php"; ?>
<body id="scroll">
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
<!--SERVER SIDE FORM INCLUDE-->
<?php include "serverside/form.php"; ?>
<div class="fade-animation">
    <div class="container" id="contact-clean">
        <div id="contact-margin" class="theme">
            <form action="contact.php" name="ContactForm" method="post" class="text-light w-auto p-3 p-sm-4">
                <!--ERROR HERE-->
                <div id="form-error" class="ms-md-4 me-md-4">
                    <!--ERROR MASSAGE-->
                    <?php if (!empty($_SESSION['error'])) : ?>
                        <div class="alert alert-danger text-light text-center  bg-danger">
                            <?php echo $_SESSION['error']; ?>
                            <?php unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>
                    <!--SUCCESS MASSAGE-->
                    <?php if (!empty($_SESSION['success'])) : ?>
                        <div class="alert alert-success text-light text-center bg-success">
                            <?php echo $_SESSION['success']; ?>
                            <?php unset($_SESSION['success']); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!--FORM CONTENT-->
                <div class="mb-4 ms-md-4 me-md-4">
                    <label for="form-name" class="form-label mb-2">
                        Name :
                    </label>
                    <input type="text" name="name" class="focus form rounded-3 placeholder-wave" id="form-name"
                           placeholder="Input Name"
                           required maxlength="15" minlength="3">
                </div>
                <div class="mb-4 ms-md-4 me-md-4">
                    <label for="form-email" class="form-label mb-2">
                        Email :
                    </label>
                    <input type="email" name="email" class="focus form rounded-3 placeholder-wave" id="form-email"
                           placeholder="example@email.com"
                           required minlength="10">
                </div>
                <div class="mb-4 ms-md-4 me-md-4">
                    <label for="form-text" class="form-label mb-2">
                        Message :
                    </label>
                    <textarea id="form-text" name="message" class="focus textarea rounded-3 placeholder-wave" rows="10"
                              placeholder="Input Your Message" required minlength="15" maxlength="200"></textarea>
                </div>
                <!--CAPTCHA HERE-->
                <div class="mb-4 ms-md-4 me-md-4">
                    <div class="g-recaptcha" data-sitekey="your site key"
                         data-theme="dark"></div>
                </div>
                <div id="btn-contact-holder">
                    <button type="submit" class="hover btn contact-btn" id="btn-contact" name="send">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div id="divider-contact">
        <!--FOOTER-->
        <div class="w-100 position-absolute bottom-0" id="footer-contact">
            <?php include "include/footer.php"; ?>
        </div>
    </div>
</div>
<!--SCRIPTS-->
<?php include "include/script-holder.php"; ?>
<?php include "script/contact-js.php"; ?>
<!--RECAPTCHA API-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>