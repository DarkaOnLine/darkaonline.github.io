const BEGIN_YEAR = '2006-03-01';

(function () {
    "use strict";

    $('.navbar-brand, .top-scroll a').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
                return false;
            }
        }
    });
    var navbarHeight = $('.main-nav').height();
    $('a.btnAbout, a.hire').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - navbarHeight
                }, 2000);
                return false;
            }
        }
    });
//=======================flexslider==============================================

//=====================================================================


//=================================menu scroll==========================================
    $('.navbar-nav').onePageNav({
        scrollOffset: navbarHeight,
        scrollSpeed: 1000,
        scrollThreshold: 0.25
    });
//========================================= portfolio filter =========================================


    $('#working-from').html(getYears('2004-02-01'));
    $('#beginning-from').html(getYears(BEGIN_YEAR));
    $('#progress-code').data('years', getYears(BEGIN_YEAR));
    $('#progress-db').data('years', getYears(BEGIN_YEAR));
    $('#progress-js').data('years', getYears(BEGIN_YEAR));
    $('#progress-css').data('years', getYears(BEGIN_YEAR));
    $('#progress-zend').data('years', getYears(BEGIN_YEAR));
    $('#progress-laravel').data('years', getYears('2012-02-01'));
    $('#progress-symfony').data('years', getYears('2013-02-01'));
    $('#progress-css-frameworks').data('years', getYears('2011-01-01'));
    $('#progress-git').data('years', getYears(BEGIN_YEAR));
    $('#progress-linux').data('years', getYears(BEGIN_YEAR));

    $('#current-year').html(new Date().getFullYear());

    //============================ function =========================================

    imgHover();
    lightboxPhoto();
    winHeight();
    barScroll();
    //============================ nav container sticky =========================================

    $(".navbar").sticky({topSpacing: 0});
    $('ul.nav li a').click(function () {
        $('.navbar-inverse .navbar-collapse').removeClass('in')
    });
//================= show content ==============================================================

})();


$(window).load(function () {
    $('#flex-head').flexslider({
        animation: "slide",
        slideshow: true
    });
    navScroll();
    $('#filterOptions a').click(function (e) {
        e.preventDefault();

        // set active class
        $('#filterOptions a').removeClass('cur');
        $(this).addClass('cur');

        // get group name from clicked item
        var groupName = $(this).attr('data-group');

        // reshuffle grid
        $grid.shuffle('shuffle', groupName);
    });
    /* initialize shuffle plugin */
    var $grid = $('#grid'),
        $sizer = $grid.find('.shuffle__sizer');

    $grid.shuffle({
        itemSelector: '.box', // the selector for the items in the grid
        sizer: $sizer
    });
});

$(window).resize(function () {
    navScroll();
    winHeight();

});
$(window).scroll(function () {
    navScroll();
});
//================================ function ========================================


function getYears(date)
{
    date = new Date(date).getTime();
    const today = new Date().getTime();
    return Math.floor((today - date) / (365 * 24 * 60 * 60 * 1000));
}

function imgHover() {
    $('.thumb-img').hover(function () {
        $(this).find('.link-search, .link-chain').fadeIn();
        $('.link-search').removeClass('fadeOutLeft').addClass('fadeInLeft');
        $('.link-chain').removeClass('fadeOutRight').addClass('fadeInRight');
        $(this).children('.folio-caption').animate({
            bottom: '0px'
        });

    }, function () {
        $(this).find('.link-search, .link-chain').fadeOut();
        $('.link-search').removeClass('fadeInLeft').addClass('fadeOutLeft');
        $('.link-chain').removeClass('fadeInRight').addClass('fadeOutRight');
        $(this).children('.folio-caption').animate({
            bottom: '-58px'
        });

    });
}

function lightboxPhoto() {
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
}
function navScroll() {

    var top = $(window).scrollTop();

    if (top > 3) {
        $('.main-nav').fadeIn();

    } else {

        $('.main-nav').fadeOut();
    }

}

function winHeight() {
    //==================================== height header============================
    var wHeight = $(window).height();
    $('.header').height(wHeight);
}

function percentToText(percent){
    var text = 'Beginner';

    if(percent >= 50){
        text = 'Intermediate';
    }

    if(percent >= 80){
        text = 'Advanced';
    }

    if(percent >= 90){
        text = 'In Love';
    }





    return text;
}

function barScroll() {
    setTimeout(function () {

        $('.progress-bar').each(function () {
            var me = $(this);
            var pe = $(this).children('.precent-value');
            var perc = me.attr("aria-valuenow");
            var years = me.data("years");

            var current_perc = 0;
            var y = years == 1 ? 'year' : 'years';

            var progress = setInterval(function () {
                if (current_perc >= perc) {
                    clearInterval(progress);
                } else {
                    current_perc += 1;
                    me.css('width', (current_perc) + '%');
                }

                //pe.text((current_perc)+' '+y);
                pe.text(percentToText(parseInt(perc))+' ('+years+' '+y+')');

            }, 40);
        });
    }, 200);
}
