document.addEventListener("DOMContentLoaded",(()=>{
    document.body.classList.add("loaded_hiding")
    window.setTimeout(
        (function(){
            document.body.classList.add("loaded")
            document.body.classList.remove("loaded_hiding")
        }),
        500
    )}))
jQuery(document).ready(function($){
    //$(".owl-carousel__list-items").owlCarousel({loop:!0,margin:20,responsive:{0:{items:1},600:{items:2},1e3:{items:3}}})
    //$(".prof-affil__items").owlCarousel({loop:!1,margin:60,dots:!0,responsive:{0:{items:1,margin:0},400:{items:2,margin:20},500:{items:3,margin:20},600:{items:4,margin:30},900:{items:6,margin:30},1e3:{items:6,margin:60}}})
    //$(".send-btn").on("click",(function(){return;let e=$(this).parents(".modal-form-content"),t=$(this).parents(".modal").find(".modal-success-content");e.addClass("d-none"),t.removeClass("d-none")}));
    document.addEventListener( 'wpcf7mailsent', function(event){
        console.log(event);
        form_sent(event.target);
    },false );
    function form_sent(form){
        location="success?form="+form.wpcf7.id
    }

    $(".back-to-top").click(() => {
        $('html, body').animate({
            scrollTop: 0
          }, 1500);
    });
})