require("./bootstrap");
// window.bootstrap = require("bootstrap");

// const carousel = new bootstrap.Carousel("#carousel", {
//     interval: 300,
// });
// console.log(carousel);

$(function () {
    $('#flash-message').fadeIn(500).delay(2000).fadeOut(500);

    $('form').submit(function() {
        $(this).find(":submit").prop('disabled',true);
      });
});
