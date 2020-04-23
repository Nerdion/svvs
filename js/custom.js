$(document).ready(function() {
    $("#show").hide();

    $("#chairman").click(function() {
        $("#show").show();
    });

    //code for detecting active webpage
    var pageUrl = $(location).attr("href");
    var page = pageUrl.substring(pageUrl.lastIndexOf('/') + 1);
    $('nav.navbar > ul > li').removeClass('active');
    page = page.slice(0, -4);
    page = "#" + page;
    $(page).addClass('active');

    //code for hiding menu
    var toHide = ".verticalSlider > li";

    $(toHide).hide();

    $(document).scroll(function() {
        $(toHide).show();

        $(".verticalSlider").mouseover(
            function() {
                $(toHide).show();
            },
        );

        $(".verticalSlider").mouseout(
            function() {
                clearTimeout($.data(this, "scrollCheck"));
                $.data(this, "scrollCheck", setTimeout(function() {
                    $(toHide).hide();
                }, 1500));
            },
        );

        clearTimeout($.data(this, "scrollCheck"));
        $.data(this, "scrollCheck", setTimeout(function() {
            $(toHide).hide();
        }, 1500));
    });

    //code for animated smooth scrolling
    $(document).on('click', 'a[href^="#"]', function(e) {
        e.preventDefault();
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000, 'linear');
    });

});

//show div based on scroll
// window.onscroll = function() { scrollFunction() };

// function scrollFunction() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//         document.getElementById("navbar").style.top = "0";
//     } else {
//         document.getElementById("navbar").style.top = "-50px";
//     }
// }