jQuery(document).ready(function ($) {
    $('.dropdown-toggle').click(function() {
        if($(window).width()>991){
            var location = $(this).attr('href');
            window.location.href = location;
            return false;
        }
    });

    $('.navbar-nav > .nav-item > .dropdown-toggle, .navbar-nav > .nav-item >.dropdown-menu').hover(
        function(e){
           // console.log(e)
            if($(window).width()>991){
                let t=$(e.currentTarget).closest('.dropdown');
                console.log("a");
               // console.log(e.currentTarget);
               console.log(t.next('.dropdown'))
                t.addClass('show');
                t.find('.dropdown-menu:not(.dropdown-sub-items .dropdown-menu)').addClass('show');
            }
        },
        function(e){
            //console.log(e)
            if($(window).width()>991){
                let t=$(e.currentTarget).closest('.dropdown');
                 console.log("b");
                // console.log(e.currentTarget);
                console.log(t.next('.dropdown'))
                t.removeClass("show");
                t.find('.dropdown-menu:not(.dropdown-sub-items .dropdown-menu)').removeClass("show")}
        }
    );
    $(window).resize(function(){
        let t=$('.navbar-nav .dropdown');
        if($(window).width()<=991 && (cur_width=='full'||!cur_width)){
            $('.navbar-nav .dropdown-toggle').each((i,item)=>{
                item.dataset.toggle='dropdown'
            });
            cur_width='mobile';
            $('.navbar-nav .dropdown-toggle').dropdown();
            t.removeClass("show");
            t.find('.dropdown-menu').removeClass("show")
        } else
            if($(window).width()>991&&(cur_width=='mobile'||!cur_width)){
                $('.navbar-nav .dropdown-toggle').each((i,item)=>{
                    delete item.dataset.toggle
                });
                cur_width='full';
                $('.navbar-nav .dropdown-toggle').dropdown();
                t.removeClass("show");
                t.find('.dropdown-menu').removeClass("show")
            }
    });
    let cur_width=false;
    $(window).trigger('resize')
});