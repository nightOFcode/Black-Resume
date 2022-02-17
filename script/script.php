<script>

    $(document).ready(function () {
        var resume_list = $("#resume-list");
        var visible = $('#offcanvas').is("visible");
        var network_list = $("#network-list");

        $('#resume-holder').click(function () {
            if ($(resume_list).css("display") === "none") {
                $(resume_list).slideToggle(500);
            } else {
                $(resume_list).slideToggle(500);
            }
        });

        $('#network-holder').click(function () {
            if ($(network_list).css("display") === "none") {
                $(network_list).slideToggle(500);
            } else {
                $(network_list).slideToggle(500);
            }
        });

        $("#offcanvas-btn").click(function () {
            if (visible === 'false') {
                $(resume_list).show();
                $(network_list).show();
            } else {
                $(resume_list).hide();
                $(network_list).hide();
            }
        });

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

        var navbar = $(".navbar");

        $(window).scroll(function () {
            var div1 = $(navbar);
            var div2 = $("#content");
            var div1_top = div1.offset().top;
            var div2_top = div2.offset().top;
            var div1_bottom = div1_top + div1.height();
            var div2_bottom = div2_top + div2.height();

            if (div1_bottom >= div2_top && div1_top < div2_bottom) {
                $(navbar).addClass('color-background');
                $(navbar).addClass('rounded-3');
            } else {
                $(navbar).removeClass('color-background');
                $(navbar).removeClass('rounded-3');
            }

        });
    });

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
</script>