<script>
    var navbar = $(".navbar");

    $(document).ready(
        $(window).scroll(function () {
            var div1 = $(navbar);
            var div2 = $("#divider-2");
            var div3 = $("#content");
            var div1_top = div1.offset().top;
            var div2_top = div2.offset().top;
            var div3_top = div3.offset().top;
            var div1_bottom = div1_top + div1.height();
            var div2_bottom = div2_top + div2.height();
            var div3_bottom = div3_top + div3.height();

            if (div1_bottom >= div2_top && div1_top < div2_bottom || div1_bottom >= div3_top && div1_top < div3_bottom) {
                $(navbar).addClass('theme');
                $(navbar).addClass('rounded-3');
            } else {
                $(navbar).removeClass('theme');
                $(navbar).removeClass('rounded-3');
            }
        }));

</script>
