<style>

    * {
        margin: 0;
        padding: 0;
        border-spacing: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Patua One', cursive;
    }

    #offcanvasLabel {
        font-size: 20px;
    }

    #offcanvas-btn {
        padding-top: 2px !important;
    }

    #content {
        overflow: hidden;
        font-size: 20px;
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

    #divider {
        height: 100px;
    }

    #divider-2 {
        height: 100vh;
    }

    #divider-holder {
        display: flex;
        height: 65vh;
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
        color: white;
    }

    #toggle-switch {
        font-size: 20px;
    }

    #work-holder {
        margin-top: 100px;
        font-size: 20px;
        overflow-x: hidden;
    }

    #myResume-holder {
        margin-top: 60px !important;
        text-align: center;
        /*border-radius: 50% 50% 0 0;*/
        border-radius: 3px;
    }

    #teamResume-holder {
        margin-top: 60px !important;
        text-align: center;
        /*border-radius: 50% 50% 0 0;*/
        border-radius: 3px;
    }

    #caption-1 img {
        border-radius: 50%;
        width: 200px;
        height: 200px;
        border: 1px solid rgba(255, 255, 255, 0.125);
    }

    #teamCaption-1 {
        text-align: center;
    }

    #teamCaption-1 img {
        border-radius: 50%;
        width: 200px;
        height: 200px;
        border: 1px solid rgba(255, 255, 255, 0.125);
    }

    #caption-1 a {
        padding: 10px;
        font-size: 40px;
        text-align: center;
        width: 100%;
        display: block;
    }

    #teamCaption-1 a {
        padding: 10px;
        font-size: 40px;
        text-align: center;
        width: 100%;
        display: block;
    }

    #caption-1 div {
        display: inline-block;
        background: rgb(135, 206, 250);
        background: -moz-linear-gradient(150deg, rgba(135, 206, 250, 1) 0%, rgba(4, 27, 91, 1) 100%);
        background: -webkit-linear-gradient(150deg, rgba(135, 206, 250, 1) 0%, rgba(4, 27, 91, 1) 100%);
        background: linear-gradient(150deg, rgba(135, 206, 250, 1) 0%, rgba(4, 27, 91, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#87cefa", endColorstr="#041b5b", GradientType=1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    #teamCaption-1 div {
        display: inline-block;
        background: rgb(135, 206, 250);
        background: -moz-linear-gradient(150deg, rgba(135, 206, 250, 1) 0%, rgba(4, 27, 91, 1) 100%);
        background: -webkit-linear-gradient(150deg, rgba(135, 206, 250, 1) 0%, rgba(4, 27, 91, 1) 100%);
        background: linear-gradient(150deg, rgba(135, 206, 250, 1) 0%, rgba(4, 27, 91, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#87cefa", endColorstr="#041b5b", GradientType=1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    #resume-1 {
        font-size: 20px;
        text-align: start;
    }

    #teamResume-1 {
        font-size: 20px;
        text-align: start;
    }

    #caption-1 {
        text-align: center;
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

    .theme {
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        background-color: rgba(12, 17, 27, 0.75);
        border: 1px solid rgba(255, 255, 255, 0.125);
        color: white;
    }

    .hover:hover {
        color: black !important;
        background: lightskyblue;
    }

    .focus:focus {
        color: white;
        background: #292e3a;
    }

    .btn {
        padding: 5px !important;
        transition: 200ms;
        background: transparent;
        color: white;
        border-radius: 0 !important;
    }

    .btn:focus {
        outline: none !important;
        box-shadow: none !important;
        border: none;
    }

    .content-btn {
        background: black;
        transition: 200ms;
        color: white;
        border-radius: 2px !important;
        position: absolute;
        bottom: 20px;
        right: 20px;
    }

    .contact-btn {
        background: black;
    }

    .navbar-item {
        font-size: 20px;
        transition: 200ms;
        padding: 5px !important;
        color: white;
    }

    .form {
        display: block;
        padding: 7px;
        border: none;
        transition: 200ms;
        outline: none;
        width: 100%;
    }

    .textarea {
        display: block;
        padding: 10px;
        width: 100%;
        height: 100px;
        border: none;
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
        color: white;
    }

    .list-sidebar {
        /*display: block;*/
        padding: 10px;
        text-align: center;
        display: none;
        font-size: 20px;
    }

    .offcanvas-title a {
        color: white;
        transition: 200ms;
        text-decoration: none;
    }

    .offcanvas-title:hover a {
        color: #a0a0a0;
    }

    /*navbar transition*/
    .navbar {
        transition: 300ms;
        font-size: 15px !important;
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

    .caption-3-btn {
        border-radius: 2px !important;
        background: black;
    }

    /*MEDIA RESPONDING*/
    @media (max-width: 1199px) {
        #navbar {
            backdrop-filter: blur(25px) saturate(200%);
            -webkit-backdrop-filter: blur(25px) saturate(200%);
            background-color: rgba(21, 21, 33, 0.8);
            /*border: 1px solid rgba(255, 255, 255, 0.125);*/
            color: white;
        }

        #navbar-brand {
            display: block;
        }
    }

    @media (max-width: 900px) {
        #contact-margin {
            width: 100%;
        }

        #typing-animation {
            font-size: 24px;
        }

        #typing-animation-2 {
            font-size: 18px;
        }
    }


    @media (max-height: 800px) {
        #divider-contact {
            margin: 50px 0 0 0;
            display: flex;
            text-align: center;
            align-items: end;
            height: 100px;
        }

        #footer-contact {
            position: relative !important;
        }

        #contact-margin {
            margin-top: 70px !important;
        }

        #btn-contact-holder {
            text-align: center;
        }
    }

    @media (max-width: 600px) {
        #content {
            font-size: 16px !important;
        }

        #work-holder {
            font-size: 16px;
        }

        .footer-text {
            font-size: 17px !important;
        }

        .info-holder {
            text-align: center;
            margin-top: 10px;
        }

        .info-button {
            position: static;
        }

        #typing-animation {
            font-size: 16px;
        }

        #typing-animation-2 {
            font-size: 12px;
        }
    }


    /*ANIMATIONS*/
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

    .active-contact-animation {
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
    ......
</style>
