<style>

    * {
        margin: 0;
        padding: 0;
        border-spacing: 0;
        box-sizing: border-box;
    }

    body {

    }

    #offcanvasLabel {
        font-size: 20px;
    }

    #navbar-toggler {
        padding: 10px;
        color: white;
        border: none;
    }

    #navbar-toggler:hover {
        color: black;
    }

    #navbar-input {
        padding: 5px !important;
    }

    #dropdownMenuButton {
        font-size: 20px;
    }

    #dropdownMenuButton:hover {
        transition: 200ms;
        background: #a0a0a0;
        color: black;
    }

    /*ALERT*/
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

    #content {
        overflow: hidden;
        font-size: 20px;
        color: white;
    }

    #contact-margin {
        margin-top: 100px !important;
        border-radius: 5px;
    }

    #btn-contact-holder {
        text-align: right;
    }

    #btn-contact {
        border-radius: 3px !important;
    }

    #offcanvas-btn {
        padding: 10px !important;
        border-radius: 3px!important;
    }

    #offcanvas-btn:hover {
        color: black!important;
    }

    /*INDEX DIVIDER*/
    #divider {
        height: 100vh;
    }

    /*INDEX DIVIDER TEXT HOLDER*/
    #divider-holder {
        display: flex;
        height: 85vh;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    #typing-animation {
        padding: 20px;
        border-radius: 50px;
        font-size: 40px;
    }

    #typing-animation-2 {
        padding: 20px;
        border-radius: 20px;
        margin-top: 10px;
        font-size: 20px;
    }

    #navbar-brand {
        display: none;
    }

    #toggle-switch {
        font-size: 20px;
    }

    .body {
        background: #182026;
    }

    /*VIDEO BACKGROUND*/
    .video-background {
        object-fit: cover;
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        z-index: -100;
    }

    .btn {
        padding: 5px !important;
        transition: 200ms;
        background: transparent;
        color: white;
        border-radius: 0 !important;
    }

    .btn:hover {
        color: black;
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
        color: white;
        border-radius: 2px !important;
        position: absolute;
        bottom: 20px;
        right: 20px;
    }

    .info-button:hover {
        background: #a0a0a0;
        color: black;
    }

    .nav-hover {
        font-size: 20px;
        transition: 200ms;
        padding: 5px !important;
        color: white;
    }

    .nav-hover:hover {
        color: black;
        background: #a0a0a0;
    }

    .form-control-sm {
        border: none;
        transition: 200ms;
    }

    .form-control-sm:focus {
        background: #0e0f13;
        color: white;
        outline: none;
    }

    /*CONTACT FORM*/
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
        color: white;
    }

    .holder-sidebar:hover {
        background: #a0a0a0;
        color: black !important;
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

    .disabled {
        cursor: default;
        color: white;
    }

    .disabled:hover {
        background: black;
        color: #a0a0a0!important;
    }

    /*navbar transition*/

    .navbar {
        transition: 300ms;
        font-size: 15px !important;
    }

    .light-mode {
        background: white;
        color: black;
    }

    .dark-mode {
        background: #121419;
        color: white;
    }

    .footer-text {
        font-size: 20px !important;
    }

    .footer-link {
        color: white;
        transition: 200ms;
    }

    .footer-link:hover {
        color: #a0a0a0;
    }

    /*MEDIA RESPONDING*/
    @media (max-width: 1199px) {
        #navbar {
            background: #121419;
        }

        #search-from {
            padding: 10px 10px;
        }

        #navbar-brand {
            display: block;
        }
    }

    @media (max-width: 900px) {
        #index-alert div {
            width: 50%;
        }

        #contact-margin {
            width: 100%;
        }

        #typing-animation {
            font-size: 16px;
        }

        #typing-animation-2 {
            font-size: 12px;
        }
    }

    @media (max-width: 600px) {
        #content {
            font-size: 16px !important;
        }

        #btn-contact {
            text-align: center;
        }

        .footer-text {
            font-size: 17px !important;
        }

        .info-info-holder {
            text-align: center;
            margin-top: 10px;
        }

        .info-button {
            position: static;
        }

    }

    @media (max-height: 740px) {
        #divider-contact {
            height: 50px;
        }

        #footer-contact {
            position: relative !important;
            bottom: 0;
        }

        #contact-margin {
            margin-top: 70px !important;
        }
    }


    /*animations*/
    #contact-animation {
        animation: 2s fade 1s forwards;
        animation-name: fadein;
        opacity: 0;
    }

    @keyframes fadein {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

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
