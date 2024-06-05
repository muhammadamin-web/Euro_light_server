function jtaCarousel(contUlEl) {
    var spd = 1000,
        autoDel = 4000,
        bnr = contUlEl,
        bnrNxt = '.banner-next',
        bnrPrv = '.banner-prev',
        bnrLoc = '.banner-location',
        bnrInd = '.banner-indicator',
        bnrItm = '.banner-item',
        bnrItmFirst = bnrItm + ':first',
        bnrItmLast = bnrItm + ':last',
        bnrItmWdth = $(bnrItm).outerWidth(),
        bnrItmNxtSli = '-=' + bnrItmWdth,
        bnrItmPrvSli = '+=' + bnrItmWdth,
        active = 'active',
        disabled = 'disabled',
        bnrCurSli = 1,
        bnrItmCount = $(bnrItm).length,
        timer;

    $(window).resize(function() {
        bnrItmWdth = $(bnrItm).outerWidth();
        bnrItmNxtSli = '-=' + bnrItmWdth;
        bnrItmPrvSli = '+=' + bnrItmWdth;
    });

    $(bnr).addClass(active);
    $(bnrItm).each(function() {
        $(bnrLoc).append('<div class="banner-indicator"></div>');
    });

    $(bnrInd).first().addClass('selected');

    function auto() {
        if ($(bnr).hasClass(active)) {
            clearInterval(timer);
            timer = setInterval(function() {
                $(bnr).animate({marginLeft: bnrItmNxtSli}, spd, function() {
                    $(bnr).find(bnrItmLast).after($(bnr).find(bnrItmFirst));
                    $(bnr).css({marginLeft: 0});
                    updateIndicators();
                });
            }, autoDel);
        }
    }

    function updateIndicators() {
        var selected = $(bnrLoc).find('.selected').removeClass('selected');
        var next = selected.next(bnrInd).length ? selected.next(bnrInd) : $(bnrInd).first();
        next.addClass('selected');
        bnrCurSli = (bnrCurSli % bnrItmCount) + 1;
    }

    function resetAutoSlide() {
        clearInterval(timer);
        auto();
    }

    $(bnrNxt).click(function() {
        if (!$(bnr).hasClass(disabled)) {
            $(bnr).addClass(disabled);
            $(bnr).animate({marginLeft: bnrItmNxtSli}, spd, function() {
                $(bnr).find(bnrItmLast).after($(bnr).find(bnrItmFirst));
                $(bnr).css({marginLeft: 0});
                $(bnr).removeClass(disabled);
                updateIndicators();
            });
            resetAutoSlide();
        }
    });

    $(bnrPrv).click(function() {
        if (!$(bnr).hasClass(disabled)) {
            $(bnr).addClass(disabled);
            $(bnr).find(bnrItmFirst).before($(bnr).find(bnrItmLast));
            $(bnr).css({marginLeft: bnrItmNxtSli});
            $(bnr).animate({marginLeft: 0}, spd, function() {
                $(bnr).removeClass(disabled);
                updateIndicators();
            });
            resetAutoSlide();
        }
    });

    $(bnr).hover(function() {
        clearInterval(timer);
    }, function() {
        resetAutoSlide();
    });

    auto();
}

jtaCarousel('.banner');
