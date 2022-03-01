<!doctype html>
<html lang="en">
<?php include "include/header.php"; ?>
<body id="background-contact">
<div class="container-fluid">
    <!--navbar-->
    <?php include "include/navbar.php"; ?>
    <!--offcanvas "sidebar"-->
    <?php include "include/offcanvas.php"; ?>
</div>
<!--SERVER SIDE FORM INCLUDE-->
<?php include "serverside/form.php"; ?>
<div>
    <div class="container" id="contact-clean">
        <div id="contact-margin" class="color-background">
            <form action="contact.php" name="ContactForm" method="post" class="text-light w-auto p-3 p-sm-4">
                <!--error here-->
                <div id="form-error" class="w-auto">

                </div>
                <!--content-->
                <div class="mb-4">
                    <label for="form-name" class="form-label mb-2">
                        Name :
                    </label>
                    <input type="text" name="name" class="form rounded-3 placeholder-wave" id="form-name"
                           placeholder="Input Name"
                           required maxlength="15" minlength="3">
                </div>
                <div class="mb-4">
                    <label for="form-email" class="form-label mb-2">
                        Email :
                    </label>
                    <input type="email" name="email" class="form rounded-3 placeholder-wave" id="form-email"
                           placeholder="example@email.com"
                           required minlength="10">
                </div>
                <div class="mb-4">
                    <label for="form-text" class="form-label mb-2">
                        Message :
                    </label>
                    <textarea id="form-text" name="message" class="textarea rounded-3 placeholder-wave" rows="10"
                              placeholder="Input Your Message" required minlength="15" maxlength="200"></textarea>
                </div>
                <!--captcha here-->
                <div class="mb-4">
                    <div class="g-recaptcha" data-sitekey="site-key"
                         data-theme="dark"></div>
                </div>
                <div id="btn-contact">
                    <button type="submit" class="btn info-button" name="send">
                        < submit >
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!--footer-->
    <div class="w-100 position-fixed bottom-0">
        <?php include "include/footer.php"; ?>
    </div>
</div>
<!--scripts-->
<?php include "include/script-holder.php"; ?>
<?php include "script/contact-js.php"; ?>
<!--recaptcha api-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
