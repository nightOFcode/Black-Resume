<!doctype html>
<html lang="en">
<?php include "include/header.php"; ?>
<body>
<div id="background-contact" class="overflow-hidden">
    <!--navbar-->
    <?php include "include/navbar.php"; ?>
    <!--offcanvas-->
    <?php include "include/offcanvas.php"; ?>
    <!--contact-->
    <div class="container">
        <div id="contact-margin" class="color-background">
            <form action="" method="post" class="text-light w-auto p-3 p-sm-4">
                <div id="form-error" class="d-block w-auto">

                </div>
                <div class="mb-4">
                    <label for="form-name" class="form-label mb-2">
                        Name :
                    </label>
                    <input type="text" class="form rounded-3 placeholder-wave" id="form-name" placeholder="Input Name"
                           required maxlength="15" minlength="3">
                </div>
                <div class="mb-4">
                    <label for="form-email" class="form-label mb-2">
                        Email :
                    </label>
                    <input type="email" class="form rounded-3 placeholder-wave" id="form-email"
                           placeholder="example@email.com"
                           required minlength="10">
                </div>
                <div class="mb-4">
                    <label for="form-text" class="form-label mb-2">
                        Message :
                    </label>
                    <textarea id="form-text" class="textarea rounded-3 placeholder-wave" rows="10"
                              placeholder="Input Your Message" required minlength="15" maxlength="200"></textarea>
                </div>
                <div class="">
                    <button class="btn info-button">
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
</body>
</html>