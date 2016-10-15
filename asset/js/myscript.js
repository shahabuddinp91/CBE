$(document).ready(function () {
    $(".flip").click(function(){
            $(".ct").slideDown("slow");
    });
    $(".ct").on({
        mouseleave: function () {
            $(".ct").slideUp("slow");
        }
    });
    $(".product").click(function () {
            $(".pdt").slideDown("slow");
    });
    $(".pdt").on({
        mouseleave: function () {
            $(".pdt").slideUp("slow");
        }
    });
});