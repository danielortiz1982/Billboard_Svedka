(function(){
    $(document).ready(function() {

        var $lightbox = $('.js-lightbox-container');
        var $body = $('body');

        // todo add as template, properly.
        var getVideoHtml = function getVideoHtml( videoId ) {
            return '<video data-video-id="' + videoId + '"' + 
                        'data-account="1125911414" ' +
                        'data-player="S1grkWLi" ' +
                        'data-embed="default" ' +
                        'class="video-js" ' +
                        'controls autoplay ' +
                        'style="width: 100%; height: 100%; position: absolute; top: 0px; bottom: 0px; right: 0px; left: 0px;"></video>' +
                        '<script src="//players.brightcove.net/1125911414/S1grkWLi_default/index.min.js"></script>';
        };

        $('body').on('click', '.js-video-container[data-video-id]', function(e) {
            e.preventDefault();
            var $this = $(this);
            var videoId = $this.attr('data-video-id');
            var videoHtml = getVideoHtml( videoId );

            $body.css('overflow', 'hidden');
            $lightbox.addClass('lightbox-container--show');
            $lightbox.find('.js-video-wrapper').html(videoHtml);
        });

        $('body').on('click', '.js-lightbox-close', function(e) {
            $body.css('overflow', '');
            $lightbox.removeClass('lightbox-container--show');
            $lightbox.find('.js-video-wrapper').html('');
        });


        (function(){
            $('.mainNav nav li a').on('click', function(e){
                var linkLocation = $(this).attr('href');
                if($(this).is('a:not([href^="#"])')){
                    window.location = linkLocation;
                }else{
                    e.preventDefault();
                    $('html, body').animate({
                    scrollTop: $(linkLocation).offset().top
                    }, 1000);
                }
            });
            $('.mobileNavigation li a').on('click', function(e){
                var linkLocation = $(this).attr('href');
                $('.navOpen').show();
                $('.navClose').hide();
                if($(this).is('a:not([href^="#"])')){
                    $('.mobileNavigation').css('width', '0');
                    window.location = linkLocation;
                }else{
                    e.preventDefault();
                    $('.mobileNavigation').css('width', '0');
                    $('html, body').animate({
                    scrollTop: $(linkLocation).offset().top
                    }, 1000);
                }
            });
            $('.navClose').hide();
            $('.navOpen').on('click', function(){
                $(this).hide();
                $('.navClose').show();
                $('.mobileNavigation').css('width', '100%');

            });
            $('.navClose').on('click', function(){
                $(this).hide();
                $('.navOpen').show();
                $('.mobileNavigation').css('width', '0');
            });
        })();
    });
})();