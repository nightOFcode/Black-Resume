<nav class="navbar navbar-expand-xl fixed-top mb-2 pb-0 pt-0 rounded-bottom">
    <!--offcanvas button-->
    <button class="btn ms-1" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvas" data-bs-placement="bottom" title="Sidebar">
        <b><<<</b>
    </button>
    <!--navbar brand-->
    <a class="navbar-brand ms-3" id="navbar-brand" target="_blank">
        <?php if (isset($pageTitle)) {
            echo '<b>' . $pageTitle . '</b>';
        } ?>
    </a>
    <!--navbar button-->
    <button class="btn navbar-toggler me-1" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation" id="navbar-toggler">
        <i class="bi-list-stars"></i>
    </button>
    <!--navbar content-->
    <div class="collapse navbar-collapse" id="navbar">
        <div class="navbar-nav me-auto">
            <!--big navbar content-->
            <div class="nav-item mx-2 text-center">
                <a href="index.php" class="nav-link nav-hover" data-bs-toggle="tooltip"
                   data-popper-placement="bottom"
                   title="Contact Page">Home</a>
            </div>
            <div class="nav-item mx-2 text-center">
                <a href="contact.php" class="nav-link nav-hover" data-bs-toggle="tooltip"
                   data-popper-placement="bottom"
                   title="Contact Page">Contact</a>
            </div>
            <div class="nav-item mx-2 text-center">
                <a href="works.php" class="nav-link nav-hover" data-bs-toggle="tooltip"
                   data-popper-placement="bottom"
                   title="Works Page">Works</a>
            </div>
            <div class="nav-item mx-2 text-center">
                <a href="#" class="nav-link nav-hover" data-bs-toggle="tooltip"
                   data-popper-placement="bottom"
                   title="Black Space site">Black Space</a>
            </div>
        </div>
        <!--form input-->
        <form class="text-center d-flex" id="search-from">
            <!--input search-->
            <input type="text" id="navbar-input" class="form-control-sm placeholder-wave" placeholder=" search "
                   aria-label="search">
            <button class="btn mx-1" type="submit">
                Submit
            </button>
        </form>
    </div>
</nav>
