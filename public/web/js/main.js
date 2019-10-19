$(document).ready(function(){
    $('.menuItem.dropDown > a').click(function(e){
        e.preventDefault();
        $(this).parent('.menuItem.dropDown').toggleClass('active').find('.dropDownMenu').slideToggle();
    });
    $('.mainMenuButton .buttonHolder').click(function(){
        $(this).toggleClass('active');
        $('.mainMenu > ul').toggleClass('active slideInLeft animated');
        $('.mainMenu ul .menuItem > a').toggleClass('active zoomInLeft animated');
    });
    $('.accordionBlock .accordionItem h3').click(function(){
        $(this).parent().toggleClass('active').find('i').toggleClass('fa-minus fa-plus');
        $(this).parents('.accordionItem').siblings().find('.accordionTitle').removeClass('active');
        $(this).parents('.accordionItem').siblings().find('i').removeClass('fa-minus').addClass('fa-plus');
        $(this).parents('.accordionItem').find('.accordionContent').slideToggle().parent().siblings().find('.accordionContent').slideUp();
    });
    $('.gallerySlider .owl-carousel').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        items: 1,
        margin: 0,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
    });
    $('.testimonials .owl-carousel').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        items: 1,
        margin: 0,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
    });
    $('.statistic .count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        },{
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    function firstWordSpan() { 
    var node = $(".firstWordSpan").contents().filter(function (){return this.nodeType == 3}).first(),
        text = node.text(),
        first = text.slice(0, text.indexOf(" "));
    if (!node.length)
        return;
        node[0].nodeValue = text.slice(first.length);
        node.before('<span class="firstWord">' + first + '</span>');
    };
    firstWordSpan();

});