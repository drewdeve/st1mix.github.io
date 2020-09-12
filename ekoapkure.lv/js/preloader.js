document.body.onload = function()
{
    $(".dot-1").css("animation", "dot-light 2s 0s forwards");
    $(".dot-2").css("animation", "dot-light 2s 0.25s forwards");
    $(".dot-3").css("animation", "dot-light 2s 0.50s forwards");
    $(".dot-4").css("animation", "dot-light 2s 0.75s forwards");
    setTimeout(function(){$(".load-1").css("width", "0");}, 2000);
    setTimeout(function(){$(".load-2").css("height", "0");}, 3000);
    setTimeout(function(){$(".load-3").css("height", "0");}, 3300);
    setTimeout(function(){$(".load-4").css("height", "0");}, 3500);
    setTimeout(function(){$(".preloader").css("display", "none");}, 4200);
}