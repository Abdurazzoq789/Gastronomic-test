$(document).ready(function(){
    var isLiked = false
    $('.like').click(function(){
      if(!isLiked) {
          isLiked = !isLiked;
          $(this).children('.yurak').fadeOut(100);
          $(this).children('span').delay(100).fadeIn(300);

          var vsId = $(this).data('vs-id');
          var like = $(this).data('like');

          $.post('/site/vote', {
                  id: vsId,
                  like: like
              }, function(data, status) {}
          );

      }
    })

    var isVisible=false
    var topVisible =false

    $('.lang-toggler').click(function(){
        $('.other-lang').slideToggle(200);
        $('.chervon').toggleClass('rotate');
        $(".wrapp").toggle();
        if(isVisible)   {
            $('.search-form').hide(200);
            isVisible = false
        }
    })

    $(".other-lang>ul>li,.wrapp").click(function() {
        $(".other-lang").slideToggle(200);
        $('.chervon').toggleClass('rotate');
        $(".wrapp").toggle();
    });

    $('.search-icon').click(function(){
        $('.search-form').slideToggle(200);
        isVisible = true 
    })

    $('.top10').click(function() {
        $('.top10-item').slideToggle(200);
        $('.top-chevron').toggleClass('rotate');
        $('.wrapp2').toggle();

    })
    $('.top10-item a, .wrapp2').click(function() {
        $('.top10-item').slideToggle(200);
        $('.top-chevron').toggleClass('rotate');
        $('.wrapp2').hide()
    })
    $(".like-button").click(function(){
            $(this).find('.not-click').attr('src', './images/Clickedlike.svg');
            $(this).find('.not-click').delay(500).addClass('countAnim');
            $(this).find('.like-count').delay(500).fadeIn(200);

            var restId = $(this).data('restid');
            var like = $(this).data('like');

            $.post('/restaurant/vote', {
                    id: restId,
                    like: like
                }, function(data, status) {}
            );
        });         

    var carouselEl = $('#festival');

    carouselEl.owlCarousel({
        items: 3
    });

    $(".next").click(function() {
        carouselEl.trigger('next.owl.carousel');
    });

    $(".prev").click(function() {
        carouselEl.trigger('prev.owl.carousel');
    });

    $('.form-submit').click(function() {
        $('.forma').submit();
    });
})

