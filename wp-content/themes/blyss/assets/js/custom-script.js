function getUrlParams(search) {
    const hashes = search.slice(search.indexOf('?') + 1).split('&')
    const params = {};
    hashes
        .filter(function (hash) {
            return hash;
        })
        .map(function (hash) {
            const [key, val] = hash.split('=');
            params[key] = decodeURIComponent(val)
        });
    return params
}

function getUrlParam(param, defaultValue = null) {
    let params = getUrlParams(window.location.search);
    return params[param] ? params[param] : defaultValue;
}

jQuery(document).ready(function($) {
    function loadPosts(data, callback) {
        data.action = 'category_posts';
        data.category = data.category || 'all';
        $('#all .container .row').addClass('blurred');
        $.ajax({
            url: blyssajax.url,
            data,
            type: 'post',
            dataType: 'json',
            success: function(json) {
                callback && callback(json);
            },
            complete: function () {
                $('#all .container .row').removeClass('blurred');
            }
        });
    }

    function buildPosts(json) {
        let html = '';
        $.each(json.posts, function (index, post) {
            let categories = '';
            $.each(post.categories, function (i, cat) {
                categories += cat + ',';
            });
            categories = categories.replace(/(^,)|(,$)/g, "")
            html += '<div class="col-lg-4 col-md-6 col-12">\n' +
                '    <a class="blog_page_item" href="' + post.link + '">\n' +
                '       <div class="blog_page_item_img">\n' +
                '           ' + post.image + '\n' +
                '       </div>\n' +
                '       <div class="blog_page_item_info">\n' +
                '           <div class="blog_page_h3 type_four">' + categories + '</div>\n' +
                '           <div class="blog_page_h4" title="'+ post.title +'">' + post.title + '</div>\n' +
                '           <div class="blog_page_item_text">' + post.excerpt + '</div>\n' +
                '       </div>\n' +
                '   </a>\n' +
                '</div>';
        });

        return html;
    }

    function updatePosts(json) {
        let html = buildPosts(json);
        $('#all .container .row').html(html);
        enableMore(json);
    }

    function addPosts(json) {
        let html = buildPosts(json);
        $('#all .container .row').append(html);
        enableMore(json);
    }

    function enableMore(json) {
        if (json.next) {
            $('#all .read_more').show();
        } else {
            $('#all .read_more').hide();
        }
    }

    $('#blog_page_tab li').on('click', function (e) {
        e.preventDefault();
        let  target = $(e.currentTarget);
        let  target_a = target.find('a');
        let category = target_a.data('category');
        loadPosts({category}, function (json) {
            updatePosts(json);
            $('#blog_page_tab li a').removeClass('active');
            target_a.addClass('active');
            let url = (category == 'all') ? location.pathname : location.pathname + '?category='+category;
            history.pushState({category}, '', url)
        });
    });
    $('#all .read_more').on('click', function (e) {
        e.preventDefault();
        let  target = $('#blog_page_tab li a.active');
        let category = target.data('category');
        let offset = $('#all .container .row .blog_page_item').length;
        loadPosts({category, offset}, function (json) {
            addPosts(json);
        });
    });
    if (blyssajax.category) {
        loadPosts({category: blyssajax.category}, function (json) {
            updatePosts(json);
            $('#blog_page_tab li a').removeClass('active');
            $('#' + blyssajax.category + '-tab').addClass('active');
        });
    }

    $('.blog_page_link').on('click', function (e) {
        e.preventDefault();
        let offset = $('.blog_page_resources').offset();
        $('html, body').animate({scrollTop: offset.top}, 'slow');
    });

    $('.blog_page_carousel').owlCarousel({
        loop:false,
        dots:false,
        margin:40,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    
    //js for open modal video
    //let hl = (typeof lang_slug != 'undefined') ? (lang_slug ? lang_slug.replaceAll('/', '') : 'en') : null;
    if (typeof $.fn.modalVideo === 'function') {
        $(".js-modal-btn").modalVideo({channel: 'youtube', youtube: {autoplay: 1, modestbranding: 1}});
    }
});


