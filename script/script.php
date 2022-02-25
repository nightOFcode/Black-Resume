<script>

    $(document).ready(function () {
        var visible = $('#offcanvas').is("visible");
        var resume_list = $("#resume-list");

        /*resume offcanvas jq*/

        $('#resume-holder').click(function () {
            if ($(resume_list).css("display") === "none") {
                $(resume_list).slideToggle(500);
            } else {
                $(resume_list).slideToggle(500);
            }
        });

        /*network offcanvas jq*/

        var network_list = $("#network-list");

        $('#network-holder').click(function () {
            if ($(network_list).css("display") === "none") {
                $(network_list).slideToggle(500);
            } else {
                $(network_list).slideToggle(500);
            }
        });

        /*closed offcanvas trigger*/

        $("#offcanvas-btn").click(function () {
            if (visible === 'false') {
                $(resume_list).show();
                $(network_list).show();
            } else {
                $(resume_list).hide();
                $(network_list).hide();
            }
        });

        /*closed offcanvas trigger on key*/

        $(document).on('keydown', function (event) {
            if (event.key === "Escape") {
                if (visible === 'false') {
                    $(resume_list).show();
                    $(network_list).show();
                } else {
                    $(resume_list).hide();
                    $(network_list).hide();
                }
            }
        });
    });

    /*animation jq*/

    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);

    /*message alerting hider*/

    var timeout;

    $(document).ready(function () {
        timeout = window.setTimeout(hideMessage, 2000)
    });

    function hideMessage() {
        $('#index-alert').animate(
            {opacity: 0}, 800
            , function () {
                $('#index-alert').css(
                    {
                        display: 'none'
                    }
                )
            }
        );
    }
</script>