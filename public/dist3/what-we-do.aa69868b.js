$(document).ready(function() {
    $(function() {
        setTimeout(function() {
            $("#loader").hide();
        }, 5000);
    });
    $(".one").hover(function() {
        $(this).siblings(".one").toggleClass("show");
    });
    $(".two").hover(function() {
        $(this).siblings(".two").toggleClass("show");
    });
    $(".three").hover(function() {
        $(this).siblings(".three").toggleClass("show");
    });
    $(".four").hover(function() {
        $(this).siblings(".four").toggleClass("show");
    });
    $(".five").hover(function() {
        $(this).siblings(".five").toggleClass("show");
    });
    $(".six").hover(function() {
        $(this).siblings(".six").toggleClass("show");
    });
});

//# sourceMappingURL=knowledge.aa69868b.js.map
