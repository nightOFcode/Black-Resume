<script>
    var navbar = $(".navbar");

    $(document).ready(
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

        }));

</script>
