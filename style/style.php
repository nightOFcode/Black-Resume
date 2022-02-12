<style>
    * {
        margin: 0;
        padding: 0;
        border-spacing: 0;
    }

    body {
        font-family: "Courier 10 Pitch", serif;
        background: black;
        /*display: block;*/
        overflow: scroll;
    }

    #offcanvas {
        background: black;
    }


    #navbar-toggler {
        padding: 10px;
        border: none;
    }

    #dropdownMenuButton {
        font-size: 20px;
    }

    #dropdownMenuButton:hover {
        transition: 200ms;
        background: #a0a0a0;
        color: black;
    }

    #background-1 {
        background-image: url("image/4141070.jpg");
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
    }

    .background {
        background-image: url("image/4141070.jpg");
        height: 100vh;
        background-attachment: fixed;
        /*background-attachment: revert;*/
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        display: flex;
    }

    .btn {
        transition: 200ms;
    }

    .btn:hover {
        color: #a0a0a0;
    }

    .btn:focus {
        outline: none !important;
        box-shadow: none !important;
        border: none;
    }

    .nav-item {
        font-size: 20px;
        transition: 200ms;
    }

    .nav-hover {
        transition: 200ms;
    }

    .nav-hover:hover {
        color: #a0a0a0 !important;
    }

    .form-control-sm {
        border: none;
        transition: 200ms;
    }

    .form-control-sm:focus {
        background: #182026;
        color: white;
        outline: none;
    }

    .font-20 {
        font-size: 20px;
        transition: 200ms;
    }

    .font-20:hover {
        color: #a0a0a0;
    }

    .dropdown-item:hover {
        background: #a0a0a0 !important;
        color: black !important;
        transition: 200ms;
    }

    .item-sidebar {
        padding: 10px;
        display: block;
        text-decoration: none;
        color: white;
        transition: 200ms;
        border-radius: 5px;
    }

    .holder-sidebar {
        transition: 200ms;
        font-size: 20px;
        cursor: pointer;
        padding: 10px;
        border-radius: 5px;
    }

    .holder-sidebar:hover {
        background: #a0a0a0;
        color: black;
    }

    .list-sidebar {
        /*display: block;*/
        padding: 10px;
        text-align: center;
        display: none;
        font-size: 20px;
    }

    .item-sidebar:hover {
        background: #a0a0a0;
        color: black;
    }

    .disabled {
        cursor: default;
    }

    .disabled:hover {
        background: black;
    }

    .reveal {
        position: relative;
        transform: translateY(150px);
        opacity: 0;
        transition: 500ms all ease;
    }

    .reveal.active {
        transform: translateY(0);
        opacity: 1;
    }

    /*animation */

    .active.fade-left {
        animation: fade-left 750ms ease-in;
    }

    .active.fade-right {
        animation: fade-right 750ms ease-in;
    }

    @keyframes fade-left {
        0% {
            transform: translateX(-100px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes fade-right {
        0% {
            transform: translateX(100px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

</style>
