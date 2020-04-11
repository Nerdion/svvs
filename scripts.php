</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.animateNumber.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/aos.js"></script>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var pageUrl = $(location).attr("href");
        var page = pageUrl.substring(pageUrl.lastIndexOf('/') + 1);
        $('nav.navbar > ul > li').removeClass('active');
        page = page.slice(0,-4);
        page = "#" + page;
        $(page).addClass('active');
    });
</script>

</body>

</html>