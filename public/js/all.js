$(function(){
    setTimeout(function () {
            $('.intro-header')
                .css({'visibility':'visible'})
                .addClass('animated fadeInDown');
            $('.img-responsive')
                .css({'visibility':'visible'})
                .addClass('animated bounceIn');
        }, 1000
    );
    $('[data-toggle="tooltip"]').tooltip();
});

//# sourceMappingURL=all.js.map
