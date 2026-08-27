jQuery(document).ready(function ($) {
    //js for scroltable in single post page
    $('.tablepress').scroltable();
    //js for sticky side bar in single post page
    $('.toc_widget_list').parent().addClass("content_bar");
    $('#got-questions, .contact-trigger').parent().addClass("content_bar no-mobile-sticky");
    $(function(){
        $(window).scroll(function(){
            if($(window).scrollTop()>890 && $(window).width() > 992){
                $('.side_bar').addClass("sticky_bar");
            }
            else {
                $('.side_bar').removeClass("sticky_bar");
            }
        });
    });
    //js for dropdown contents on mobile version
    $(".side_bar .side_bar_block:first-child h2").click(function() {
        $(".side_bar .side_bar_block:first-child .toc_widget_list").toggle();
    })
    $(".side_bar .toc_widget_list li a").click(function() {
        if($(window).width() < 992){
            $(".side_bar .side_bar_block:first-child .toc_widget_list").toggle();
        }
    })
    $(".toc_widget_list li").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top - 30;
        ntop = top-180;
        if($(window).width() > 992){
            $('body,html').animate({scrollTop: top}, 1500);
        }
        else {
            $('body,html').animate({scrollTop: ntop}, 1500);
        }
    });
    if($(window).width() < 992){
        $(function($){
            $(document).mouseup(function (e){
                var block = $(".side_bar .side_bar_block:first-child");
                if (!block.is(e.target)
                    && block.has(e.target).length === 0) {
                    $(".side_bar .side_bar_block:first-child .toc_widget_list").hide();
                }
            });
        })
    }
    else {
        $(".side_bar .side_bar_block:first-child .toc_widget_list").show();
    }
   // js for capitalize text
    // var t = $('.side_bar .toc_widget_list li a');
    // String.prototype.capitalize = function () {
    //     return this.toLowerCase().replace(/\b[a-z]/g, function (letter) {
    //         return letter.toUpperCase();
    //     });
    // };
    // var n = t.map(function(){ return $(this).text($(this).text().capitalize()); });
});