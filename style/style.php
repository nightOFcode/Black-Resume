<style>
    /*body work*/

    * {
        margin: 0;
        padding: 0;
        border-spacing: 0;
        box-sizing: border-box;
    }

    /*ID selectors*/

    #offcanvas {
        background: #0e0f13;
    }

    /*navbar toggler index page */

    #navbar-toggler {
        padding: 10px;
        color: white;
        border: none;
    }

    #navbar-toggler:hover {
        color: black;
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
        /*width: 100%;*/
    }

    /*contact page background*/
    #background-contact {
        background-image: url("image/contact-pic.png");
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        height: 100vh;
        overflow: hidden;
    }

    /*alert*/

    #index-alert {
        text-align: center;
        position: absolute;
        top: 100px;
    }

    #index-alert div {
        background: #182026;
        width: 25%;
        padding: 10px;
        border-radius: 5px;
        color: white;

    }

    /*content in index*/

    #content {
        overflow: hidden;
    }

    #contact-margin {
        margin-top: 100px !important;
        border-radius: 5px;
        width: 60%;
    }

    /*button contact*/
    #btn-contact {
        text-align: right;
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
        padding: 5px;
        transition: 200ms;
        background: transparent;
        color: white !important;
    }

    .btn:hover {
        color: black !important;
        background: #a0a0a0;
    }

    .btn:focus {
        outline: none !important;
        box-shadow: none !important;
        border: none;
    }

    .info-button {
        background: #0e0f13;
        transition: 200ms;
        color: white !important;
    }

    .info-button:hover {
        background: #a0a0a0;
        color: black !important;
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
        background: #0e0f13;
        color: white;
        outline: none;
    }

    /*contact form*/

    .form {
        display: block;
        padding: 7px;
        border: none;
        transition: 200ms;
        outline: none;
        width: 100%;
    }

    .form:focus {
        color: white;
        background: #0e0f13;
    }

    /*textarea contact*/
    .textarea {
        display: block;
        padding: 10px;
        width: 100%;
        height: 100px;
        border: none;
        transition: 200ms;
    }

    .textarea:focus {
        color: white;
        background: #0e0f13;
    }

    /*20px font*/

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

    .offcanvas-brand {
        color: white;
        transition: 200ms;
    }

    .offcanvas-brand:hover {
        color: #a0a0a0;
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

    /*footer change*/

    .footer-text {
        font-size: 20px !important;
    }

    .footer-link {
        color: white;
        transition: 200ms;
    }

    /*footer link change*/

    .footer-link:hover {
        color: #a0a0a0;
    }

    /*media size responding*/

    @media (max-width: 1199px) {
        #contact-margin {
            width: 70%;
        }

        #navbar {
            background-image: url("image/background.jpg");
        }

        #search-from {
            padding: 10px 10px;
        }
    }

    @media (max-width: 900px) {
        #index-alert div {
            background: #a0a0a0;
            width: 50%;
        }

        #contact-margin {
            width: 100%;
        }
    }

    @media (max-width: 600px) {
        /*index content respond*/
        #content {
            font-size: 16px !important;
        }

        /*footer text respond*/
        .footer-text {
            font-size: 17px !important;
        }

        #btn-contact {
            text-align: center;
        }
    }

    @media (max-height: 740px) {
        #background-contact {
            overflow: scroll;
        }
    }

    /*animations*/

    .reveal {
        position: relative;
        /*transform: translateY(150px);*/
        opacity: 0;
        transition: 500ms ease-in-out 200ms;
    }

    .reveal.active {
        transform: translateY(0);
        opacity: 1;
    }


    .active.fade-left {
        animation: fade-left 500ms ease-in-out 200ms;
    }

    .active.fade-right {
        animation: fade-right 500ms ease-in-out 200ms;
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
