$(function(){
    setTimeout(function () {
            $('.intro-header')
                .css({'visibility':'visible'})
                .addClass('animated fadeInDown');
        }, 1000
    );
    setTimeout(function () {
            $('.img-responsive')
                .css({'visibility':'visible'})
                .addClass('animated bounceIn');
        }, 500
    );
    $('[data-toggle="tooltip"]').tooltip();
});

//# sourceMappingURL=all.js.map
