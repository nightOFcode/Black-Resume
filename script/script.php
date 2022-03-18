<script>

    $(document).ready(function () {
        var visible = $('#offcanvas').is("visible");

        /*NETWORK OFFCANVAS*/
        var network_list = $("#network-list");

        $('#network-holder').click(function () {
            if ($(network_list).css("display") === "none") {
                $(network_list).slideToggle(500);
            } else {
                $(network_list).slideToggle(500);
            }
        });

        /*CLOSED OFFCANVAS TRIGGER*/
        $("#offcanvas-btn").click(function () {
            if (visible === 'false') {
                $(resume_list).show();
                $(network_list).show();
            } else {
                $(resume_list).hide();
                $(network_list).hide();
            }
        });

        /*CLOSED OFFCANVAS TRIGGER ON KEY*/
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

    /*ANIMATION REVEAL*/

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

    $(document).ready(function () {
        $('.fade-animation').addClass('active-contact-animation');
    });


</script>