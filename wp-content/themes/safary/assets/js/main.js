$(function(){
  $('.popup_link').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
  $('.gallery_slider').slick({
      prevArrow: '<button type="button" class="slick_btn slick-prev"></button>',
      nextArrow: '<button type="button" class="slick_btn slick-next"></button>',
      rows: 2,
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 880,
          settings: {
              // rows: 1,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: 1
          }
        },
      ]
    });


  $('.gallery_item_inner').magnificPopup({
  delegate: 'a',
  type: 'image',
  tLoading: 'Loading image #%curr%...',
  mainClass: 'mfp-img-mobile',
  gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
  },
  // image: {
  //   tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
  //   titleSrc: function(item) {
  //     return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
  //   }
  // }
});
  $('.menu_btn').on('click', function(){
    $('.menu-saf_menu-container').toggleClass('menu-saf_menu-container_active');
    $('.menu').toggleClass('menu_active');
  });
});
