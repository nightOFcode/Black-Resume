<style>
    /*body work*/

    * {
        margin: 0;
        padding: 0;
        border-spacing: 0;
        box-sizing: border-box;
    }

    html, body {
        overflow: hidden;
        width: 100%; /* restrict the page width to viewport */
    }

    html {

        overflow-y: scroll;
    }

    /*ID selectors*/

    #offcanvas {
        background: #0e0f13;
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

    /*index page background fixer*/

    #background {
        background-image: url("image/background.jpg");
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        width: 100%;
    }


    /*index page main background*/

    .body {
        background: #182026;
    }

    .background {
        background-image: url("image/background.jpg");
        height: 100vh;
        background-attachment: fixed;
        /*background-attachment: revert;*/
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        display: flex;
    }

    /*bootstrap btn color and hover*/

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

    /*navbar item hover*/

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

    /*navbar search input*/

    .form-control-sm {
        border: none;
        transition: 200ms;
    }

    .form-control-sm:focus {
        background: #182026;
        color: white;
        outline: none;
    }

    /*font 20px using*/

    .font-20 {
        font-size: 20px;
        transition: 200ms;
    }

    .font-20:hover {
        color: #a0a0a0;
    }

    /*sidebar item (offcanvas)*/

    .item-sidebar {
        padding: 10px;
        display: block;
        text-decoration: none;
        color: white;
        transition: 200ms;
        border-radius: 5px;
    }

    .item-sidebar:hover {
        background: #a0a0a0;
        color: black;
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

    /*disabled link in the sidebar*/

    .disabled {
        cursor: default;
    }

    .disabled:hover {
        background: black;
    }

    /*navbar transition*/

    .navbar {
        transition: 300ms;
    }

    /*divs and elements special background color*/

    .color-background {
        background: #182026;
    }

    /*animation */

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


    .active.fade-left {
        animation: fade-left 500ms ease-in;
    }

    .active.fade-right {
        animation: fade-right 500ms ease-in;
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
