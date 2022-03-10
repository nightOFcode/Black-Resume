<script>
    var navbar = $(".navbar");

    $(document).ready(
        $(window).scroll(function () {
            /*upper div*/
            var div1 = $(navbar);
            /*the bottom div*/
            var div2 = $("#contact-clean");
            var div1_top = div1.offset().top;
            var div2_top = div2.offset().top;
            var div1_bottom = div1_top + div1.height();
            var div2_bottom = div2_top + div2.height();

            if (div1_bottom >= div2_top && div1_top < div2_bottom) {
                if ($('#offcanvas').hasClass('dark-mode')) {
                    $(navbar).addClass('dark-mode');
                    $(navbar).addClass('rounded-3');
                } else {
                    $(navbar).addClass('light-mode');
                    $(navbar).addClass('rounded-3');
                }
            } else {
                $(navbar).removeClass('dark-mode');
                $(navbar).removeClass('light-mode');
                $(navbar).removeClass('rounded-3');
            }
        })
    );
</script>
