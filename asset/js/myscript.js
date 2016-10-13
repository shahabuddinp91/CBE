$(document).ready(function () {
    $(".flip").on({
        mouseenter: function () {
            $(".ct").slideToggle("slow");
        },
    });
    $(".ct").on({
        mouseleave: function () {
            $(".ct").slideToggle("slow");
        }
    });
//    $(".flip").mouseenter(function () {
//        $(".ct").slideToggle("slow");
//    });
    $(".product").on({
        mouseenter: function () {
            $(".pdt").slideToggle("slow");
        },
    });
    $(".pdt").on({
        mouseleave: function () {
            $(".pdt").slideToggle("slow");
        }
    });
//    $(".product").mouseenter(function () {
//        $(".pdt").slideToggle("slow");
//    });

});