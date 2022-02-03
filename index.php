<?php include 'include/header.php'; ?>
<html lang="en">
<body>
<div id="background"></div>
<div class="container-fluid text-reset">
    <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top m-2">
        <!--        offcanvas button-->
        <button class="btn btn-dark bg-dark ms-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvas" data-bs-placement="bottom" title="Sidebar">
            <i><<<</i>
        </button>
        <!--                navbar brand-->
        <a class="navbar-brand ms-3 nav-hover" href="#" data-bs-toggle="tooltip" data-popper-placement="bottom"
           title="Black resume page">
            < Black resume >
        </a>
        <!--        navbar button-->
        <button class="btn bg-dark navbar-toggler me-2" id="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi-list-stars"></i>
        </button>
        <!--        navbar content-->
        <div class="collapse navbar-collapse" id="navbar">
            <div class="navbar-nav me-auto">
                <!--                big navbar content-->
                <div class="nav-item mx-3">
                    <a href="#" class="nav-link text-light nav-hover" data-bs-toggle="tooltip"
                       data-popper-placement="bottom"
                       title="Contact Page">< Contact ></a>
                </div>
                <div class="nav-item mx-3">
                    <a href="#" class="nav-link text-light nav-hover" data-bs-toggle="tooltip"
                       data-popper-placement="bottom"
                       title="Space resume page">< Works ></a>
                </div>
                <div class="nav-item mx-3">
                    <a href="#" class="nav-link text-light nav-hover">< ></a>
                </div>
            </div>
        </div>
    </nav>
    <!--    offcanvas sidebar-->
    <nav class="offcanvas offcanvas-start" id="offcanvas" tabindex="2" data-bs-scroll="false">
        <div class="offcanvas-header">
            <header class="offcanvas-title text-light" id="offcanvasLabel">Offcanvas</header>
            <button type="button" class="btn btn-dark text-reset" id="offcanvas-btn" data-bs-dismiss="offcanvas"
                    aria-label="Close">
                <i class="bi bi-caret-left text-light"></i>
            </button>
        </div>
    </nav>
</div>
</body>
</html>
<?php include 'include/footer.php' ?>
